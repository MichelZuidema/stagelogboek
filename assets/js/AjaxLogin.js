function Login(username, password) {
    $.ajax({
        url: 'assets/db/proc/loginProcess.php',
        method: 'POST',
        data: {
            'username': username,
            'password': password
        }
    })
        .done(function(data) {
            if(data == "OK") {
                window.location.href = 'blog/';
            } else {
                alert(data);
            }
        })
}

$('document').ready(function() {
    $('#btnSubmit').click(function() {
        var username = $('#inputUsername').val();
        var password = $('#inputPassword').val();

        Login(username, password);
    });
});