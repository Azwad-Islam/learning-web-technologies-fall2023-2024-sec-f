<?php
    include_once('../controller/sessioncheck.php');
    include_once('../model/adminModel.php');

    $employee = getAllemployee();
?>

<html>

<head>
    <title> admin search </title>
    <script src="../asset/adminSearch.js"></script>
</head>

<body>

<input type="text" id="username" name="username" value=""/>
<input type="button" name="search" value="Search" onclick="ajax()" />
<p id="search">