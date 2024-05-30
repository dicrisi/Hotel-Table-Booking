<?php
session_start();
mysql_connect('localhost','root','') or die ("Database Not Connect");
mysql_select_db('hoteltable') or die ("No Database Selected");

?>