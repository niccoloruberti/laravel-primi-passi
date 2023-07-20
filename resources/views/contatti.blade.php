<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-body-tertiary">
            <div class="container-fluid">
                <div class="navbar-nav">
                    <a class="nav-link" aria-current="page" href="/">Home</a>
                    <a class="nav-link" href="/chi-siamo">Chi siamo</a>
                    <a class="nav-link" href="/contatti">Contatti</a>
                </div>
            </div>
        </nav>
        {{ $title }}
    </body>
</html>
