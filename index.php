<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    echo "1. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus (Jonas Jonaitis). Atspausdinti trumpesnį stringą.";

    $vardas = "Morgan";
    $pavarde = "Freeman";

    if(strlen($vardas) > strlen($pavarde)){
        echo "<p>" . $pavarde . "</p>";
    }else{
        echo "<p>" . $vardas . "</p>";
    }

    echo "<hr>";

    echo "2. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Vardą atspausdinti tik didžiosiom raidėm, o pavardę tik mažosioms.";

    $vardas = "Robin";
    $pavarde = "Williams";

    echo "<p>" . strtoupper($vardas) . " " . strtolower($pavarde) . "</p>";
    echo "<hr>";

    echo "3.Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš pirmų vardo ir pavardės kintamųjų raidžių. Jį atspausdinti";

    $vardas = "Keanu";
    $pavarde = "Reeves";
    $ini = substr($vardas,0,1) . " " . substr($pavarde,0,1);

    echo "<p>" . $ini . "</p>";
    echo "<hr>";
    
    echo "4. Sukurti du kintamuosius. Jiems priskirti savo mylimo aktoriaus vardą ir pavardę kaip stringus. Sukurti trečią kintamąjį ir jam priskirti stringą, sudarytą iš trijų paskutinių vardo ir pavardės kintamųjų raidžių. Jį atspausdinti.";

    $vardas = "Tom";
    $pavarde = "Hanks";
    $galai = substr($vardas,-3,3) .  substr($pavarde,-3,3);

    echo "<p>" . $galai . "</p>";
    echo "<hr>";

    echo "5.Sukurti kintamąjį su stringu: “An American in Paris”. Jame visas “a” (didžiąsias ir mažąsias) pakeisti žvaigždutėm “*”.  Rezultatą atspausdinti";

    $pavadinimas = "An American in Paris";

    echo "<p>" . str_ireplace("A","*",$pavadinimas) . "</p>";
    echo "<hr>";

    echo "6. Sukurti kintamąjį su stringu: “An American in Paris”. Suskaičiuoti visas “a” (didžiąsias ir mažąsias) raides. Rezultatą atspausdinti.";

    $filmas = "An American in Paris";
    
    echo "<p>" . substr_count(strtolower($filmas),"a") . "</p>";
    echo "<hr>";

    echo "7. Sukurti kintamąjį su stringu: “An American in Paris”. Jame ištrinti visas balses. Rezultatą atspausdinti. Kodą pakartoti su stringais: “Breakfast at Tiffany's”, “2001: A Space Odyssey” ir “It's a Wonderful Life”.";

    $title = "An American in Paris";
    echo "<p>" .  preg_replace('#[aeiou\s]+#i',"",$title) . "</p>";

    $title = "Breakfast at Tiffany's";
    echo "<p>" .  preg_replace('#[aeiou\s]+#i',"",$title) . "</p>";

    $title = "2001: A Space Odyssey";
    echo "<p>" .  preg_replace('#[aeiou\s]+#i',"",$title) . "</p>";

    $title = "It's a Wonderful Life";
    echo "<p>" .  preg_replace('#[aeiou\s]+#i',"",$title) . "</p>";

    echo "<hr>";
    
    echo "8. Stringe, kurį generuoja toks kodas: 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope'; Surasti ir atspausdinti epizodo numerį.";
    echo "<br>";
    echo "<br>";

    echo $string = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
    echo "<br>";
    echo "<br>";

    echo preg_replace('#[a-z :\-\s]+#i', '', $string);

    echo "<hr>";

    echo "9.Suskaičiuoti kiek stringe “Don't Be a Menace to South Central While Drinking Your Juice in the Hood” yra žodžių trumpesnių arba lygių nei 5 raidės. Pakartokite kodą su stringu “Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale”.";
    echo "<br>";

    $pav = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
    echo "<p>" . $pav . "</p>";

    $pav = explode(" ",$pav);
    print_r($pav);

    echo "<br>";
    echo "<br>";

    $count9 = 0;

    for ($i=0; $i < count($pav) ; $i++) { 
        if(strlen($pav[$i]) <=5){
            $count9++;
        }
    }
    echo $count9;















    
    
    
    
    
    ?>
</body>
</html>