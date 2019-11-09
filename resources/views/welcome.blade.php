<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Hackaton 2019</title>

        <link rel="stylesheet" href=" {{ asset('css/app.css') }} ">
    </head>
    <body>
        
        <div id="app">
            <main-app></main-app>
        </div>

        <script src=" {{ asset('js/app.js') }} "></script>

        <!-- Start of ChatBot (www.chatbot.com) code -->
        <script type="text/javascript">
            window.__be = window.__be || {};
            window.__be.id = "5dc65bf64423a800072c3b41";
            (function() {
                var be = document.createElement('script'); be.type = 'text/javascript'; be.async = true;
                be.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'cdn.chatbot.com/widget/plugin.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(be, s);
            })();
        </script>
        <!-- End of ChatBot code -->
                
    </body>
</html>
