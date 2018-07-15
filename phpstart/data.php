<?php

// GET all data -> array ($publications)

require_once 'classes.php';

$publications = array();


//DB

$connect = mysqli_connect("localhost", "root", "", "testsite2");
if(mysqli_connect_errno())
{
    echo 'Failed to connect: ' . mysqli_connect_error();
}

$sql = "SELECT * FROM publication";

//query

$result = mysqli_query($connect, $sql);

while($row = mysqli_fetch_array($result))
{
    $publications[] = new $row['type']($row);
}
