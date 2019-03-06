<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css">
    <title>Document</title>
</head>
<body>
    @include('inc.topbar')
    <br>

    <div class="container">
       @include('inc.messages')
        @yield ('content')
    </div>
    
</body>
</html>