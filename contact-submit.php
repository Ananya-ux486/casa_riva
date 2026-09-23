<?php
declare(strict_types=1);
session_start();
require_once __DIR__ . '/includes/config.php';

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    header('Location: ' . cr_url('contact'));
    exit;
}

$name = trim((string) ($_POST['name'] ?? ''));
$email = trim((string) ($_POST['email'] ?? ''));
$phone = trim((string) ($_POST['phone'] ?? ''));
$city = trim((string) ($_POST['city'] ?? ''));
$interest = trim((string) ($_POST['interest'] ?? ''));
$message = trim((string) ($_POST['message'] ?? ''));

$errors = [];
if (mb_strlen($name) < 2) {
    $errors['name'] = 'Please enter your name.';
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Please enter a valid email.';
}
if (mb_strlen($message) < 12) {
    $errors['message'] = 'Please tell us a little about the project.';
}

$old = compact('name', 'email', 'phone', 'city', 'interest', 'message');

if ($errors) {
    $_SESSION['contact_errors'] = $errors;
    $_SESSION['contact_old'] = $old;
    header('Location: ' . cr_url('contact'));
    exit;
}

$dir = CR_ROOT . '/storage';
if (!is_dir($dir)) {
    mkdir($dir, 0755, true);
}
$file = $dir . '/enquiries.json';
$entries = [];
if (is_file($file)) {
    $decoded = json_decode((string) file_get_contents($file), true);
    if (is_array($decoded)) {
        $entries = $decoded;
    }
}
$entries[] = $old + ['received_at' => date('c'), 'ip' => $_SERVER['REMOTE_ADDR'] ?? ''];
file_put_contents($file, json_encode($entries, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

header('Location: ' . cr_url('contact') . '?sent=1');
exit;
