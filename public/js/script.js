jQuery(document).ready(function () {
    jQuery.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });

    $(function() {
        $("#shorten_url" ).focus();
    });

    $('#result').focus(function(){
        input_temp=this.value;
        $(this).select();
    });

    $(document).on('click', '#modal_button',function(){
        var shorten_url = $('#shorten_url').val();
        var expression = /^(http:\/\/www\.|https:\/\/www\.|http:\/\/|https:\/\/)+[a-zа-яё0-9]+([\-\.]{1}[a-zа-яё0-9]+)*\.[a-zа-яё]{2,5}(:[0-9]{1,5})?(\/.*)?$/;
        var regex = new RegExp(expression);
        $('.alert-danger').html('');
        $('.alert-danger').css('display','none');
        $('#result').val('');
        if(shorten_url.match(regex))
        {
            $('#customerModal').modal('show');
            $.ajax({
                url : "/ajax",
                method:"POST",
                data:{shorten_url:shorten_url},
                success:function(data){
                    if (data['have']){
                        jQuery('.alert-danger').show();
                        jQuery('.alert-danger').append('<p>Данная ссылка была сгенерирована ранее!</p>');
                    }
                    $('#result').val(data['link']);
                    document.getElementById("link").href=data['link'];
                }
            });
        }
        else
        {
            alert("Укажите ссылку в верном формате! Например: https://mail.yandex.ru/");
        }
    });


});