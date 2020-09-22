function ShowPosts() {
    $.ajax({
        url: '../assets/db/proc/showPosts.php'
    })
    .done(function(data) {
        $('#post-grid').html(data);
    })
    .fail(function() {
        $('#post-grid').text("AJAX request mislukt!");
    });
}

function CreateBlog() {
    var author_id = $('#author_id').val();
    var post_title = $('#post_title').val();
    var post_content = $('#post_content').val();
    var required_lvl = $('#required_lvl').val();
    var current_date = $('#current_date').val();

    $.ajax({
        url: '../assets/db/proc/creacrtePost.php',
        method: 'POST',
        data: {
            'author_id': author_id,
            'post_title': post_title,
            'post_content': post_content,
            'required_lvl': required_lvl,
            'current_date': current_date
        }
    })
    .done(function(data) {
        if(data == "OK") {
            window.location.href = '../blog/';
        } else {
            alert(data);
        }
    })
}