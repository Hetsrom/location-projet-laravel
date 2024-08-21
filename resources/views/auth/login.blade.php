@extends('welcome')
@section('title', 'Login')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <h1 class="text-center text-muted mb-3" mt-3>please sign in</h1>
                <p class="text-center text-muted mb-3">vos services</p>
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    @error('email')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror

                    @error('password')
                        <div class="alert alert-danger" role="alert">
                            {{ $message }}
                        </div>
                    @enderror

                    <label for="email">email</label>
                    <input type="email" name="email" id="email" class="form-control mb-3 @error('email') is-invalid @enderror " value="{{ old('email') }}" required autocomplete="email" autofocus>
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control mb-3  @error('password') is-invalid @enderror" required autocomplete="current-password">
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">remember me</label>
                              </div>

                        </div>
                        <div class="col-md-6 text-end">
                            <a href="#">forgot pasword?</a>
                        </div>
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">sign in</button>
                    </div>
                    <p class="text-center text-muted mt-5">pas encore enrgistré?<a href="{{ route('register') }}">créer un compte</a></p>

                </form>
            </div>
        </div>
    </div>
@endsection
