<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>
        <?php
        echo ( isset($data['page_title']) ? $data['page_title'] . ' | ' : '' )  . SITENAME;
        ?>
    </title>

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">
</head>
<body>
