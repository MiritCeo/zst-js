<?php
require ('admin/sql_connect.php');

function get_book($type){

    global $mysqli;

    if($type == "avalible") {
        $sql = "SELECT id,name,photo_url,type,price FROM books WHERE avalible = 1";
    }else {
        $sql = "SELECT books.id,books.name,books.photo_url,books.type,books.price,reservation.to_date FROM books INNER JOIN reservation on books.id = reservation.car_id WHERE books.avalible = 0";

    }

    $result = $mysqli->query($sql);

    $rows = $result->fetch_all(MYSQLI_ASSOC);

    return $rows;

}


?>