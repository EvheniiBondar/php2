<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<h1>Heading</h1>
<p>Hello</p>
<?php
ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);

$a = 3;
if ($a > 0) {
    echo 'Верно' . '<br>';
} else {
    echo 'Неверно'. '<br>';
}

$a = 2;
if($a = 0){
    echo 'верно'. '<br>';
}
else{
    echo 'неверно'. '<br>';
}
$arr=[20,6,9,10];
$max = null;

for ($i = 0; $i<count($arr); $i++){
    if ($max === null){
        $max = $arr[$i];
    }

    if ($max < $arr[$i]){
        $max = $arr[$i];
    }
}

echo $max . '<br>';

$a = false;
echo $a ? "on" : "off" . '<br>';

$arr= [5,9,15,3,45];
$min=null;
foreach($arr as $key => $value) {
    if ($min == null){
        $min = $value;
    }

    if ($min > $value){
        $min = $value;
    }
}

echo $min . '<br>';

$arr = [8,4,126,10,92];
$max = null;
foreach($arr as $key => $value) {
    if ($max == null){
        $max = $value;
    }
    if ($max < $value){
        $max = $value;
    }
}

echo $max . '<br>';

$arr = ['html','css','c++'];

foreach($arr as $key => $value) {
    echo $value . '<br>';
}

$arr = [2,0,8,1,56];
echo min($arr) . '<br>';
echo max($arr) . '<br>';

$arr = [-10,20,30,40];
$sum = 0 ;
foreach ($arr as $key => $value){
        $sum = $sum + $value;

}

//echo $sum . '<br>';

//$i = 0;
//while($i <= 100) {
  //  $i=$i + 1;
    //echo $i . '<br>';
//}

//for($i=1; $i <= 100; $i++) {
  //  echo $i . '<br>';
//}

$arr = [2,2,3];
$resault = 0;
foreach($arr as $value){
        $resault += $value * 2;
}

echo $resault . '<br>';

$arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
foreach($arr as $key => $value){
    echo $key . '-';
    echo $value . '.<br>';
}

$work =array (
    array('name' => 'Коля' , 'money' => 200 ),
    array('name' => 'Петя' , 'money' => 300 ),
    array('name' => 'Вася' , 'money' => 400 ),

);

foreach ($work as $key => $value){
    echo $value['name'] . '- зарплата';
    echo $value ['money'] . 'долларов . <br>';
}

//for ($i=1; $i<= 100; $i++){
  //  if($i % 2 ==0){
    //    echo $i;
    //}
//}

$arr = [2, 5, 9, 15, 0, 4];
foreach($arr as $key =>$value){
    if($value<10 and $value>3){
        echo $value . '<br>';
    }

}

$arr = [-5,-2,-1,4,6,10];
$sum = 0 ;
foreach($arr as $value){
    if($value > 0){
        $sum= $sum + $value;
    }
}

echo $sum . '<br>';

$arr = [1, 2, 5, 9, 4, 13, 10];
foreach($arr as $value){
    if($value == 4){
        echo $value . '<br>';
    }
}


$arr = ['10', '20', '30', '50', '235', '3000'];
foreach($arr as $value){
    if($value[0] == 2){
        echo $value. '<br>';
    }
    if($value[0] == 5){
        echo $value. '<br>';
    }
    if($value[0] == 3){
        echo $value. '<br>';
    }
}

//$arr = [];
//for ($i = 1; $i <= 100; $i++){
 //   $arr[] = $i;
//}
//var_dump($arr);
//функция sqrt нахоит корень
$sqrt = sqrt(1000);
echo floor($sqrt). '<br>';

$a = sqrt(124);
echo floor($a) . '<br>';

$a = 10;
$b = 3;
$c = $a % $b;
echo $c;

$a = 12;
$b = 3;
$c = $a % $b;

if ($c == 0) {
    echo 'Делится, результат деления: ' . ($a / $b);
} else {
    echo 'Делится с остатком '.$c ;
}

$a = 2;
$st = pow(2,10);
echo $st . '<br>';

$a = sqrt(245);
echo ceil($a);

$arr = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;
foreach ($arr as $val){
    $sum += $val * $val;
}
echo sqrt($sum).'<br>';


$a = sqrt(375);
echo round($a,3) . '<br>';

$arr = [4, -2, 5, 19, -130, 0, 10];
echo min($arr) . '<br>';
echo max($arr). '<br>';

$arr = [4, -2, 5, 19, -130, 0, 10];
$min = null;
foreach($arr as $value){
    if($min == null){
        $min = $value;
    }
    if($min > $value){
        $min = $value;
    }
}

echo $min . '<br>';

$arr = [4, -2, 5, 19, -130, 0, 10];
$max = null;
foreach($arr as $value){
    if($max == null){
        $max = $value;
    }
    if($max < $value){
        $max = $value;
    }
}

echo $max . '<br>';

echo mt_rand(0,100);


$arr = [];
for($i=1; $i <= 10; $i++){
    $arr[] = mt_rand(1,10);
}
var_dump($arr) . '<br>';

$arr = [1,2,3,4,5,6,7,8,9,10];
$sum = 0;
$i = 0;
foreach($arr as $value){
    $i++;
    $sum += $value;
    if($sum <= 10);

}
echo $i . '<br>';

$a = 10;
$b = 5;
$resault = $a + $b ;
echo $resault . '<br>';


$arr = [1,4,32,10,21];
$max= null;
$max2 = null;
foreach ($arr as $value) {
    if ($value > $max) {
        $max2 = $max;
        $max = $value;
    } else if ($value > $max2 and $value < $max) {
        $max2 = $value;
    }
}
echo $max2 . '<br>';


$arr = [5,3,17,21];
$max = null;
$max2 = null;
foreach($arr as $value){

    if($max < $value) {
        $max2 = $max;
        $max = $value;
    }

    if($max > $value and $max2 < $value){
        $max2 = $value;
    }
}

echo $max2 . '<br>';


$birthday = 1990;
$now = date("Y");
$years = $now - $birthday;
echo $years . '<br>';

$arr = [1,4,2,8,6];
arsort($arr);
foreach($arr as $value) {
    echo $value . '<br>';
}


$a = 3;
if ($a > 0) {
    echo 'Верно';
} else {
    echo 'Неверно';
}
?>


<div>
    <form action="index.php"method="get">
        A:  <input type="text"name="a"><br>
        <input type="submit"value="submit"name="submit">
    </form>
</div>



</body>
