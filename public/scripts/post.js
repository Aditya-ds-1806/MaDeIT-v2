$("#subscription").submit(function (e) {
    e.preventDefault();
    $("#message").text('');
    var email = $("#email").val();
    if (/\S/.test(email)) {
        $.ajax({
            type: "POST",
            url: "/emails/saveEmails.php",
            dataType: 'html',
            data: {
                email: email
            },
            cache: false,
            success: function (res) {
                $("#message").text(res);
            }
        });
    }
    else $("#message").text("Please enter a valid Email ID");
    setTimeout(() => $("#message").text(''), 5000);
});