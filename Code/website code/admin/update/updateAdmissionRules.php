<?php
define('REGISTER_INCLUDE_CHECK',true);
require '../../include/connect.php';


$result = mysql_query("select * from College_Info");
if (mysql_num_rows($result) == 0) {
$query="insert into College_Info(Admission_Rules) values('".$_REQUEST['content']."')";
}else{
$query="UPDATE College_Info SET Admission_Rules='".$_REQUEST['content']."'";
}
if(!mysql_query($query))
{
    $message  = 'Invalid query: ' . mysql_error() . "\n";
    $message .= 'Whole query: ' . $query;
    die($message);
}

header("Location: ../dashboard-admission.php"); 
?>