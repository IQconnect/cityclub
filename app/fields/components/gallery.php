<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$config = (object) [
    'ui' => 1,
    'wrapper' => ['width' => 30],
];

$gallery = new FieldsBuilder('gallery', ['label' => 'galeria']);

$gallery
    ->addGallery('gallery',['label' => 'Galeria','max' => '8',]);

return $gallery;
