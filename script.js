$(document).ready(function() {
    $.ajax({
        url: 'inc/loadRepoList.php',
        type: 'POST',
        data: {
            act: "init"
        },
        success: function(data) {
            $('#repoList').html(data);
        },
        error: function(xhr, status, error) {
            // alert('Error occured : ' + error);
        }
    });

    $('#yeetTheWorld').click(function() {
        $.ajax({
            url: 'inc/loadRepoInfo.php',
            type: 'POST',
            data: {
                act: "init"
            },
            success: function(data) {
                $('#main').html(data);
            },
            error: function(xhr, status, error) {
                alert('Error occured : ' + error);
            }
        });
    });
});