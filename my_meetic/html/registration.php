<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>ChicMeet - Sign up</title>
    <link href="../style.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="../js/function.js"></script>
    <script src="../js/registration.js"></script>
</head>

<body>
<?php include_once('header.php'); ?>

<main>
    <div class="width flex_column">
        <form class="register_block">
            <h1>Sign up</h1>
            <div class="input_block">
                <input class="input_style" type="text" name="firstname" placeholder="firstname" required>
                <input class="input_style" type="text" name="lastname" placeholder="lastname" required>
                <input class="input_style" type="email" name="email" placeholder="email" pattern=".+@.+\.[a-z]+$" required>
                <input class="input_style" type="password" name="password" placeholder="password (8 characters minimum)" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" required>
                <input class="input_style" type="date" name="birthdate" min="1930-01-01" max="2023-12-31" required>
                <input class="input_style" type="text" name="city" placeholder="city" required>
                <div class="input_style select_genre">
                    <label for="genre">Genre : </label>
                    <select class="cursor_pointer" name="genre" id="genre" required>
                        <option class="genre" value="mister">Mister</option>
                        <option class="genre" value="miss">Miss</option>
                        <option class="other_genre" value="other_genre">Other...</option>
                    </select>
                </div>
            </div>
            <div class="align_center">
                <fieldset class="flex_row_wrap">
                    <legend>Hobbies :</legend>
                    <?php foreach($hobbiesArray as $hobbiesValue) { ?>
                        <div class="white_border_box cursor_pointer">
                            <input class="cursor_pointer" type="checkbox" id="<?= $hobbiesValue['name']; ?>" name="hobbies[]" value="<?= $hobbiesValue['name']; ?>">
                            <label class="cursor_pointer" for="<?= $hobbiesValue['name']; ?>"><?= $hobbiesValue['name']; ?></label>
                        </div>
                    <?php } ?>
                    <div class="cursor_pointer white_border_box other_hobby_div">
                        <label class="cursor_pointer other_hobby">Other...</label>
                    </div>
                </fieldset>
            </div>
            <button class="grey_border btn" type="submit">Submit</button>
        </form>
    </div>
</main>

<?php include_once('footer.php'); ?>
</body>
</html>