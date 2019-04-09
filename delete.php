<?php
if(isset($_POST["booking_id"]))
{
    $connect = new PDO('mysql:host=localhost;dbname=db_threeg', 'root', '');
    $query = "
 DELETE from booking WHERE id=:booking_id
 ";
    $statement = $connect->prepare($query);
    $statement->execute(
        array(
            ':id' => $_POST['booking_id']
        )
    );
}
