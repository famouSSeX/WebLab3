<?php
session_start();
if (!empty($_GET)) {
    $_SESSION['info'] = $_GET;}
?>

<form action="" method="GET">
    <label for = "First name">First name</label>
        <input name="First name">

    <label for = "Last name">Last name</label>
        <input name="Last name">

    <label for = "Age">Age</label>
        <input name="Age">

    <input type="Submit">
</form>