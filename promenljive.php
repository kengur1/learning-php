<?php

    // Koriste se za cuvanje informacija 
    // Pocinju sa znakom dolar $ 
    // Ne sme biti razmaka u imeno, ne smeju pocinjati sa brojem, i mogu biti samo kobinacija slova, brojeva i znakova _ i - 
    // Ne smeju koristiti rezervisane reci, kao sto su do, echo, die. http://php.net/manual/en/reserved.keywords.php
    // Echo funkcija se koristi za stampanje
    

    $fakultet = "FON";
    $grupa = "D4";
    
    echo 'Fakultet: '. $fakultet . ", grupa: " . $grupa; 
    // Ili ovako 
    echo "Fakultet: $fakultet, grupa: $grupa"; 