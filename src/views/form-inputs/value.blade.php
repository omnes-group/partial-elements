@include('partial-elements::base.input',array_merge([
    'name' => 'value',
    'type' => 'number',
    'pattern' => '[0-9]+([\.,][0-9]+)?"',
    'step' => '0.01',
], isset($max) && $max === false ? [] : ['max' => '20000000'],
 isset($min) && $min === false ? [] : ['min' => '0.01']))
