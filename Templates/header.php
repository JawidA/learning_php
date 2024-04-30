<?php 

    session_start();
    $name = isset($_SESSION['name']) ? (($_SESSION['name'] == '') ? 'Guest' : $_SESSION['name']) : 'Guest';
    
    $gender = isset($_COOKIE['gender']) ? (($_COOKIE['gender'] == '') ? 'Unknown' : $_COOKIE['gender']) : 'Unknown';

?>




<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>My PHP</title>

    <style>
        .brand {
            background: #cbb09c !important;
        }
        .brand-text {
            color: #cbb09c !important;
        }
        form {
            max-width: 460px;
            margin: 20px auto;
            padding: 20px;
        }

    </style>
</head>

<body>

<body class="grey lighten-4">
    <nav class="white z-depth-0">
       <div class="container">
            <a href="index.php" class='brand-logo brand-text'>Opencode Pizaa</a>

            <ul id="nav-mobile" class="right hidden-on-small-and-down">
                <li class="grey-text">Hello <?php echo htmlspecialchars($name) ?></li>
                <li class="grey-text"> (<?php echo htmlspecialchars($gender)?>) </li>
                <li><a href="add.php" class="btn brand z-depth-0">add a pizza</a></li>
            </ul>
       </div> 
    </nav>
    

