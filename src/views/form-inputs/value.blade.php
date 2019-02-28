@include('partial-elements::base.input',[
    'name' => 'value',
    'type' => 'number',
    'pattern' => '[0-9]+([\.,][0-9]+)?"',
    'step' => '0.01',
    'min' => '0.01',
    'max' => '20000000',
])
