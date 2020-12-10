<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layouts.head')

    <style>
        .title {
            text-transform: uppercase;
            font-weight:700;
            color: #333d5d;
            font-size: 25px;
            margin-bottom: 15px;
            margin-top: 0;
        }
        .subtitle {
            text-transform: uppercase;
            font-weight:700;
            color: #b9bbc6;
            font-size: 12px;
            letter-spacing: 0;
            margin-bottom: 0;
        }
        .card {
            margin-top: 250px;
        }


        h1, p {
            margin-left:20px;
        }

        .header {
            margin-top: 20px;
        }


        label {
            color: #9fa6b9;
            text-transform: uppercase;
            font-weight: 700;
            display: inline-block;
            margin-bottom: .5rem;
        }
        .btn {
            width: 402px;
            height: 50px;
        }
    </style>
<body>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card">
                    <div class="card-block">
                        <div class="header">
                            <h1 class="title">{{ __('Login') }}</h1>
                            <p class="subtitle">Entre em sua conta</p>
                        </div>
                    </div>
                    <hr>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <label for="email" class="col-md-4 col-form-label">{{ __('E-Mail') }}</label>


                                <div class="input-group input-group--custom">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-md-4 col-form-label">{{ __('Senha') }}</label>


                                <div class="input-group input-group--custom">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Senha">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>


                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Esqueci a senha') }}
                                        </a>
                                    @endif
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
