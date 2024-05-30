<?php

↓ УРОК 3 С КАНАЛА "ПРОСТО О LARAVEL. CutCode" ↓ МАССИВЫ


ВНИМАНИЕ! КОД РАСКОМЕНТИРОВАН ДЛЯ НАГЛЯДНОСТИ, РАБОТАТЬ ПРИ ЗАПУСКЕ НЕ БУДЕТ
ПОКА НЕ ЗАКОМЕНТИРОВАННЫ ОТДЕЛНЫЕ УЧАСТКИ.

$arr = [
    'title' => 'some title',
    'some_count' => 22,
   'arr_inside_arr' => ['some1' => 1],
   'empty' => null,
];
var_dump($arr);
echo "присваеваем результат переменной и возвращаем пораметр" . PHP_EOL;

$result = print_r($arr, true);
echo "выводим значение переменной" . PHP_EOL;
echo $result;

echo "удаляем элемент из массива и добавляем element x";

$array1 = [
    1 => 'element one',
    2 => 'element two',
    3 => 'element three',
    4 => 'element four',
];
unset($array1[4]);
$array1[] = 'element x';
var_dump($array1);


↓ УРОК 4 С КАНАЛА "ПРОСТО О LARAVEL. CutCode" ↓ ЦИКЛЫ


for ($i = 0; $i <10; $i++){
    echo $i . PHP_EOL;
}

$clients = file(__DIR__ . '/clients.txt');

$i = 0;
while ($i < count($clients)){
    echo $i . '---> ' . $clients[$i];
    $i++;
}
do{
    echo $i . ' ---> ' . $clients[$i];
    $i++;
     
} while ($i < count($clients));

foreach ($clients as $key => $client){
        echo $key . ' ---> ' . $client;
}


↓ УРОК 5 С КАНАЛА "ПРОСТО О LARAVEL. CutCode" ↓ IF ELSE SWITCH


$a = 7.7;
$b = 7.7;

if ($a > $b){
    echo "А больше Б";
} else if ($a > $b) {
    echo "А не больше Б";

} else {
    echo "А равно Б";
}

$a = 1.1;

switch($a){
    case 0:
        echo "a equal zero";
        break;
    case 1:
        echo "a equal one";
        break;
    default:
        echo "a doesnt equal one or zero";
}


↓ УРОК 6 С КАНАЛА "ПРОСТО О LARAVEL. CutCode" ↓ ОПЕРАТОРЫ


$a = true;
$b = false;

echo '$a and $b = '; var_dump($a and $b);
echo '$a or $b = '; var_dump($a or $b);
echo '$a xor $b = '; var_dump($a xor $b);
echo '$a && $b = '; var_dump($a && $b);
echo '$a || $b = '; var_dump($a || $b);


↓ УРОК 7 С КАНАЛА "ПРОСТО О LARAVEL. CutCode" ↓ Функции


function createMyFunction() {
    function printHello() {
        echo "Hello";
    }
    echo "Function Created" . PHP_EOL;
}
if (function_exists('printHello')){
    printHello();
} else {
    echo "Function is not exist" . PHP_EOL;
}
createMyFunction();
if (function_exists('printHello')){
    printHello();
} else {
    echo "Function is not exist" . PHP_EOL;
}

$a = 100;
$b = 2;

$f = fn() => $a + $b;
echo $f();


↓ УРОК 8 С КАНАЛА "ПРОСТО О LARAVEL. CutCode" ↓ Области видимости, GLOBAL 


$box1 = 'яблоко';
$box2 = 'бублик';

function magicka(){
    global $box1;
    $box1 = 'огрызок яблока';
    $GLOBALS['box2'] = 'дырка от бублика';
}
magicka();

echo $box1 . PHP_EOL;
echo $box2 . PHP_EOL;


↓ УРОК 9 С КАНАЛА "ПРОСТО О LARAVEL. CutCode" ↓ функции включений include require


