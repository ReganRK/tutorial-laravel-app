<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel-tutorial-Home</title> -->
    <!-- bootsrap -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid"> -->
    @extends('layouts.postlayout')
    @section('title', 'Home')

    @section('content')
        <h1>
            Ini Home
        </h1>

        <h2>
            Selamat datang, {{$name}} sebagai {{$role}}
        </h2>

        <!-- @if ($role == 'Admin')
            ini admin
        @else
            ini bukan admin
        @endif -->

        <!-- @switch($role)
            @case($role == 'Admin')
                ini admin
                @break
            
            @case($role == 'Staff')
                ini staff
                @break
            
            @case($role == 'Public')
                ini public
                @break

        @endswitch -->

        @for ($i = 0; $i < 10; $i++)
            The current value is {{ $i }}
            <br>
        @endfor

        <p>
            We have:
        </p>

        <table class="table">
            <tr>
                <th>No</th>
                <th>Name</th>
            </tr>
            @foreach ($products as $product)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$product}}</td>
                </tr>
            @endforeach    
        </table>
    @endsection
    

        <!-- @foreach ($products as $product)
            <p>- {{$product}}</p>
        @endforeach -->

    <!-- </div> -->

    <!-- script bootsrap -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html> -->