@include('partial-elements::base.input',[
    'name' => 'value',
    'type' => 'number',
    'pattern' => '[0-9]+([\.,][0-9]+)?"',
    if ($min === false) {
        'min' => '0.01',
    }
    if ($max === false) {
        'max' => '20000000',
    }
    'step' => '0.01',

])
