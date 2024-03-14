<?php
include './model/user.php';
$new = new User();
$data = $new->Search($_GET);

echo json_encode($data);




?>