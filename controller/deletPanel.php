<?php
include_once '../model/Data.php';
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
echo "<script>window.close();
opener.location.href=opener.location.href;</script>";
Data::delete($id);
?>