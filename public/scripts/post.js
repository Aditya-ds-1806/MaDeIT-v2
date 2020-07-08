$("#subscription").submit(function (e) {
    e.preventDefault();
    var email = $("#email").val();
    var spinner = document.getElementById('spinner');
    if (/\S/.test(email)) {
        $("#message").text('');
        spinner.classList.remove('d-none');
        $.ajax({
            type: "POST",
            url: "emails/saveEmails.php",
            dataType: 'html',
            data: {
                email: email
            },
            cache: false,
            success: function (res) {
                $("#message").text(res);
                spinner.classList.add('d-none');
            }
        });
    }
    else {
        $("#message").text("Please enter a valid Email ID");
        spinner.classList.add('d-none');
    }
    setTimeout(() => $("#message").text(''), 5000);
});