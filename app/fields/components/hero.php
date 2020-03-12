<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$hero = new FieldsBuilder('hero',['label' => 'Nagłówek']);

$hero
    ->addRepeater('hero')
        ->addImage('img');
return $hero;
