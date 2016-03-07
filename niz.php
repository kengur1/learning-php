<?php 

    // Nizovi 
    // Sluze sa cuvanje veceg broja medjusobno povezanih informacija 
    // Unutar niza mozes da imas podatke u sledecem obliku: key=>value 
    
    // Prvi nacin definisanja niza 
    $student = array("ime" => "Jelena", "prezime" => "Spasic", "fakultet" => "FON", "godina" => 4, "prosek" => 8.98);
    
    
    echo $student['ime'];
    
    
    $ocene = array(1,2,3,4,5,6,7,8,9,10);
    
    foreach ($ocene as $ocena) {
        echo $ocena . '<br>';
    }

    // Niz mozes i ovako definisati: 
    $niz = ["ime" => "Jelena", "prezime" => "Spasic"]; 
    
    // Ovo je nova sintaksa, dostupna tek od PHP 5.4 verzije. Mozes da koristis i jednu i drugi. Takodje mozes:
    // mhm, da mu redom dodajem elemente. ok
    
    
    $niz2 = array(); 
    $niz2[0] = 100;
    $niz2[1] = 200;
    
    // Da. Veoma koristno u PHP-u, na primer imamo niz greske. Korisnik nije uneo ime, ili prezime i mi vresimo validaciju. Nakon svake neuspesne validacije
    // dodajemo gresku u taj niz. Na kraju preveravamo da li je taj niz prazan. Ako jeste, korisnik moze da se registruje. Ako nije, stampamo greske.
    
    // Ok. Toliko za danas. Ima li pitanja? 
    // ne, sve jasno, samo da udje u prste ;)
    // Ja sam ovde do 19.00. Ako se vratis, mozda mozemo da nstavimo :) 
    // o, pa kul onda, ne verujem da cu pre pola 5, ali javim ti se kad se vratim ;)
    // Ok. Ako ne nastavimo danas, imas novu vezbu. Iskombinuj sve ovo sto smo danas naucili sa HTML i dodaj malo CSS-a :) 
    // Vazi, potrazim te na fb ;) 
    // Cao onda 
    // Caos 
    