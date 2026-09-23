<?php
declare(strict_types=1);

$CR_NAV = [
    ['label' => 'Home', 'href' => cr_url('')],
    ['label' => 'Design Gallery', 'href' => cr_url('gallery')],
    ['label' => 'Offerings', 'href' => cr_url('services')],
    ['label' => 'Projects', 'href' => cr_url('projects')],
    ['label' => 'Contact', 'href' => cr_url('contact')],
];

$CR_STATS = [
    ['value' => '2500+', 'label' => 'Projects Delivered'],
    ['value' => '500+', 'label' => 'Expert Designers'],
    ['value' => '15+', 'label' => 'Cities Across India'],
    ['value' => '4.9', 'label' => 'Client Rating'],
];

// Each partner: ['name' => display name, 'logo' => inline SVG or img tag string]
// Logos are self-contained SVGs so they always render — no external CDN needed
$CR_PARTNERS = [
    // Slide 1
    [
        'name' => 'Hettich',
        'logo' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 40" width="110" height="36"><rect width="120" height="40" fill="none"/><text x="4" y="28" font-family="Arial Black,Arial,sans-serif" font-weight="900" font-size="22" fill="#e30613" letter-spacing="-1">Hettich</text></svg>',
    ],
    [
        'name' => 'Merino',
        'logo' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130 44" width="110" height="36"><rect width="130" height="44" rx="4" fill="#c8102e"/><text x="8" y="30" font-family="Arial,sans-serif" font-weight="700" font-size="18" fill="#fff" letter-spacing="1">MERINO</text><text x="8" y="40" font-family="Arial,sans-serif" font-size="7" fill="#fff" letter-spacing="1">QUALITY · EXCELLENCE · PRIDE</text></svg>',
    ],
    [
        'name' => 'REHAU',
        'logo' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130 40" width="110" height="36"><circle cx="14" cy="20" r="14" fill="#009fe3"/><polyline points="14,10 8,20 14,30 20,20 14,10" fill="none" stroke="#fff" stroke-width="2.5"/><text x="34" y="27" font-family="Arial Black,Arial,sans-serif" font-weight="900" font-size="22" fill="#1a1a1a" letter-spacing="1">REHAU</text></svg>',
    ],
    [
        'name' => 'Saint-Gobain',
        'logo' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 160 44" width="130" height="36"><rect width="160" height="44" fill="none"/><path d="M8 22 A14 14 0 1 1 8.1 22" fill="none" stroke="#e2001a" stroke-width="3"/><path d="M8 22 L22 22" stroke="#e2001a" stroke-width="3"/><text x="30" y="18" font-family="Arial,sans-serif" font-weight="700" font-size="11" fill="#1a1a1a" letter-spacing="0.5">SAINT-GOBAIN</text><text x="30" y="32" font-family="Arial,sans-serif" font-size="8" fill="#666" letter-spacing="0.3">Making the world a better home</text></svg>',
    ],
    [
        'name' => 'Stylam',
        'logo' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130 40" width="110" height="36"><rect width="130" height="40" rx="2" fill="#c8102e"/><text x="8" y="28" font-family="Arial Black,Arial,sans-serif" font-weight="900" font-size="22" fill="#fff" letter-spacing="2">STYLAM</text></svg>',
    ],
    [
        'name' => 'KAFF',
        'logo' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 40" width="80" height="36"><rect width="100" height="40" fill="none"/><text x="4" y="30" font-family="Arial Black,Arial,sans-serif" font-weight="900" font-size="28" fill="#1a1a1a" letter-spacing="3">KAFF</text></svg>',
    ],
    // Slide 2
    [
        'name' => 'Futura',
        'logo' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 44" width="120" height="36"><rect width="150" height="44" rx="2" fill="#c8102e"/><text x="8" y="22" font-family="Arial Black,Arial,sans-serif" font-weight="900" font-size="16" fill="#fff" letter-spacing="1">FUTURA</text><text x="8" y="36" font-family="Arial,sans-serif" font-size="8" fill="#ffd" letter-spacing="0.5">SINKS THAT THINK</text></svg>',
    ],
    [
        'name' => 'Franke',
        'logo' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130 40" width="110" height="36"><rect width="130" height="40" rx="2" fill="#c8102e"/><text x="8" y="28" font-family="Arial Black,Arial,sans-serif" font-weight="900" font-size="22" fill="#fff" letter-spacing="1">FRANKE</text></svg>',
    ],
    [
        'name' => 'Jaquar',
        'logo' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 44" width="120" height="36"><rect width="150" height="44" fill="none"/><text x="4" y="28" font-family="Georgia,serif" font-style="italic" font-size="26" fill="#1a1a1a" letter-spacing="1">Jaquar</text><text x="4" y="40" font-family="Arial,sans-serif" font-size="8" fill="#666" letter-spacing="2">GROUP</text></svg>',
    ],
    [
        'name' => 'Ruhe',
        'logo' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 110 40" width="90" height="36"><rect width="110" height="40" fill="none"/><text x="4" y="28" font-family="Arial Black,Arial,sans-serif" font-weight="900" font-size="24" fill="#1a1a1a" letter-spacing="2">Ruhe</text><text x="72" y="18" font-family="Arial,sans-serif" font-size="10" fill="#666">®</text></svg>',
    ],
    [
        'name' => 'Philips',
        'logo' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 150 44" width="120" height="36"><rect width="150" height="44" rx="3" fill="#0b5ed7"/><text x="8" y="27" font-family="Arial Black,Arial,sans-serif" font-weight="900" font-size="18" fill="#fff" letter-spacing="1">PHILIPS</text><text x="8" y="38" font-family="Arial,sans-serif" font-size="7" fill="#cde" letter-spacing="1">HOME LIGHTING</text></svg>',
    ],
    [
        'name' => 'Wipro',
        'logo' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130 44" width="110" height="36"><rect width="130" height="44" fill="none"/><circle cx="18" cy="22" r="14" fill="none" stroke="#6db33f" stroke-width="3"/><circle cx="18" cy="22" r="6" fill="#6db33f"/><text x="38" y="30" font-family="Arial Black,Arial,sans-serif" font-weight="900" font-size="22" fill="#1a1a1a" letter-spacing="1">wipro</text></svg>',
    ],
    // Slide 3
    [
        'name' => 'Artisan',
        'logo' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130 40" width="110" height="36"><rect width="130" height="40" fill="none"/><text x="4" y="28" font-family="Georgia,serif" font-style="italic" font-size="24" fill="#3a2c1e" letter-spacing="1">artisan</text></svg>',
    ],
    [
        'name' => 'iDecorwala',
        'logo' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 160 44" width="130" height="36"><rect width="160" height="44" rx="4" fill="#fff" stroke="#c8102e" stroke-width="2"/><text x="8" y="20" font-family="Arial Black,Arial,sans-serif" font-weight="900" font-size="13" fill="#c8102e">iDecorwala</text><text x="8" y="35" font-family="Arial,sans-serif" font-size="8" fill="#666" letter-spacing="0.5">DECORATING YOUR WORLD</text></svg>',
    ],
    [
        'name' => 'Nippon Paint',
        'logo' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 170 44" width="140" height="36"><rect width="170" height="44" fill="none"/><rect x="0" y="0" width="30" height="44" rx="2" fill="#003087"/><text x="4" y="20" font-family="Arial Black,Arial,sans-serif" font-weight="900" font-size="10" fill="#fff">N</text><text x="2" y="32" font-family="Arial Black,Arial,sans-serif" font-weight="900" font-size="7" fill="#fff">IPPON</text><text x="36" y="22" font-family="Arial Black,Arial,sans-serif" font-weight="900" font-size="14" fill="#003087" letter-spacing="1">NIPPON</text><text x="36" y="38" font-family="Arial,sans-serif" font-size="9" fill="#c8102e" letter-spacing="0.5">PAINT · Inspired by you</text></svg>',
    ],
    [
        'name' => 'Urban Ladder',
        'logo' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 170 44" width="140" height="36"><rect width="170" height="44" fill="none"/><rect x="0" y="8" width="24" height="28" rx="2" fill="none" stroke="#e07b39" stroke-width="2.5"/><line x1="8" y1="8" x2="8" y2="36" stroke="#e07b39" stroke-width="2.5"/><line x1="16" y1="8" x2="16" y2="36" stroke="#e07b39" stroke-width="2.5"/><line x1="0" y1="20" x2="24" y2="20" stroke="#e07b39" stroke-width="2"/><text x="32" y="20" font-family="Arial,sans-serif" font-weight="700" font-size="12" fill="#1a1a1a" letter-spacing="0.5">URBAN</text><text x="32" y="34" font-family="Arial,sans-serif" font-weight="700" font-size="12" fill="#1a1a1a" letter-spacing="0.5">LADDER</text></svg>',
    ],
    [
        'name' => 'Spitze',
        'logo' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 140 44" width="110" height="36"><rect width="140" height="44" rx="2" fill="#c8102e"/><text x="8" y="28" font-family="Arial Black,Arial,sans-serif" font-weight="900" font-size="20" fill="#fff" letter-spacing="2">Spitze</text><text x="8" y="40" font-family="Arial,sans-serif" font-size="7" fill="#fdd" letter-spacing="1">by Everyday</text></svg>',
    ],
    [
        'name' => 'Häfele',
        'logo' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130 40" width="110" height="36"><rect width="130" height="40" fill="none"/><text x="4" y="28" font-family="Arial Black,Arial,sans-serif" font-weight="900" font-size="24" fill="#1a1a1a" letter-spacing="1">Häfele</text></svg>',
    ],
];

// Group into slides of 6
$CR_PARTNER_SLIDES = array_chunk($CR_PARTNERS, 6);

$CR_CITIES = [
    'Delhi NCR',
    'Mumbai',
    'Bengaluru',
    'Hyderabad',
    'Pune',
    'Chennai',
    'Kolkata',
    'Ahmedabad',
    'Jaipur',
    'Chandigarh',
    'Lucknow',
    'Kochi',
    'Indore',
    'Surat',
    'Coimbatore',
];

$CR_SERVICES = [
    [
        'slug' => 'interior-design',
        'title' => 'Interior Design',
        'nav' => 'Interior Design',
        'kicker' => 'Composition',
        'summary' => 'Rooms composed with proportion, light and material — tailored to how a household actually lives.',
        'description' => 'Interior design at CASA RIVA begins with how a house is used at different hours of the day. We plan circulation, furniture, colour and joinery as one composition, so rooms feel calm rather than decorated. Every scheme is drawn, sampled and revised until the atmosphere is exact.',
        'image' => '9.jpg',
        'alt' => 'Ivory bedroom suite with tailored furniture and soft daylight',
        'points' => [
            'Spatial planning and furniture layouts',
            'Colour, textile and material palettes',
            'Joinery, lighting and art direction',
            'Styling and finishing layers',
        ],
    ],
    [
        'slug' => 'architecture',
        'title' => 'Architecture Design',
        'nav' => 'Architecture',
        'kicker' => 'Form',
        'summary' => 'Quiet architectural thinking for houses that need better light, better sequence and better bones.',
        'description' => 'Where a project requires more than furnishing, we work on the architecture of the interior: openings, volumes, staircases, façades and the relationship between rooms. The aim is permanence — work that still feels considered a decade later.',
        'image' => 'architecture-02.jpg',
        'alt' => 'Double-height interior with sculptural staircase and plaster walls',
        'points' => [
            'Interior architecture and volume studies',
            'Façade and opening composition',
            'Stair, threshold and gallery sequences',
            'Coordination with structural consultants',
        ],
    ],
    [
        'slug' => 'civil-construction',
        'title' => 'Civil Construction',
        'nav' => 'Civil Construction',
        'kicker' => 'Structure',
        'summary' => 'Careful building work that protects the design intent from the first setting-out line.',
        'description' => 'Construction is treated as part of the design, not a separate afterthought. We coordinate civil works so walls, floors and services land where the drawings intended, with site discipline that keeps the finished rooms as quiet as they were designed to be.',
        'image' => 'hallway-01.jpg',
        'alt' => 'Cream panelled townhouse hallway with stone floor and arched doorway',
        'points' => [
            'Setting-out and site coordination',
            'Wet works, floors and wall build-ups',
            'Services integration',
            'Quality supervision through completion',
        ],
    ],
    [
        'slug' => 'modular-kitchen',
        'title' => 'Modular Kitchen',
        'nav' => 'Modular Kitchen',
        'kicker' => 'Craft',
        'summary' => 'Kitchens planned as the working heart of the house — precise, generous and beautifully made.',
        'description' => 'A CASA RIVA kitchen is designed around cooking, gathering and light. Cabinetry, stone, brass and storage are specified as architecture: quiet elevations, durable worktops and hardware that feels considered every time it is used.',
        'image' => 'kitchen-01.jpg',
        'alt' => 'Ivory kitchen with marble island, oak cabinetry and brass taps',
        'points' => [
            'Workflow and appliance planning',
            'Bespoke and modular cabinetry',
            'Stone, brass and lighting specification',
            'Installation and finishing',
        ],
    ],
    [
        'slug' => 'wardrobe',
        'title' => 'Wardrobe',
        'nav' => 'Wardrobe',
        'kicker' => 'Joinery',
        'summary' => 'Dressing rooms and wardrobes as calm, tailored rooms rather than storage afterthoughts.',
        'description' => 'We design wardrobes and dressing rooms as interiors in their own right: oak millwork, considered lighting, and storage that holds clothing with the same care given to the rooms beyond. The result is order without severity.',
        'image' => 'wardrobe-01.jpg',
        'alt' => 'Walk-in dressing room with oak millwork, brass rails and a velvet ottoman',
        'points' => [
            'Walk-in dressing rooms',
            'Fitted bedroom wardrobes',
            'Island dressers and display',
            'Lighting and hardware detailing',
        ],
    ],
    [
        'slug' => 'turnkey-projects',
        'title' => 'Turnkey Projects',
        'nav' => 'Turnkey Projects',
        'kicker' => 'Continuity',
        'summary' => 'A single studio responsible from first conversation through the last object placed in the room.',
        'description' => 'Turnkey work allows one language to run through architecture, interiors, kitchen, wardrobe and finishing. CASA RIVA directs design, procurement and site so the house is handed over complete — ready to be lived in, not merely built.',
        'image' => '1.jpg',
        'alt' => 'Layered drawing room with chandelier, burl tables and bay window seating',
        'points' => [
            'End-to-end project direction',
            'Procurement and vendor coordination',
            'On-site execution',
            'Styling and handover',
        ],
    ],
    [
        'slug' => 'renovation',
        'title' => 'Renovation',
        'nav' => 'Renovation',
        'kicker' => 'Renewal',
        'summary' => 'Houses brought forward with respect for what already has character — and clarity where it does not.',
        'description' => 'Renovation is an editorial act: keep the moulding, correct the plan, renew the kitchen, quiet the circulation. We restore, edit and insert contemporary work so older houses feel lighter without losing their grain.',
        'image' => 'renovation-01.jpg',
        'alt' => 'Renovated drawing room with panelling, fireplace and contemporary seating',
        'points' => [
            'Plan corrections and light studies',
            'Joinery and kitchen replacements',
            'Period detail conservation',
            'Phased living-in renovations',
        ],
    ],
];

$CR_PROJECTS = [
    [
        'slug' => 'belgravia-drawing-room',
        'title' => 'Belgravia Drawing Room',
        'category' => 'Living',
        'location' => 'Townhouse interior',
        'year' => '',
        'image' => '1.jpg',
        'gallery' => ['1.jpg', '4.jpg', 'hallway-01.jpg'],
        'alt' => 'Classical living room with crystal chandelier, green velvet chairs and burl coffee tables',
        'summary' => 'A collected sitting room organised around the fireplace, the bay and a low field of burl tables.',
        'description' => 'This drawing room holds a conversation between classical plasterwork and a more relaxed contemporary sit. Green velvet, a pale boucle sofa and a blue rug keep the palette quiet while art and objects give the room its particular character.',
        'info' => [
            'Room' => 'Drawing room',
            'Palette' => 'Ivory, forest, teal',
            'Focus' => 'Seating, art, lighting',
        ],
    ],
    [
        'slug' => 'mayfair-salon',
        'title' => 'Mayfair Salon',
        'category' => 'Living',
        'location' => 'Piano nobile',
        'image' => '2.jpg',
        'gallery' => ['2.jpg', 'study-01.jpg', 'dining-01.jpg'],
        'alt' => 'Formal salon with ivory sofa, jewel-tone chairs and a gallery of portraits',
        'summary' => 'A symmetrical salon with a gallery wall, jewel-tone seating and a pale stone table.',
        'description' => 'The salon is planned as a clear axis from the window to the chimney wall. Portraits, brass lighting and a dark bookcase give the room depth, while the ivory sofa keeps the centre of the composition light.',
        'info' => [
            'Room' => 'Salon',
            'Palette' => 'Ivory, navy, emerald, brass',
            'Focus' => 'Art wall, seating, millwork',
        ],
    ],
    [
        'slug' => 'crescent-living',
        'title' => 'Crescent Living',
        'category' => 'Living',
        'location' => 'Apartment interior',
        'image' => '3.jpg',
        'gallery' => ['3.jpg', '4.jpg', '1.jpg'],
        'alt' => 'Curved ivory sofa in a warm contemporary living room with arched niches',
        'summary' => 'A softer contemporary living room built around a curved sofa and arched niches.',
        'description' => 'Arches, a sculptural brass pendant and a mineral rug set a warmer register. The room is designed for evening light — low lamps, terracotta and olive — without losing the pale architectural shell.',
        'info' => [
            'Room' => 'Living',
            'Palette' => 'Cream, rust, olive, brass',
            'Focus' => 'Seating, niches, lighting',
        ],
    ],
    [
        'slug' => 'lightwell-townhouse',
        'title' => 'Lightwell Townhouse',
        'category' => 'Living',
        'location' => 'Urban townhouse',
        'image' => '4.jpg',
        'gallery' => ['4.jpg', 'architecture-02.jpg', 'architecture-01.jpg'],
        'alt' => 'Sunlit living room with arched sash window, herringbone floor and sculptural chandelier',
        'summary' => 'A high-ceilinged room organised around an arched window and a field of afternoon light.',
        'description' => 'The architecture does most of the work: the arch, the chimney and the herringbone floor. Furniture is kept low and sculptural so the light can travel across the room unimpeded.',
        'info' => [
            'Room' => 'Reception',
            'Palette' => 'Chalk, rust, oak',
            'Focus' => 'Light, proportion, seating',
        ],
    ],
    [
        'slug' => 'landscape-suite',
        'title' => 'Landscape Suite',
        'category' => 'Bedroom',
        'location' => 'Principal bedroom',
        'image' => '5.jpg',
        'gallery' => ['5.jpg', '6.jpg', '8.jpg'],
        'alt' => 'Bedroom with landscape mural, burgundy headboard and glass chandelier',
        'summary' => 'A principal bedroom layered with a landscape mural and a deep burgundy headboard.',
        'description' => 'The mural sets a pastoral register; the headboard and striped bench bring the room into the present. Drapery is tall and quiet so the painted trees remain the principal view.',
        'info' => [
            'Room' => 'Bedroom',
            'Palette' => 'Sage, burgundy, ivory',
            'Focus' => 'Mural, bed, drapery',
        ],
    ],
    [
        'slug' => 'scarlet-chamber',
        'title' => 'Scarlet Chamber',
        'category' => 'Bedroom',
        'location' => 'Guest suite',
        'image' => '6.jpg',
        'gallery' => ['6.jpg', '5.jpg', 'bath-01.jpg'],
        'alt' => 'Dramatic bedroom with botanical mural, lacquered red bedside cabinets and geometric parquet',
        'summary' => 'A more theatrical bedroom: botanical wall, lacquered cabinets and a beaded chandelier.',
        'description' => 'Colour is used with intention rather than abundance. The lacquered reds sit against a dusk-blue mural, while the pale bed keeps the centre of the room restful.',
        'info' => [
            'Room' => 'Bedroom',
            'Palette' => 'Dusk blue, lacquer red, ivory',
            'Focus' => 'Wall treatment, bed, parquet',
        ],
    ],
    [
        'slug' => 'garden-bedroom',
        'title' => 'Garden Bedroom',
        'category' => 'Bedroom',
        'location' => 'Garden elevation',
        'image' => '7.jpg',
        'gallery' => ['7.jpg', '8.jpg', '9.jpg'],
        'alt' => 'Sunlit bedroom with cane bed, window seat and sage joinery',
        'summary' => 'A quiet bedroom with a window seat, cane bedstead and sage-painted joinery.',
        'description' => 'The room is designed for morning light. A long window seat, linen and a cane bedstead keep the atmosphere close to the garden beyond the glass.',
        'info' => [
            'Room' => 'Bedroom',
            'Palette' => 'Sage, oak, linen',
            'Focus' => 'Window seat, bed, joinery',
        ],
    ],
    [
        'slug' => 'orangery-bedroom',
        'title' => 'Orangery Bedroom',
        'category' => 'Bedroom',
        'location' => 'Garden room',
        'image' => '8.jpg',
        'gallery' => ['8.jpg', '7.jpg', '9.jpg'],
        'alt' => 'Bright bedroom with french doors to a terrace, floral art and a brass chandelier',
        'summary' => 'French doors, floral studies and a brass chandelier give this bedroom a garden-house register.',
        'description' => 'The terrace is treated as an extension of the room. Sheer curtains, pale timber and a cane chair keep the interior as light as the trees outside.',
        'info' => [
            'Room' => 'Bedroom',
            'Palette' => 'Ivory, walnut, blush',
            'Focus' => 'French doors, textiles, lighting',
        ],
    ],
    [
        'slug' => 'sage-residence',
        'title' => 'Sage Residence',
        'category' => 'Bedroom',
        'location' => 'Apartment suite',
        'image' => '9.jpg',
        'gallery' => ['9.jpg', '8.jpg', '7.jpg'],
        'alt' => 'Bedroom opening to a sitting area with sage bedding and botanical prints',
        'summary' => 'A connected bedroom and sitting room in sage, oak and botanical prints.',
        'description' => 'An arched opening joins sleep and sitting without a corridor. The palette is kept to sage, cream and oak so the two rooms read as one interior.',
        'info' => [
            'Room' => 'Suite',
            'Palette' => 'Sage, oak, ivory',
            'Focus' => 'Suite planning, bed, sitting',
        ],
    ],
    [
        'slug' => 'calacatta-kitchen',
        'title' => 'Calacatta Kitchen',
        'category' => 'Kitchen',
        'location' => 'Family house',
        'image' => 'kitchen-01.jpg',
        'gallery' => ['kitchen-01.jpg', 'kitchen-03.jpg', 'kitchen-02.jpg'],
        'alt' => 'Luxury kitchen with marble island and cream cabinetry',
        'summary' => 'A working kitchen designed as architecture: stone, oak, brass and a long island.',
        'description' => 'The island is the room’s table as much as its worktop. Cabinetry is kept pale so the stone and the garden light beyond the window remain the principal materials.',
        'info' => [
            'Room' => 'Kitchen',
            'Palette' => 'Ivory, oak, marble, brass',
            'Focus' => 'Island, cabinetry, lighting',
        ],
    ],
    [
        'slug' => 'dressing-atelier',
        'title' => 'Dressing Atelier',
        'category' => 'Wardrobe',
        'location' => 'Principal suite',
        'image' => 'wardrobe-02.jpg',
        'gallery' => ['wardrobe-02.jpg', 'wardrobe-01.jpg', 'wardrobe-03.jpg'],
        'alt' => 'Walk-in wardrobe with oak joinery and a marble-topped island',
        'summary' => 'A dressing room planned with the same care as a library — millwork, light and order.',
        'description' => 'Storage is fully fitted so clothing disappears into calm elevations. The island is for laying out, and the lighting is warm enough for early morning and evening alike.',
        'info' => [
            'Room' => 'Dressing room',
            'Palette' => 'Oak, ivory, brass',
            'Focus' => 'Millwork, lighting, storage',
        ],
    ],
    [
        'slug' => 'cedar-dining',
        'title' => 'Cedar Dining',
        'category' => 'Dining',
        'location' => 'Garden dining room',
        'image' => 'dining-01.jpg',
        'gallery' => ['dining-01.jpg', 'study-01.jpg', '2.jpg'],
        'alt' => 'Long dining table with cream chairs and a brass chandelier',
        'summary' => 'A dining room for long evenings: walnut, plaster, linen and a single generous table.',
        'description' => 'The table is the architecture. Chairs are kept pale, the chandelier low enough to gather the room, and the window treated so daylight and candlelight can share the same interior.',
        'info' => [
            'Room' => 'Dining',
            'Palette' => 'Walnut, cream, plaster',
            'Focus' => 'Table, lighting, drapery',
        ],
    ],
    [
        'slug' => 'library-study',
        'title' => 'Library Study',
        'category' => 'Architecture',
        'location' => 'Private study',
        'image' => 'study-01.jpg',
        'gallery' => ['study-01.jpg', 'architecture-02.jpg', 'hallway-01.jpg'],
        'alt' => 'Oak-lined study with leather armchair and stone fireplace',
        'summary' => 'A small room for reading and work, lined in oak and organised around the fire.',
        'description' => 'Bookshelves are built to the cornice so the room feels complete. Leather, stone and a single lamp keep the atmosphere close and unhurried.',
        'info' => [
            'Room' => 'Study',
            'Palette' => 'Oak, ivory, charcoal',
            'Focus' => 'Joinery, fireplace, lighting',
        ],
    ],
    [
        'slug' => 'townhouse-ascent',
        'title' => 'Townhouse Ascent',
        'category' => 'Architecture',
        'location' => 'Stair hall',
        'image' => 'architecture-02.jpg',
        'gallery' => ['architecture-02.jpg', 'architecture-01.jpg', 'hallway-01.jpg'],
        'alt' => 'Sculptural staircase in a double-height plaster hall',
        'summary' => 'A stair hall treated as the principal architectural room of the house.',
        'description' => 'The stair is designed as a single gesture in plaster and stone. Light from the upper windows falls the full height of the hall, so arrival feels unhurried.',
        'info' => [
            'Room' => 'Stair hall',
            'Palette' => 'Plaster, stone, charcoal',
            'Focus' => 'Stair, volume, light',
        ],
    ],
];

$CR_PROCESS = [
    [
        'num' => '01',
        'title' => 'Discover',
        'text' => 'We begin with the house and how it is lived in — rooms, light, habits and the work that is actually required.',
    ],
    [
        'num' => '02',
        'title' => 'Compose',
        'text' => 'Plans, palettes and samples are developed until proportion, material and atmosphere sit together without strain.',
    ],
    [
        'num' => '03',
        'title' => 'Craft',
        'text' => 'Joinery, stone, paint and site work are directed so the drawings survive contact with the building.',
    ],
    [
        'num' => '04',
        'title' => 'Complete',
        'text' => 'Styling, art and the last objects are placed with the same care as the architecture. The house is then ready to be used.',
    ],
];

$CR_VALUES = [
    [
        'title' => 'Proportion',
        'text' => 'Rooms are planned first as architecture. Furniture follows the plan, not the other way around.',
    ],
    [
        'title' => 'Material honesty',
        'text' => 'Stone, timber, linen, plaster and brass are specified for how they age, not only how they photograph.',
    ],
    [
        'title' => 'Quiet luxury',
        'text' => 'The work is meant to feel expensive in person: through spacing, joinery and light rather than ornament.',
    ],
    [
        'title' => 'Continuity',
        'text' => 'Kitchens, wardrobes and reception rooms are designed as one house, with a single material language.',
    ],
];

$CR_GALLERY = [
    ['file' => '1.jpg', 'alt' => 'Belgravia drawing room with chandelier and bay window', 'caption' => 'Belgravia Drawing Room', 'span' => 'tall'],
    ['file' => '4.jpg', 'alt' => 'Sunlit townhouse living room with arched window', 'caption' => 'Lightwell Townhouse', 'span' => 'wide'],
    ['file' => '2.jpg', 'alt' => 'Mayfair salon with gallery wall', 'caption' => 'Mayfair Salon', 'span' => ''],
    ['file' => '5.jpg', 'alt' => 'Principal bedroom with landscape mural', 'caption' => 'Landscape Suite', 'span' => 'tall'],
    ['file' => 'kitchen-01.jpg', 'alt' => 'Marble island kitchen', 'caption' => 'Calacatta Kitchen', 'span' => ''],
    ['file' => '6.jpg', 'alt' => 'Scarlet chamber bedroom', 'caption' => 'Scarlet Chamber', 'span' => ''],
    ['file' => 'architecture-02.jpg', 'alt' => 'Sculptural stair hall', 'caption' => 'Townhouse Ascent', 'span' => 'wide'],
    ['file' => '7.jpg', 'alt' => 'Garden bedroom with window seat', 'caption' => 'Garden Bedroom', 'span' => ''],
    ['file' => 'wardrobe-01.jpg', 'alt' => 'Walk-in dressing room', 'caption' => 'Dressing Atelier', 'span' => 'tall'],
    ['file' => '3.jpg', 'alt' => 'Crescent living room', 'caption' => 'Crescent Living', 'span' => ''],
    ['file' => '8.jpg', 'alt' => 'Bedroom with french doors to terrace', 'caption' => 'Orangery Bedroom', 'span' => ''],
    ['file' => 'dining-01.jpg', 'alt' => 'Cedar dining room', 'caption' => 'Cedar Dining', 'span' => 'wide'],
    ['file' => 'study-01.jpg', 'alt' => 'Oak library study', 'caption' => 'Library Study', 'span' => ''],
    ['file' => '9.jpg', 'alt' => 'Sage residence bedroom suite', 'caption' => 'Sage Residence', 'span' => ''],
    ['file' => 'hallway-01.jpg', 'alt' => 'Panelled hallway', 'caption' => 'Arrival Hall', 'span' => 'tall'],
    ['file' => 'kitchen-03.jpg', 'alt' => 'Wide kitchen with garden doors', 'caption' => 'Kitchen to Garden', 'span' => 'wide'],
    ['file' => 'wardrobe-02.jpg', 'alt' => 'Dressing room island', 'caption' => 'Wardrobe Island', 'span' => ''],
    ['file' => 'bath-01.jpg', 'alt' => 'Ivory stone bathroom', 'caption' => 'Stone Bath', 'span' => ''],
    ['file' => 'architecture-01.jpg', 'alt' => 'Townhouse exterior at dusk', 'caption' => 'Townhouse Façade', 'span' => 'wide'],
    ['file' => 'materials-01.jpg', 'alt' => 'Interior material samples', 'caption' => 'Materials', 'span' => ''],
    ['file' => 'renovation-01.jpg', 'alt' => 'Renovated drawing room', 'caption' => 'Renovation', 'span' => ''],
    ['file' => 'kitchen-02.jpg', 'alt' => 'Kitchen cabinetry detail', 'caption' => 'Kitchen Detail', 'span' => 'tall'],
];
