<?php
$fnumb=$_POST['fnum'];
$snumb=$_POST['snum'];

if(isset($_POST['add'])){
	echo  $fnumb+$snumb;
}

if(isset($_POST['sub']))
{
	echo  $fnumb-$snumb;
}
if(isset($_POST['mul']))
{
	echo  $fnumb*$snumb;
}
if(isset($_POST['div']))
{
	echo  $fnumb/$snumb;
}
?>