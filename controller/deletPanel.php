<?php
include_once '../model/Data.php';
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
Data::delete($id);
header('Location: ../view/AdmUser.php');
?>