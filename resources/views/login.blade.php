@extends('layouts.mainlayout')
@section('title', 'Login')

@section('content')
<br>
@if(Session::has('status'))
    <div class="alert alert-success" role="alert">
        {{Session::get('message')}}
    </div>
@endif
<div class="row justify-content-center">
    <div class="col-3">

    </div>
    <div class="col-6">
    <form method="POST" action="">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
    <div class="col-3">

    </div>
</div>
@endsection

<!-- //* untuk starter kit bisa pake laravel breeze atau jet stream -->