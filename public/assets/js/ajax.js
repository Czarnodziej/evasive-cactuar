$(document).ready(function() {
    var form = $('#form'),
            submit = $('#submit');
//            postURL = "{{ URL::route('comment') }}";
    form.on('submit', function(e) {
        // prevent default action
        e.preventDefault();
        // send ajax request
        $.ajax({
            type: 'POST',
            url: 'comment',
            cache: false,
            data: form.serialize(), //form serialize data
            beforeSend: function() {
                // change submit button value text and disabled it
                submit.val('Wysyłanie...').attr('disabled', 'disabled');
            },
            success: function(data) {
                console.log(data);
                // Append with fadeIn see http://stackoverflow.com/a/978731
                var item = $(data).hide().fadeIn(800);
                $('.comment').append(item);
                // reset form and button
                form.trigger('reset');
                submit.val('Zapisz').removeAttr('disabled');
            },
            error: function(e) {
                alert(e);
            }
        });
    });
});