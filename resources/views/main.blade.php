<!DOCTYPE html>
<html >
<head>
    <title>Тестовое задание "укорачиватель ссылок"</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>
        <div class="container container-pod shorten-container">
            <div id="form_container" class="t-center mid-container foot-room">
                <form method="POST" action="/" name="shortenUrl" id="unAuthShortenForm">
                    <fieldset class="cf">
                        <input id="shorten_url" taborder="1" name="url" type="text" class="shorten-input" placeholder="Paste a link to shorten it" value="" autocomplete="off" autocorrect="off" autocapitalize="off" />
                        <input id="shorten_btn" type="submit" class="button button-primary button-large shorten-button" value="Shorten" />
                    </fieldset>
                </form>
                <div id="shorten_actions">
                </div>
            </div>

            <div class="link-container mid-container">
                <div id="shortened_info">
                    <ul id="most_recent_link" class="anon_history footroom">
                    </ul>
                </div>
                <div>
                    <ul id="anon_history" class="anon_history">
                    </ul>
                </div>
            </div>
        </div>

    <script src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript">
        $(function() {
            $( "#shorten_url" ).focus();
        });
    </script>

</body>
</html>
