<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="icons/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="sidebar/style.css">
</head>

<style>
    #konteudu{
        margin-top: 100px;
        margin-left: 300px;
    }
</style>
<body>
    
    <?php
        include("navbar.php");
    ?>

    <div id="konteudu">
        <div class="d-flex">
            <div class="p-2 flex-grow-1">Flex item</div>
            <div class="p-2">Flex item </div>
            <div class="p-2">Third flex item</div>
        </div>
    </div>
<script src = "bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>