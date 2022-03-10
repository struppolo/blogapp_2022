<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>BlogApp - Laravel 8</title>
    <!-- Bootstrap core CSS -->
    <link href=" {{ asset('css/app.css') }}" rel="stylesheet">


    <meta name="theme-color" content="#7952b3">

    <script src="https://kit.fontawesome.com/dc56debdfc.js" crossorigin="anonymous"></script>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

    </style>
</head>

<body class="d-flex flex-column h-100">

    <header>
        @include('layouts.partials.navbar')
    </header>

    <!-- Begin page content -->
    <main class="flex-shrink-0">
        <div class="container" style="padding-top:60px">

            @yield('content')
        </div>
    </main>

    <footer class="footer mt-auto py-3 bg-light">
        <div class="container">
            <span class="text-muted">Place sticky footer content here.</span>
        </div>
    </footer>


    <script src="{{ asset('js/app.js') }}"></script>

    <script src="https://cdn.tiny.cloud/1/y76t0ma35bbuptea55qzgldoomfyvs4la94ttuy4ckibtyus/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
          selector: 'textarea',
          plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
          toolbar_mode: 'floating',
        });
      </script>

</body>

</html>
