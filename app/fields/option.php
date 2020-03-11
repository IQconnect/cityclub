<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$option_page = new FieldsBuilder('option');

$option_page
    ->setLocation('options_page', '==', 'acf-options-ustawienia-strony');

$option_page
    ->addTab('Main', ['label' => 'Ustawienia główne', 'placement' => 'left'])
        ->addImage('logo', ['wrapper'=>['width'=>'33%']])
        ->addImage('header_img', ['wrapper'=>['width'=>'33%']])
    ->addTab('Kontakt', ['placement' => 'left'])
        ->addWysiwyg('upper', ['label'=>'Text nad Górze','new_lines'=>'br', 'rows'=>1])
        ->addWysiwyg('contact-menu', ['label' => 'Tekst w Menu', 'media_upload' => 0])
        ->addWysiwyg('contact-header', ['label' => 'Tekst w Nagłówku', 'media_upload' => 0])
        ->addWysiwyg('contact-contact', ['label' => 'Tekst w Kontakcie', 'media_upload' => 0])
        ->addText('facebook' , ['label' =>'Adress Facebooka'])
    ->addTab('Mapa', ['placement' => 'left'])
        ->addRepeater('pins')
            ->addImage('icon', ['label'=>'icon'])
            ->addGoogleMap('pin')
            ->addWysiwyg('tooltip')
        ->endRepeater()
    ->addTab('Stopka', ['placement' => 'left'])
        ->addText('copyright')
        ->addImage('iqlogo', ['label' => 'Wykonanie'])
    ;

return $option_page;
