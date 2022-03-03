<?php

//EIne Liste an Navigationselemente zurückkriegen = Array = Rückgabewert ist :array
//Hier wurde eine Liste erstellt mit einzelenen Navigationselemente
//Wenn ich die function getNavigation benutzen möchte soll es mir auch sagen welches Element auf aktiv gestellt wird und deswegen der paramater ($activeElement). Es ist wichtig dem Paramter auch einen Typ übergibst, damit du php sagst !Achtung es kommt jetzt ein text rein und nicht eine Zahl
//optional Parameter = 'index
function getNavigation(string $activeElement = 'index'): array
{
    $navigation = [];

    //Das ist ein Element
    //Ein Element Stratseite wurde auf true getsellt
    //Attribut ist bspw. label, target, active
    $navigationElement = [
        'label' => 'Startseite',
        'target' => 'index.php',
        'active' => false
        //Startseite wird deaktiviert in dem ich false schreibe statt true
        // 'active' => true
    ];

    //Das obige element fügen wir in die Liste hinzu(Array)
    //['index] = ist wie ein lesezeichen 
    $navigation['index'] = $navigationElement;

    $navigationElement = [
        'label' => 'Kontakt',
        'target' => 'contact.php',
        'active' => false
    ];

    //Das obige element fügen wir in die Liste hinzu(Array)
    $navigation['contact'] = $navigationElement;

    $navigationElement = [
        'label' => 'Über Mich',
        'target' => 'about.php',
        'active' => false
    ];

    //Das obige element fügen wir in die Liste hinzu(Array)
    $navigation['about'] = $navigationElement;

    //AKTIVIEREN: Wir übergeben diese $navigation den key $activeElement
    //Damit haben wir dieses element 'about'anhand des Lesezeichens und Wert active auf true gesetzt
    $navigation[$activeElement]['active'] = true;

    return $navigation;
}
