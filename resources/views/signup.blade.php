<!DOCTYPE html>
<html>
  <head>
    <title>GameBomb_login</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href='{{url("css/login.css")}}' />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"
    />
    <script src='{{url("js/signup.js")}}' defer></script>
  </head>
  <body>
    <div class="container">
      <img src="img/oie_6fSIBUaT0dwd.gif" id="absolute" />
      <div class="login">
        <div class="subcontainer">
          <div class="menu">
            <a href="{{url('login')}}" class="registrati men">Accedi</a>
            <span class="accedi men">Registrati</span>
          </div>
          <div class="alert">
            @if(isset($error)) 
            @foreach ($error as $e)
            <p>{{ $e }}</p>
            @endforeach
            @endif
          </div>
          <form class="credenziali crede1" method="post">
            <input type="hidden" name="_token" value='{{ $csrf_token }}'>
            <div class="form">
              <span id="title">Nome</span>
              <input
                type="text"
                class="input"
                name="nome"
                placeholder="Inserisci qui il tuo nome"
                value="{{ $old_nome }}"
                id="nome"
              />
            </div>
            <div class="form">
              <span id="title">Cognome</span>
              <input
                type="text"
                class="input"
                name="cognome"
                placeholder="Inserisci qui il tuo cognome"
                value="{{ $old_cognome }}"
                id="cognome"
              />
            </div>
            <div class="form">
              <span id="title">E-mail</span>
              <input
                type="text"
                class="input"
                name="email"
                placeholder="Inserisci qui la tua e-mail"
                value="{{ $old_email }}"
                id="email"
              />
            </div>
            <div class="form">
              <span id="title">Password</span>
              <input
                type="password"
                class="input"
                name="password"
                placeholder="Inserisci qui la tua password"
                id="pass"
              />
            </div>
            <div class="form">
              <span id="title"> Ripeti Password</span>
              <input
                type="password"
                class="input"
                name="againpassword"
                placeholder="Inserisci qui la tua password"
                id="repass"
              />
            </div>
            <div class="button_invio">
              <input type="submit" value="Registrati" id="button_invio_inside" />
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
