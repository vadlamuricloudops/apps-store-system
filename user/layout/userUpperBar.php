<?php
if(!isSignedIn())
{
    header("location:../index.php");
    exit();
}
include_once('../layout/upperBar.php');
?>