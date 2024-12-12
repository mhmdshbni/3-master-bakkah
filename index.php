<html>
    <head>
         <title>Web </title>
         <link rel="stylesheet" href="style.css" />
    </head>
    <style>
        :root{
            --gradient: linear-gradient(43deg, #0093E9 0%, #80D0C7 100%);
        }

    body{
    min-height: 100vh;
    background-color: green;
    background-image: var(--gradient);
    }

    </style>
    <?php
    $a = 6;
    $b = 3;
    $c = $a+$b;
    echo "hasil : ". $c;
    ?>

    <?php
    $a = 30;
    $b = 20;
    $c = $a-$b;
    echo "hasil : ". $c;
    ?>

    <?php
    $angka1 = 8;
    $angka2 = 5;
    $angka3 = $angka1*$angka2;
    echo "hasil : ". $angka3;
    ?>
    
    <?php
    $angka1 = 10;
    $angka2 = 2;
    $angka3 = $angka1/$angka2;
    echo "hasil : ". $angka3;
    ?>
    
    <?php
    $angka1 = 3;
    $angka2 = 6;
    $operasi = "-";
    echo "hasil : ". $operasi;
    switch($operasi) {
        case "+":
            echo $angka1+$angka2;
            break;
            case "-":
                echo $angka2-$angka1;
                break;
                 default:
                echo "hasil : $operasi";
            }
            ?>
<font color="white"><h1>Calcullator Sederhana</h1></font>
<button type="button">3</button>
<button type="button">6</button>
<button type="button">7</button>
<button type="button">10</button>
<button type="button">22</button>
<button type="button">18</button>
<button type="button">19</button>

</html>