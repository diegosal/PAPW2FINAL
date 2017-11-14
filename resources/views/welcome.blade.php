<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8>
        <title>proyecto-final</title>
        <link href="{{ URL::asset('css/app.css') }}" rel=stylesheet>
        <script>
            window.Laravel = <?php echo json_encode([
                'csrfToken' => csrf_token()
            ]); ?>
        </script>
    </head>
    <body>
        <div id=app></div>
        <script type=text/javascript src="{{ URL::asset('js/manifest.js') }}"></script>
        <script type=text/javascript src="{{ URL::asset('js/vendor.js') }}"></script>
        <script type=text/javascript src="{{ URL::asset('js/app.js') }}"></script>
    </body>
</html>