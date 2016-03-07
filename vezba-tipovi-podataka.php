<?php
    $ime="Jelena";
    $prezime="Spasic";
    $fakultet= "FON";
    $godina= 4;
    $prosek= 8.98;
    $ocene=array(9,10,8,9);
    $slika="https://s-media-cache-ak0.pinimg.com/564x/68/1f/9e/681f9eed23cffb5db96ba306726fa408.jpg";
    
?>
<!-- nazad na chat.txt --> 
<!DOCTYPE html>
<html>
    <head>
        
    </head>
    
    <body>
        
        <img src= "<?php echo $slika; ?>" >
    
        <!-- Ne tako. Stavi unutar src. Samo onda moras da pazis na navodnike. U ovakvom slucaju bi morala unutar ovog php bloka da koristis '' navodnike, ili ce doci do greske --> 
        <table>
            <tr>
                <th>
                    Ime
                </th>
                <th>
                    Prezime
                </th>
                <th>
                    Fakultet
                </th>
                <th>
                    Godina
                </th>
                <th>
                    Prosek
                </th>
                <th>
                    Ocene
                </th>
            </tr>
            <tr>
                <td>
                    <?php echo $ime; ?>
                </td>
                <td>
                    <?php echo $prezime; ?>
                </td>
                <td>
                    <?php echo $fakultet; ?>
                </td>
                <td>
                    <?php echo $godina; ?>
                </td>
                <td>
                    <?php echo $prosek; ?>
                </td>
                <td>
                    <?php 
                        echo $ocene[0] . ", " . $ocene[1] . ", " . $ocene[2] . ", ". $ocene[3];
                    ?> 
                </td>
            </tr>
        </table>
    </body>
    
</html>

<!-- Gledaj da iskoristis vise tipova podataka -->
<!-- PHP kod obicno ide na vrhu, iznad HTML koda. -->
<!-- po secanju na vezbama bio na kraju nekad, ali ok, cek, van html, ili?-->

<!-- Izvan html-a. Kod se cita od vrha na dole. Ako ti definises promenljive na dnu, a onda je pozoves iznad, docice do greske. -->
<!--jasno. e sad na koji nacin ih stampam u html-u-->
<!-- Ok. Prvo da ispravimo greske --> 
<!-- Nastavi sa pisanjem HTML koda. Treba ti HEAD i BODY, a zatim table --> 
<!-- Takodje unutar HEAD ide TITLE, sorry :) --> 
<!--kapiram :D-->
<!-- Ok. Sada stampanje --> 
<!-- Stampanje vrednosti iz niza je malo komplikovanije, posebno u ovom slucaju. Mozes da koristis neku petlju, ali njih cemo tek kasnije uciti. 
Za sada mozes koristiti sledecu metodu, ali znaj da ona nije dobra. Tj., nije dobra kada niz ima mnogo vrednosti. -->
<!--primljeno k znanju-->
<!-- Ok. Dodaj sada svoje ime i prezime :) -->
