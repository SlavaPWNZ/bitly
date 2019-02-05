jQuery(document).ready(function () {
    jQuery.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });

    $(function() {
        $( "#shorten_url" ).focus();
    });

    $('#result').focus(function(){
        input_temp=this.value;
        $(this).select();
    });

    $(document).on('click', '#modal_button',function(){
        var shorten_url = $('#shorten_url').val();
        var expression = /https?:\/\/(www\.)?[-a-zA-Z0-9@:%._\+~#=]{2,200}\.[a-z]{2,6}\b([-a-zA-Z0-9@:%_\+.~#?&//=]*)/;
        var regex = new RegExp(expression);
        if(shorten_url.match(regex))
        {
            $('#customerModal').modal('show');
            $.ajax({
                url : "/ajax",
                method:"POST",
                data:{shorten_url:shorten_url},
                success:function(data){
                    $('#result').val(data);
                }
            });
        }
        else
        {
            alert("Укажите ссылку в верном формате! Например: https://mail.yandex.ru/");
        }
    });


});