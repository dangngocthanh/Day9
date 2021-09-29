<?php
include_once 'Linkedlist.php';
include_once 'Patient.php';
$List=new Linkedlist();
$Patient=new Patient('abala trap',1);
$List->addPatient($Patient);
$Patient=new Patient('Thanh dep trai lam',1);
$List->addPatient($Patient);
$Patient=new Patient('Thanh dep trai lam luon',3);
$List->addPatient($Patient);
$Patient=new Patient('Thanh dep trai lam luon ne',2);
$List->addPatient($Patient);
echo $List->dequeue().'<br><br>';
var_dump($List->readList());