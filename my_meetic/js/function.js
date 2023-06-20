function page_redirect(url) {
    window.location.href = url;
}

function header_btn_redirect(selector, url) {
    $(selector).click(function () {
        window.location.href = url;
    });
}

function other_genre_input() {
    const genreOption = $(".genre")
    const genreInput = $('<input class="input_style other_genre_input" type="text" name="other_genre_input" placeholder="Other : describe..." required>')

    $(".other_genre").click(function () {
        $('.input_block').append(genreInput);
    })

    for (let i = 0; i < genreOption.length; i++) {
        $(genreOption[i]).click(function () {
            genreInput.remove();
        })
    }
}

function other_hobby_input() {
    const hobbyInput = $('<input class="input_style other_hobby_input" type="text" name="other_hobby_input" placeholder="Other : describe..." required>');
    let i = 0;

    $(".other_hobby_div").click(function () {
        if (i % 2 == 0) {
            $("fieldset").after(hobbyInput);
        } else {
            $(hobbyInput).remove();
        }
        i++;
    })
}

// AJAX jQuery
function form_submit_request(formSelector) {
    $(formSelector).submit(function (e) {
        e.preventDefault();

        let data = new FormData(this);

        $.ajax({
            url: "request.php",
            method: "POST",
            data: data,
            processData: false,
            contentType: false,
            success: function (response) {
                window.location.replace('main.php');
            },
            error: function (error) {
                console.log(error);
            }
        })
    });
}
