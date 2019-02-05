<!DOCTYPE html>
<html >
<head>
    <meta name="_token" content="{{csrf_token()}}" />
    <title>Тестовое задание "укорачиватель ссылок"</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
        <div id="editor">
            <div class="box">
                <div class="left">
                    <input id="shorten_url" taborder="1" name="url" type="url" class="form-control" placeholder="Вставьте вашу ссылку" value="">
                </div>
                <div class="left">
                    <input type="button" id="modal_button" class="btn btn-info" value="Создать">
                </div>
            </div>
        </div>

        <div id="customerModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Ваша сссылка:</h4>
                    </div>
                    <div class="modal-body">
                        <input type="text" name="title" id="result" class="form-control"/><br>
                        <a id="link" href="" target="_blank"><input type="button" class="btn btn-info" value="Перейти"></a>
                    </div>
                    <div class="alert alert-danger" style="display:none"></div>
                </div>
            </div>
        </div>

        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="js/script.js"></script>
</body>
</html>
