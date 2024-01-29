<?php
session_start();
if (isset($_SESSION["cust_id"]) && $_SESSION["cust_id"] === true) {
    header("location: index.html");
    exit;
}
?>