<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Zonda Paste</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Oswald|Roboto+Mono">

        <style>
            nav {
                font-family: 'Oswald', sans-serif;
            }

            section.main {
                margin-top: 16px;
            }

            textarea {
                font-family: 'Roboto Mono', monospace;
                width: 100vw;
                height: 85vh;
            }
        </style>
    </head>

    <body>

        @include('layout.partials.navigation')

        <section class="main">
            <div class="container-fluid">
                @yield('content')
            </div>
        </section>

        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js'></script>
        <script src='https://cdn.jsdelivr.net/clipboard.js/1.6.1/clipboard.min.js'></script>

        <script>
            $(function () {
                $('[data-toggle="tooltip"]').tooltip();
                new Clipboard('.clipboard');
            });
        </script>
    </body>
</html>