<?php
$connect = new PDO('mysql:host=localhost;dbname=db_threeg', 'root', '');

if(isset($_POST["title"]))
{
    $query = "
 INSERT INTO booking 
 (booking_id, title, user_id, booking_id, start_event, end_event) 
 VALUES (:title, :start_event, :end_event)
 ";
    $statement = $connect->prepare($query);
    $statement->execute(
        array(
            ':title'  => $_POST['title'],
            ':start_date' => $_POST['start'],
            ':end_date' => $_POST['end']
        )
    );
}

