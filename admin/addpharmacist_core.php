<?php
require_once('../db/query.php');



if(isset($_REQUEST['btn_sub'])){
	$profile = $_FILES['ppp']['name'];
	$tmp_name = $_FILES['ppp']['tmp_name'];
	$picid = uniqid();
	move_uploaded_file($tmp_name,"avater/$picid.jpg");

	dataInsert('pharmacist',array($_REQUEST['name'],$_REQUEST['contact'],$picid.".jpg",$_REQUEST['usrname'],$_REQUEST['password']));
	header('location: addpharmacist.php');
}











?>