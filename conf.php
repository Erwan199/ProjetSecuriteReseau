<?php
define("HOST" , "localhost");
define("LOGIN" , "root");
define("PASS" , "");
define("BDD" , "faceboot");

mysql_connect(HOST,LOGIN,PASS);
mysql_select_db(BDD);
?>