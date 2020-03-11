<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$menu = new FieldsBuilder('menu');

$menu
		->addText('titlemenu', ['label' => 'Tytuł'])
		->addTaxonomy('titlemenu', ['label' => 'Kategorie menu']);
return $menu;
