!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Warakorn</h1>
    <?php
        echo "Vongramate";
    ?>

    <!-- shot term -->
    <? "I love IT"?>

    <?php
    //varriable
    $name = "Ball";
    $x = "5";
    $y = 10.5;
    
    echo "<br>";
    echo $x + $y;
    echo "<br>";
    echo @($name + $x);
    echo "<br>";
    echo $name . $x;

    $arr = array ("x","y",12.3);
    echo "<br>";
    echo $arr[2];
    echo "<br>";
    echo $arr;
    echo "<br>";
    var_dump($arr);



    $ass = array("win" => 20, "or" => 50);
    echo "<br>";
    echo $ass ["or"];

    mdass = array(
        array("x","y","z")
        array(1,2)
    );
    echo "<br>";
    echo $mdass [0][1];

    $json = '{"x":10,"y":5,"z":"IT"}';
    $json = json_decode($json);
    echo "<br>";
    var_dump($json);
    echo "<br>";
    echo $json->z;
    ?>
    <hr>
    <?php
    //control expression
    if ($arr == ){
        echo "$arr is true";
    } 
    else
        echo "$arr is not true value";
        
        echo "<br>";
        echo $arr == true ? "$arr is true " : "$arr is fales";
        echo "<br>";
        $x = 1;
        while ($x <= 5){
            echo "X is $x <br>";
            $x++;
        }

        $y = 0;
        do {
            echo "Y is $y <br>";
            $y++;
        }while ($y <=3);

        for ($x = 3; $x > 0; $x--){
            echo "X is $x";
        }

        foreach ($json as $key => $value){
            echo "$key : $value <br>";
        }
        ?>
        <hr>
        <?php
        //function
        $glop = 40;

        function calTriangle ($base , $height){
            $area = $base * $height / 2;
            
            //return $area;
            $area = $base * $height /2;
            $arr = array ($area,$base);
            return $arr;
        }

        echo calTriangle(10,5);
        echo "<br>";
        $result = calTriangle(10,5);
        echo $result[0];
    ?>
</body>

</html>