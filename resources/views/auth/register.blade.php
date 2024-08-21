@extends('welcome')
@section('title', 'Register')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <h1 class="text-center text-muted mb-3" mt-3>Register</h1>
            <p class="text-center text-muted mb-3">create an accounnt here</p>
            <form method="POST" action="{{ route('register') }}" class="row g-3">
                @csrf

                <div class="col-md-6">
                    <label for="Nom" class="form-label">Nom</label>
                    <input type="text" name="Nom" id="Nom" class="form-control" value="{{ old('Nom') }}" required autocomplete="Nom" autofocus>
                    <small class="text-danger fw-bold" id="error-register-Nom"></small>
                </div>

                <div class="col-md-6">
                    <label for="Prenom" class="form-label">Prenom</label>
                    <input type="text" name="Prenom" id="Prenom" class="form-control" value="{{ old('Prenom') }}" required autocomplete="Nom" autofocus>
                    <small class="text-danger fw-bold" id="error-register-Prenom"></small>
                </div>

                <div class="col-md-12">
                    <label for="email" class="form-label">email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <small class="text-danger fw-bold" id="error-register-email"></small>
                </div>

                <div class="col-md-6">
                    <label for="password" class="form-label">password</label>
                    <input type="password" name="password" id="password" class="form-control" value="{{ old('password') }}" required autocomplete="password" autofocus>
                    <small class="text-danger fw-bold" id="error-register-password"></small>
                </div>

                <div class="col-md-6">
                    <label for="password-confirmation" class="form-label">password-confirmation</label>
                    <input type="password" name="password-confirmation" id="password-confirmation" class="form-control" value="{{ old('password-confirmation') }}" required autocomplete="password-confirmation" autofocus>
                    <small class="text-danger fw-bold" id="error-register-password-confirmation"></small>
                </div>
                <div class="col-md-6">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="agree terms">
                    <label class="form-check-label" for="agree terms">
                      Agree terms
                    </label><br>
                    <small class="text-danger fw-bold" id="agree terms"></small>
                     </div>
                </div>

                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit" id="register user">Register</button>
                  </div>
                  <p class="text-center text-muted mt-5">Already have account?<a href="{{ route('login') }}">Login</a></p>
            </form>
        </div>
    </div>
</div>


@endsection
