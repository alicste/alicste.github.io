<?php 

$roll = filter_input(INPUT_POST, 'roll');
$class = filter_input(INPUT_POST, 'class'); 
$shift = filter_input(INPUT_POST, 'shift'); 
$s_phone = filter_input(INPUT_POST, 's_phone');
$g_name = filter_input(INPUT_POST, 'g_name');
$g_relation = filter_input(INPUT_POST, 'g_relation');
$g_phone = filter_input(INPUT_POST, 'g_phone');
$s_name = filter_input(INPUT_POST, 's_name');
$photo = $_FILES['photo']['name'];

?>