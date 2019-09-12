<!doctype html>
<html lang='en'>
<head>
	<title>Calculator</title>
	<link href="StyleSheetModule2.css" rel="stylesheet" type="text/css"/>
</head> 
    <body>
    <?php
    if(empty($_GET['operation']) or !is_numeric($_GET['firstNumber']) or !is_numeric($_GET['secondNumber'])){
        echo "<h1> Please submit a valid request </h1>";
    }
    else{
        $first = $_GET['firstNumber'];
        $second = $_GET['secondNumber'];
        $symbol = $_GET['operation'];
        if ($symbol == "plus"){
            echo "<h1> $first + $second = ", $first + $second, "</h1>"; 
        }
        if($symbol == "minus"){
            echo "<h1> $first - $second = ", $first - $second, "</h1>"; 
        }
        if ($symbol == "times"){
            echo "<h1> $first * $second = ", $first * $second, "</h1>"; 
        }
        if ($symbol == "by"){
            if ($second == 0){
                echo "<h1> Warning, can not divide by 0 </h1>";
            }
            else{
                echo "<h1>$first / $second = ", $first/$second, "</h1>";
            }
        }
    }
    ?>
     <form target="_self" action="calculator.html" method="POST">
          <input type="submit" value="Perform another calculation" />
    </form>
    </body>
</html>
