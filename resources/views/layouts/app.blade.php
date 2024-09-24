<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DC Comics</title>

    @vite('resources/js/app.js')
</head>

<body>

    <header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC Comics">
                </div>
            </div>
        </div>
    </header>

    <main>
        @yield('jumbo')
    </main>

</body>

</html>
