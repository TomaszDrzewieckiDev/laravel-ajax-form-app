<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel-form-app</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        {{-- <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> --}}
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <!-- Styles -->
       <style>
        </style>
    </head>
    <body>
        <div class="container">
            <main>
                    <h1>Hello, ajax-form-app!</h1>
                    <form>
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Imie i nazwisko</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Numer telefonu</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Adres email</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Treść wiadomości</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

            </main>
        </div>
    </body>
</html>
