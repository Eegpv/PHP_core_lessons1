<?php

// ↓ УРОК 3 С КАНАЛА "ПРОСТО О LARAVEL. CutCode" ↓ МАССИВЫ

// ВНИМАНИЕ! КОД РАСКОМЕНТИРОВАН ДЛЯ НАГЛЯДНОСТИ, РАБОТАТЬ ПРИ ЗАПУСКЕ НЕ БУДЕТ
// ПОКА НЕ ЗАКОМЕНТИРОВАННЫ ОТДЕЛНЫЕ УЧАСТКИ.

// $arr = [
//     'title' => 'some title',
//     'some_count' => 22,
//    'arr_inside_arr' => ['some1' => 1],
//    'empty' => null,
// ];
// var_dump($arr);
// echo "присваеваем результат переменной и возвращаем пораметр" . PHP_EOL;

// $result = print_r($arr, true);
// echo "выводим значение переменной" . PHP_EOL;
// echo $result;

// echo "удаляем элемент из массива и добавляем element x";

// $array1 = [
//     1 => 'element one',
//     2 => 'element two',
//     3 => 'element three',
//     4 => 'element four',
// ];
// unset($array1[4]);
// $array1[] = 'element x';
// var_dump($array1);


// ↓ УРОК 4 С КАНАЛА "ПРОСТО О LARAVEL. CutCode" ↓ ЦИКЛЫ

// for ($i = 0; $i <10; $i++){
//     echo $i . PHP_EOL;
// }

// $clients = file(__DIR__ . '/clients.txt');

// $i = 0;
// while ($i < count($clients)){
//     echo $i . '---> ' . $clients[$i];
//     $i++;
// }
// do{
//     echo $i . ' ---> ' . $clients[$i];
//     $i++;
     
// } while ($i < count($clients));

// foreach ($clients as $key => $client){
//         echo $key . ' ---> ' . $client;
// }