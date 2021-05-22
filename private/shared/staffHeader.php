<?php 
    if (!isset($pageTitle)) {
        $pageTitle = 'Staff Area';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GBI - <?php echo $pageTitle; ?></title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="../stylesheets/bootstrap.min.css">
    <!-- font awesome -->
    <script src="../stylesheets/all.js"></script>
    <!-- staff css -->
    <link rel="stylesheet" href="../stylesheets/staff.css">
    
</head>
<body>
    <header class="text-white bg-primary w-75 text-center" >
        <h1>GBI Staff Area</h1>
    </header>

    <nav >
        <ul class="d-inline text-center">
            <li><a href="../index.php">Menu</a></li>
        </ul>
    </nav>