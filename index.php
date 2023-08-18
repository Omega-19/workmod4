<?php
 declare(strict_types = 1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <p>Bienvenue sur index html</p>

</body>

</html>
    <?php


    //echo ("hello world !"); //echo se comporte comme du var ou du let
//////
//print("Salut les amis du coin");
//////
    $user; //declaration
    $user = "John"; //assignation
    var_dump($user);
    echo "<br>";
    $firstname = "Joliane";
    echo "<br>";
    $lastname = 'DOE';

    var_dump($firstname);
    echo "<br>";
    var_dump($lastname);

    $msg = "Bonjour
    tout le monde  !";

    echo $msg;
    echo "<br>";
    echo $lastname . " " . $firstname;
    echo "<br>";
    $num1 = 3;
    $moyenne = 27.7;

    var_dump($num1);
    echo "<br>";
    var_dump($moyenne);

    $isAdmin = true;
    $isEven = false;
    var_dump($isAdmin);

    $data = null;
    var_dump($data);
    echo "<br>";
    /*///Les arrays*/
    $fruits = array("pomme", "jus", "ananas");
    echo "<br>";
    $arr = ["hello", 5, 47, "sac", true, null];
    echo "<br>";

    echo "<pre>";
    //var_dump et print_r pour afficher le tableau 
    var_dump($fruits);
    print_r($fruits);
    echo "<pre>";

    echo "<br>";
    print_r($arr);

    echo "<pre>";
    echo "bonsoir\n";
    echo "cool\n";
    echo "dance";
    echo "<pre>";

    class User
    {
        public $fname = " ";
        public $lname = " ";
    }
    $u = new User();
    $v = new User();
    var_dump($u);
    var_dump($v);
    ///int et float
    $floatNum = 3.14;
    $intNum = (int) $floatNum;
    $x = (int) 3.14;

    var_dump($x, $floatNum, $intNum);
    //floatval, boolval, intval
    $y = floatval(3);
    var_dump($y);

    /**déclarez une variable age: écrire une logique qui affiche 
     * -" vOus êtes mineur" : si l'âge est inférieur à 18
     * -" vOus êtes majeur" : si l'âge est supérieur à 18
     * -" Vous avez 18ans" : le cas échéant;
     */

    # $data
    
    $age = 15;

    if ($age < 18) {
        echo "vous êtes mineur";
    } else if ($age > 18) {
        echo "vous êtes majeur";
    } else {
        echo "vous avez 18ans";
    }

    echo "<br>";

    //swich
    /**
     *  0 => Dimanche
     *  01 => Lundi
     *  02 => Mardi
     *  03 => Mercredi
     *  04 => Jeudi
     *  05 => Vendredi
     *  06 => Samedi
     */

    $day = 05;
    switch ($day) {
        case '0':
            echo "Nous sommes au:  Dimanche";
            break;
        case '01':
            echo "Nous sommes au:  Lundi";
            break;
        case '02':
            echo "Nous sommes au:  Mardi";
            break;
        case '03':
            echo "Nous sommes au:  Mercredi";
            break;
        case '04':
            echo "Nous sommes au:  Jeudi";
            break;
        case '05':
            echo "Nous sommes au:  Vendredi";
            break;
        case '06':
            echo "Nous sommes au:  Samedi";
            break;
        default:
            echo "code non valide";
            break;
    }
    ;
    echo "<br>";
    /**
     * Afficher à l'aide de boucle "while" de 0-9 
     * //0123456789
     * 
     * faites de même pour la boucle for
     */
    $a = 0;
    while ($a < 10) {
        echo $a++;
    }
    echo "<br>";

    for ($i = 0; $i < 10; $i++) {
        echo $i;
    }
    echo "<br>";
    $fruites = ["pomme", "raisin", "banana"];
    echo count($fruites); //affiche le nombre d'éléments dans le tableau
    
    echo "<br>";
    for ($i = 0; $i < count($fruites); $i++) {
        echo $fruites[$i] . " ";
    }
    echo "<br>";
    foreach ($fruites as $fruit) {
        echo $fruit . " ";
    }
    echo "<br>";

    #Une variété de plus dans les arrays avec php
/**
 * Un tableau associatif en PHP, est un tableau où les valeurs sont associés à des clés plutôt qu'à des indices numériques comme dans les tableaux indexés. Dans un tableau associatif, chaque élément est identifié par une clé unique qui permet d'accéder à la valeur correspondante;.
 */
    //tableau associatif
    $milk = [
        " nic " => 20,
        " milo " =>  17,
        " Nina " =>  15,
        " Rock " =>  18, 
        " Salsa " => 12
    ];

    echo "<br>";

foreach ($milk as $key => $valu) {
        echo $key . " a une note de <strong>" . $valu . "</strong> /20<br>";
}
    echo "<pre>";

    print_r($milk);

    echo "</pre>";

    echo "<br>";

   
    //function classique en php
    
   
    //type hinting, strict_types
    //type hinting ou l'annotation de type
    /**
     * Nous avons la capacité d'annoter les paramètres de fonction et les valeurs de retours. Cela permet d'améliorer la lisibilité.
     * Summary of add
     * @param mixed $x
     * @param mixed $y
     * @return float|int
     */

     
    function add($x, $y){
        return $x + $y;
    }

    echo add(8, 6);
    echo "<br>";
    function ado(float $x,float $y): float{
        return $x + $y;
    }

    echo ado(8.5, 6.5);


    ?>