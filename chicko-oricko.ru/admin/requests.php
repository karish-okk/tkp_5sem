<?php
// require_once("db_connect.php");

// function tt($value) {
//     echo '<pre>';
//     print_r($value);
//     echo'</pre>';
// }


// // Запрос на получение данных одной таблицы
// function selectAll($table, $params = []) {
//     global $conn;
//     $sql = 'SELECT * FROM $table';
//     $result = $conn->query($sql);


//     if (!empty($params)) {
//         $i = 0;
//         foreach ($params as $key => $value) {
//             if (!is_numeric($value)) {
//                 $value = "'" . $value . "'";
//             }
//             if ($i === 0) {
//                 $sql = $sql . "WHERE $key => $value";
//             }
//             else {
//                 $sql = $sql . "AND $key => $value";
//             }
//             $i++;
//         } 
    
//     }

// //    dbCheckError($qry);

//     // Вывод данных
//     while($row = $result -> fetch_assoc()) {
//         // Действия с данными из базы данных
//         print_r($row); // Вывести массив данных для каждой строки
//     }
// }

// $params = [
//     'id' => 1
// ];


// // Проверка наличия ошибок выполнения запроса
// function dbCheckError($qry) {
//     global $conn;
    
//     if (!$qry) {
//     die('Ошибка выполнения запроса: ' . $conn->error);
//     }
//     return true;
// }

// tt(selectAll('reataurant'));
?>