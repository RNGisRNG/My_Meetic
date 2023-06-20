<?php session_start();

require_once("ddb.php");

if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['birthdate']) && isset($_POST['city']) && isset($_POST['genre']) && isset($_POST['hobbies'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $birthdate = $_POST['birthdate'];
    $city = $_POST['city'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'],  PASSWORD_DEFAULT);
    $hobbiesConcat = "";

    if($_POST['genre'] == "other_genre" && isset($_POST['other_genre_input'])){
        $genre = $_POST['other_genre_input'];
    }else{
        $genre = $_POST['genre'];
    }

    foreach($_POST['hobbies'] as $hobbiesValue)
    {
        $hobbiesConcat .= $hobbiesValue.",";
    }

    if(isset($_POST['other_hobby_input']))
        $hobbiesConcat .= $_POST['other_hobby_input'];

    $insertUser = "insert into user (firstname, lastname, genre, birthdate, city, email, password, hobbies)
                values ('$firstname', '$lastname', '$genre', '$birthdate', '$city', '$email', '$password', '$hobbiesConcat')";
    $signUp->sign_up($insertUser);
}