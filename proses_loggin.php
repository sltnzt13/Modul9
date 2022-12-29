<?php
session_start();
if (isset($HTTP_SESSION_VARS["session_status"]))
{
    echo("<pre>");
    echo("User Name : <br>".$HTTP_SESSION_VARS["session.user"]. "</br><br>");
    echo("Password  : <br>".$HTTP_SESSION_VARS["session.password"]. "</br><br>");
    echo("Click <a href=\ ">loggout</a> Untuk Keluar !");
    echo("</pre>");
}else
{
    header("Location: loggin.php");
    exit;
}
?>