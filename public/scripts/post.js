$("#subscription").submit(function (e) {
    e.preventDefault();
    var email = $("#email").val();
    if (/\S/.test(email)) {
        $.ajax({
            type: "POST",
            url: "/database/db.php",
            dataType: 'html',
            data: {
                email: email
            },
            cache: false,
            success: function (res) {
                $("body").prepend(res);
            },
        });
    }
});