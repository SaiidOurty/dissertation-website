<?php
// Database connection
$connect = new PDO('mysql:host=localhost;dbname=db_threeg', 'root', '');

$data = array();
$query = "SELECT * FROM booking ORDER BY booking_id";

$statement = $connect->prepare($query);
$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row)
{
    $data[] = array(
        'id'   => $row["booking_id"],
        'title'   => $row["title"],
        'start'   => $row["start_date"],
        'end'   => $row["end_date"]
    );
}

echo json_encode($data); // will return as {"id":"1","title":"Team 1 vs Team 2",
//"start":"2019-03-30","end":"2019-03-31"}

