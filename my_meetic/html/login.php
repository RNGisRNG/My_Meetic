<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>ChicMeet - Sign up</title>
    <link href="../style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="../js/function.js"></script>
    <script src="../js/login.js"></script>
</head>

<body>
<?php include_once('header.php'); ?>

<main class="main_height">
    <div>
        <form class="grey_border white_box connection_form" method="post" action="login.php">
            <h1>Sign up</h1>
            <div class="grey_border">
                <input class="input_style" type="email" name="email" placeholder="email" pattern=".+@.+\.[a-z]+$" required>
                <input class="input_style" type="password" name="password" placeholder="password" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" required>
            </div>
            <?php if(isset($GLOBALS['errorMsg']))
                    echo $GLOBALS['errorMsg'];
            ?>
            <button class="grey_border btn" type="submit">Submit</button>
        </form>
    </div>
</main>

<?php include_once('footer.php'); ?>
</body>
</html>