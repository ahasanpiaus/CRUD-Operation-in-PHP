<?php

include 'conn.php';

$id = $_GET['idd'];

$q = " DELETE FROM `crudtable` WHERE id = $id ";

mysqli_query($con, $q);

header('location:display.php');

?>