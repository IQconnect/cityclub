<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$option_page = new FieldsBuilder('option');

$option_page
    ->setLocation('options_page', '==', 'acf-options-ustawienia-strony');

$option_page
    ->addTab('Main', ['label' => 'Ustawienia główne', 'placement' => 'left'])
        ->addImage('logo', ['wrapper'=>['width'=>'33%']])
    ->addTab('Kontakt', ['placement' => 'left'])
        ->addWysiwyg('contact' , ['label' => 'Informacje'])
    ->addTab('Placowki', ['placement' => 'left'])
        ->addWysiwyg('info', ['label' => 'Główne informacje'])
        ->addWysiwyg('headquarters', ['label' => 'Siedziba'])
        ->addWysiwyg('branch', ['label' => 'Oddział'])
        ->addWysiwyg('facility', ['label' => 'Zakład produkcyjny'])
    ->addTab('Nagrody', ['placement' => 'left'])
        ->addImage('prize', ['wrapper'=>['width'=>'33%']])
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
