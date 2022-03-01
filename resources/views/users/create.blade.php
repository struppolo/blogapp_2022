<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <script src="{{ asset('js/app.js') }}"></script>

    <title>Document</title>
</head>

<body>
    <form method="post" action="{{ route('users.store') }}">
        <div class="container">
            <h1>Crea utente</h1>
            <div class="row">


                @csrf
                <div class="col-4">
                    Nome
                </div>
                <div class="col-4">
                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" />
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                
            </div>
            <div class="row">


                @csrf
                <div class="col-4">
                    Email
                </div>
                <div class="col-4">
                    <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" />
                    @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                
            </div>
            <div class="row">


                @csrf
                <div class="col-4">
                    Password
                </div>
                <div class="col-4">
                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" />
                    @error('password')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                
            </div>


            <div class="col-4">
                <input type="submit" value="crea" class="btn btn-primary" />

            </div>
        </div>
        </div>
    </form>
</body>

</html>
