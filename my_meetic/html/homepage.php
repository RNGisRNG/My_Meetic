<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>ChicMeet</title>
    <link href="../style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="../js/function.js"></script>
    <script src="../js/homepage.js"></script>
</head>

<body>
    <?php include_once('header.php'); ?>

    <main>
        <div class="width flex_column">
            <section class="welcome">
                    <h2>ChicMeet</h2>
                    <p>L'amour est un fort sentiment d'affection et d'attachement envers un être vivant ou une chose.</p>
            </section>
            <section class="grey_border white_box">
                <div class="sign_up sign_block grey_border">
                    <h3>Sign up</h3>
                    <p>Creat a new account</p>
                </div>
                <div class="sign_in sign_block grey_border">
                    <h3>Sign in</h3>
                    <p>Already sign up ?</p>
                </div>
            </section>
        </div>
    </main>

    <?php include_once('footer.php'); ?>
</body>
</html>