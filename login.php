<?php 
if ( ! isset( $_POST['submitted'] ) ) 
header('Location: ' . $_SERVER['HTTP_REFERER']); 
$credentials = [ 
  'login' => 'login', 
  'password' => 'test' 
]; 
if ( $credentials['login'] !== $_POST['login'] OR $credentials['password'] !== $_POST['password'] ) 
{ 
  header('Location: ' . $_SERVER['HTTP_REFERER']); 
  exit(); 
} 
session_start(); 
$_SESSION["isLogged"] = "1"; 
header('Location:' . '../https://www.youtube.com/watch?v=dQw4w9WgXcQ'); 
exit();
?>