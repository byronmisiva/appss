<?php 
$file= $_POST["imagen"];
$participante= $_POST["participante"];
$url="galaxy-a/uploads/".$participante.date("h-m-s").'.png';
$img = str_replace('data:image/png;base64,', '', $file);
file_put_contents("./".$url, base64_decode($img));
echo $url;
?>

