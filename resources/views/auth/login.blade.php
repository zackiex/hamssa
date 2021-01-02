<!DOCTYPE html>
<html class="no-js lt-ie10" lang="fr">
<html class="no-js" lang="fr">
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">
    <link rel="shortcut icon" href="img/favicon.png">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/plugins.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" href="{{asset('css/themes.css')}}">
</head>
<body>
<img src="{{asset('img/placeholders/layout/login2_full_bg.jpg')}}" alt="Full Background"
     class="full-bg animation-pulseSlow">
<div id="login-container">
    <h1 class="h2 text-light text-center push-top-bottom animation-pullDown">
        <i class="fa fa-cube text-light-op"></i> <strong>Hamssa AppUI</strong>
    </h1>
    <div class="block animation-fadeInQuick">
        <div class="block-title">
            <h2>Veuillez vous connecter</h2>
        </div>
        <form id="form-login" action="{{route('login')}}" method="post" class="form-horizontal">
            @csrf
            <div class="form-group">
                <label for="login-email" class="col-xs-12">Email</label>
                <div class="col-xs-12">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                           value="{{ old('email') }}" placeholder="Votre email.." autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback text-danger" role="alert">
                   <strong>{{ $message }}</strong>
                       </span>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label for="login-password" class="col-xs-12">Mot de passe</label>
                <div class="col-xs-12">
                    <input type="password" class="form-control @error('password') is-invalid @enderror"
                           name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                     </span>
                    @enderror
                </div>
            </div>
            <div class="form-group form-actions">
                <div class="col-xs-8">
                    <label class="csscheckbox csscheckbox-primary">
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Se souvenir de moi ?
                    </label>
                </div>
                <div class="col-xs-4 text-right">
                    <button type="submit" class="btn btn-effect-ripple btn-sm btn-success">
                        <strong>Connexion</strong></button>
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>

