<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1 style="text-align: center">Домашка №2</h1>
<p style="color: indianred" >1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:</p>
<p> если $a и $b положительные, вывести их разность;<br>
    если $а и $b отрицательные, вывести их произведение;<br>
    если $а и $b разных знаков, вывести их сумму;</p>

    <?php
        $a = rand(-10,50);
        $b = rand(-10,50);
        var_dump($a, $b);
            if ($a >= 0 && $b >= 0) {
        echo($a - $b);
        }   else if ($a < 0 && $b < 0) {
        echo($a * $b);
        }    else if ($a < 0 && $b >= 0 || $a >= 0 && $b < 0) {
        echo($a + $b); }
    ?>

<p style="color: indianred">2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.
    При желании сделайте это задание через рекурсию.</p>

   <?php
        $a = rand(1,15);
        var_dump($a);
    switch ($a) {
        case 1:
            echo('1');
        case 2:
            echo('2');
        case 3:
            echo('3');
        case 4:
            echo('4');
        case 5:
            echo('5');
        case 6:
            echo('6');
        case 7:
            echo('7');
        case 8:
            echo('8');
        case 9:
            echo('9');
        case 10:
            echo('10');
        case 11:
            echo('11');
        case 12:
            echo('12');
        case 13:
            echo('13');
        case 14:
            echo('14');
        case 15:
            echo('15');
            break;

        default:
            echo('неккоректный ввод');
    }
?>


<p style="color: indianred">3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.
    В делении проверьте деление на 0 и верните текст ошибки.</p>

<?php

    function summa($x, $y) {
        return ($x + $y);
    }
    $Sum = summa(20,10);
    echo ("x = 20 , y = 10 сумма равна {$Sum}" . "<br>");

    function minus($x, $y) {
        return ($x - $y);
    }
    $Min = minus(20, 10);
    echo ("x = 20 , y = 10 разность равна {$Min}" . "<br>");

    function umnozh($x, $y) {
        return ($x * $y);
    }
    $Um = umnozh(20, 10);
    echo ("x = 20 , y = 10 умножение равно {$Um}" . "<br>");

    function delenie($x, $y) {
		if(($x == 0)||($y == 0)){
			return ("На ноль не делиться");
		}else{
			return ($x / $y);
		}
	}
    $Del = delenie(20, 10);
    echo ("x = 20 , y = 10 деление равно {$Del}" . "<br>");
    ?>

<p style="color: indianred">4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции.<br> 
В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).</p>

<?php 
    function mathOperation ($arg1, $arg2, $operation) {
    switch ($operation) {
        case 'summa':
            return summa($arg1, $arg2);
            break;
        case 'minus':
            return minus($arg1, $arg2);
            break;
        case 'umnozh':
            return  umnozh($arg1, $arg2);
            break;
        case 'delenie':
            return delenie($arg1, $arg2);
            break;
    }

}
$All_operation = mathOperation(20, 10, 'summa');
echo ("Первый параметр = 20 , второй = 10 " . "<br>");
echo ("Функция с параметром summa =  $All_operation" . "<br>");

$All_operation = mathOperation(20, 10, 'minus');
echo ("Функция с параметром minus =  $All_operation". "<br>");

$All_operation = mathOperation(20, 10, 'umnozh');
echo ("Функция с параметром umnozh =  $All_operation". "<br>");

$All_operation = mathOperation(20, 10, 'delenie');
echo ("Функция с параметром delenie =  $All_operation". "<br>");

?>

<p style="color: indianred">6. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.
</p>
<?php 
    function power($val, $pow){
		if($val === 1 || $pow === 0){ 
			return 1; 
		}elseif ($pow > 0){
			return ($val * power($val, $pow - 1));
		} else {
            $pow *= -1;
            return 1 / power($val, $pow);
        }
    }
	$Power_value = power(2,8);
	echo ("2 в степени 8 будет равно = {$Power_value}"."<br>");	
?>
<p style="color: indianred" >7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:</p>
<?php 
$h = date("H");
$m = date("i");
    if ($h==1 || $h==21) {
            $hours = " час";}
    elseif (($h>=2 && $h<=4) || ($h>=22 && $h<=24)) {
            $hours = " часа";}
    else   {$hours = " часов";}
        if (($m<20) || ($m>10)){
            $minutes = " минут.";}
    elseif (($m % 10) === 1) {
            $minutes = " минута.";}
    elseif ((($m % 10)>=2) && (($m % 10)<=4)) {
            $minutes = " минуты.";}
    else {$minutes = " минут.";}
echo $h . $hours . " " . $m . $minutes;
?>

</body>
</html>