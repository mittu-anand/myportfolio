<?php
  header("Access-Control-Allow-Origin: *");
  $response=array();
  $response[0]=array('id'=>1,'name'=>"Mohanlal",'picture'=>"lal.jpg",'age'=>55,'websites'=>"http://mohanlal.com");
  $response[1]=array('id'=>2,'name'=>"Mammootty",'picture'=>"mammootty.jpg",'age'=>65,'websites'=>"http://mammotty.com");
  /* $y=[{id=>1,name:"Mohanlal",picture=>"lal.jpg",age=>55,websites=>"http://mohanlal.com"},
  {id=>2,name=>"Mammootty",picture=>"mammootty.jpg",age=>65,websites=>"http://mammotty.com"}]; */
 /*  $x = '[
{id:1,name:"Mohanlal",picture:"lal.jpg",age:55,websites:"http://mohanlal.com"},
{id:2,name:"Mammootty",picture:"mammootty.jpg",age:65,websites:"http://mammotty.com"},
{id:3,name:"Prithviraj",picture:"prithvi.jpg",age:35,websites:"http://prithviraj.com"},
{id:4,name:"Dulquer Salman",picture:"dulquer.jpg",age:35,websites:"http://dq.com"},
{id:5,name:"Asif Ali",picture:"asif.jfif",age:32,websites:"http://asifali.com"},
{id:6,name:"Fahad Fasil",picture:"fahad.jpg",age:33,websites:"http://fahad.com"},
{id:7,name:"Kalidas Jayaram",picture:"kalidas.jpg",age:25,websites:"http://kalidas.com"},
{id:8,name:"Mohanlal",picture:"lal.jpg",age:55,websites:"http://mohanlal.com"},
{id:9,name:"Mammootty",picture:"mammootty.jpg",age:65,websites:"http://mammotty.com"},
{id:10,name:"Prithviraj",picture:"prithvi.jpg",age:35,websites:"http://prithviraj.com"},
{id:11,name:"Dulquer Salman",picture:"dulquer.jpg",age:35,websites:"http://dq.com"},
{id:12,name:"Asif Ali",picture:"asif.jfif",age:32,websites:"http://asifali.com"},
{id:13,name:"Fahad Fasil",picture:"fahad.jpg",age:33,websites:"http://fahad.com"},
{id:14,name:"Kalidas Jayaram",picture:"kalidas.jpg",age:25,websites:"http://kalidas.com"}
]'; */
  echo json_encode($response);

 
?>