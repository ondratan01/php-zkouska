<?php
session_start();
 if (!isseet($_SESSION["user_id"])) {
    header("Location: login.html");
 }

?>