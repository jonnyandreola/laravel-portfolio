<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Message Sent from your portfolio</h1>
        <p>{{ $msg }}</p>
        <hr/>
        <cite>{{ $content['name'] }}</cite>
        <a href="mailto:{{ $content['email'] }}">{{ $content['email'] }}</a>
    </body>
</html>