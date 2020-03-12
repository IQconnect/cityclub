<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$menu = new FieldsBuilder('menu');

$menu
		->addText('titlemenu', ['label' => 'Menu'])
		->addTaxonomy('categorymenu', ['label' => 'Kategorie menu']);
return $menu;
