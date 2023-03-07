@extends('layout.layout')

@section('container')
    <form action="" method="post" class="form d-flex justify-content-center ">
        @csrf
    <div class="input">
        <h5>Login</h5>
       <label for="" class="form-label mt-2">Username</label>
        <input type="text" name="username"  class="form-control">
        <label for="" class="form-label">Password</label>
        <input type="text" name="password" class="form-control">
        <br>
        <button type="submit" class="btn btn-success mt-2">Login</button>
    </div>
    
    </form>

    <style>
        label{
            display: block;
        }
        form{
            margin-top: 18%;
        }
        button{
            margin-left: 200px;
        }
    </style>
@endsection