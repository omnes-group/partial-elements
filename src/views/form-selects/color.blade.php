@include('partial-elements::base.select', [
    'name' => 'color',
    'description' => 'Faben auswahl',
    'items' => [
        ['value' => 'primary', 'description' => 'Blau'],
        ['value' => 'secondary', 'description' => 'Grau'],
        ['value' => 'success', 'description' => 'Grün'],
        ['value' => 'danger', 'description' => 'Rot'],
        ['value' => 'warning', 'description' => 'Gelb'],
        ['value' => 'info', 'description' => 'Hellblau'],
        ['value' => 'light', 'description' => 'Weiß'],
        ['value' => 'dark', 'description' => 'Schwarz'],
    ]
])
