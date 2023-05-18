@extends('layouts/master')

@section('title', 'Login')

@section('content')


<div class="container-fluid p-0 m-0 h-100">
    <div class="row d-flex align-items-center h-100">
        <div class="col-md-6 login-banner-container d-none d-md-block">
        </div>
        <div class="col-12 col-md-6 p-4 d-flex flex-column align-items-center">
        <span class="fs-3"><i class="fa-solid fa-utensils"></i> Bistro 21</span>
            <h2 class="h1">Login</h2>
            <div class="form-error error-active">
                {{ session('danger')}}
            </div>
            <form action="{{ route('auth.login')}} " method="POST" class="form">
                @csrf
                <label for="" class="d-block my-2">
                    Email
                    <input type="text" name="email" class="d-block w-100 p-2 @error('email') error-input @enderror" placeholder="seuemail@email.com"> 
                    @error('email')
                    <div class="error-message">
                        {{$message}}
                    </div>
                    @enderror
                </label>
                <label for="" class="d-block my-2">
                    Senha
                    <input type="password" name="password" id="" class="d-block w-100 p-2 @error('password') error-input @enderror" placeholder="●●●●●●●●●●●●●●">
                    @error('password')
                    <div class="error-message">
                        {{$message}}
                    </div>
                    @enderror
                </label>
                <input type="submit" value="Entrar" class="btn btn-dark p-3 my-2">
            </form>
            <span>Ainda não possui cadastro? <a href="{{ route('auth.register')}}">Cadastre-se</a></span>
        </div>
    </div>


</div>



@endsection