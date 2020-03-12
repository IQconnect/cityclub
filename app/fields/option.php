<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$option_page = new FieldsBuilder('option');

$option_page
    ->setLocation('options_page', '==', 'acf-options-ustawienia-strony');

$option_page
    ->addTab('Main', ['label' => 'Ustawienia główne', 'placement' => 'left'])
        ->addImage('logo', ['wrapper'=>['width'=>'33%'],'label' => 'Logo w nagłówku'])
        ->addImage('brand', ['wrapper'=>['width'=>'33%'],'label' => 'Logo w stopce'])
        ->addImage('header_img', ['wrapper'=>['width'=>'33%'],'label' => 'Zdjęcie w menu'])
    ->addTab('Kontakt', ['placement' => 'left'])
        ->addWysiwyg('upper', ['label'=>'Text nad Górze (opcjonalny)','new_lines'=>'br', 'rows'=>1])
        ->addWysiwyg('contact-menu', ['label' => 'Tekst w Menu', 'media_upload' => 0])
        ->addWysiwyg('contact-header', ['label' => 'Tekst w Nagłówku', 'media_upload' => 0])
        ->addWysiwyg('contact-contact', ['label' => 'Tekst w Kontakcie', 'media_upload' => 0])
        ->addText('facebook' , ['label' =>'Adress Facebooka'])
    ->addTab('Eventy', ['placement' => 'left'])
        ->addText('eventtext',['label' => 'Tekst do przyciska'])
        ->addText('eventurl', ['label' => 'Link do eventów'])
    ->addTab('Stopka', ['placement' => 'left'])
        ->addWysiwyg('right',['label' => 'Tekst w Stopce Copyright góra', 'media_upload' => 0])
        ->addWysiwyg('copyright',['label' => 'Tekst w Stopce Copyright dół', 'media_upload' => 0])
        ->addImage('iqlogo', ['label' => 'Wykonanie'])
    ;


return $option_page;
