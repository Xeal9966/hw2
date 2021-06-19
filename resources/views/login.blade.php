
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
    <script src='{{url("js/login.js")}}' defer></script>
  </head>
  <body>
    <div class="container">
      <img src="img/oie_6fSIBUaT0dwd.gif" id="absolute">
      <div class="login">
        <div class="subcontainer">
          <div class="menu">
            <span class="accedi men">Accedi</span>
            <a href="{{url('signup')}}" class="registrati men">Registrati</a>
          </div>
          <div class="alert">
              @if(isset($old_mail) || isset($old_pas)) 
              <p>Credenziali Non Valide</p>
              @endif
          </div>
          <form class="credenziali crede1" method="post">
            <input type="hidden" name="_token" value='{{ $csrf_token }}'>
            <div class="form">
              <span id="title">E-mail</span>
              <input
                type="text"
                class="input"
                name="email"
                placeholder="Inserisci qui la tua e-mail"
                value="{{ $old_mail }}"
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
            <div class="button_invio">
            <input type="submit" value="Accedi" id="button_invio_inside">
          </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>