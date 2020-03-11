<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$textimg = new FieldsBuilder('textimg');

$textimg
		->addText('titletext', ['label' => 'Tytuł koło zdjęcia'])
		->addWysiwyg('subtext', ['label' => 'Tekst pod tytułem', 'media_upload' => 0])
		->addWysiwyg('maintext', ['label' => 'Tekst koło zdjęcia', 'media_upload' => 0])
		->addImage('imgup')
		->addImage('imgdown')
		->addImage('imglong');
return $textimg;
