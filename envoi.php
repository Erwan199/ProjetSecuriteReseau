<?php
require "conf.php";

$pseudo= $_POST['pseudo'];

$sql="SELECT pseudo FROM acces WHERE pseudo ='$pseudo' ";
$req=mysql_query($sql) or die (mysql_error());
if (mysql_num_rows($req)>0)
{
    echo "1";
}
else {
    echo "0";
}

?>