<?php
$EmailTo = "mk-info@maksikor.ru";
$Subject = "Контактная форма maksikor.ru ";
$heade = 'MIME-Version: 1.0' . "\r\n"; 
$heade .= 'Content-type: text/html; charset=utf-8' . "\r\n"; 
$Bod = "ФИО: ".$_POST['name']."<br>";
$Bod .= "Телефон: ".$_POST['phon']."<br>";
$Bod .= "Email: ".$_POST['email']."<br>";
$Bod .= "Сообщение: ".$_POST['comment']."<br>";


// send email
$success = mail($EmailTo, $Subject, $Bod, $heade);


ob_start();
$new_url = 'index.html';
header('Location: '.$new_url);
ob_end_flush();

?>