<?php
//error_reporting(1);	
$arr = array([
  
    id => 1,
    name => "Infy",
    email => "mittu@infy",
    body => "Mittu is an Infy Employee",
    colleagues => array(
    id => 2,
    name => "Infy",
    email => "ganesh@infy",
    body => "Ganesh is an Infy Employee who is Mittus colleage"
    )
],
[
  
    id => 2,
    name => "Infy",
    email => "Arun@infy",
    body => "Arunis an Infy Employee",
    colleagues => array(
    id => 1,
    name => "Infy",
    email => "mittu@infy",
    body => "Mittuis an Infy Employee who is Arun's colleage"
    )
]);
echo json_encode($arr);

?>