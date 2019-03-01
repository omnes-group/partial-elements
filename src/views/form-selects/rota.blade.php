@include('partial-elements::base.select', [
    'name' => 'rota',
    'items' => [
        ['value' => 1, 'description' => 'Monatlich'],
        ['value' => 3, 'description' => 'Vierteljährlich'],
        ['value' => 6, 'description' => 'Halbjährlich'],
        ['value' => 12, 'description' => 'Jährlich']
    ]
])
