$(document).ready(function()
{
    header_btn_redirect(".sign_up", "registration.php");

    header_btn_redirect(".sign_in", "login.php");

    other_genre_input();

    other_hobby_input();

    form_submit_request(".register_block");
})


