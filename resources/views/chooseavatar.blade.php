<!DOCTYPE html>
<html>
  <head>
    <title>GameBomb_login</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/login.css" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"
    />
    <script src='{{url("js/choose.js")}}' defer></script>
  </head>
  <body>
    <div class="container">
      <div class="login">
        <div class="subcontainer">
        <span style="font-size: 20px; padding-bottom: 10px;">Scegli un Avatar: </span>
        <div class="alert"></div>
          <form class="credenziali crede1" method="post">
          <input type="hidden" name="_token" value='{{ $csrf_token }}'>
              <div class="iconbox">
                <div id="choosen">
                  <img src="img/icons/av01.jpg" id="avatar_pic">
                    <input type="radio" name="avatar" value="img/icons/av01.jpg">
                </div>
                <div id="choosen">
                  <img src="img/icons/av02.jpg" id="avatar_pic">
                    <input type="radio" name="avatar" value="img/icons/av02.jpg">
                </div>
                <div id="choosen">
                  <img src="img/icons/av03.jpg" id="avatar_pic">
                    <input type="radio" name="avatar" value="img/icons/av03.jpg">
                </div>
                <div id="choosen">
                  <img src="img/icons/av04.jpg" id="avatar_pic">
                    <input type="radio" name="avatar" value="img/icons/av04.jpg">
                </div>
                <div id="choosen">
                  <img src="img/icons/av05.jpg" id="avatar_pic">
                    <input type="radio" name="avatar" value="img/icons/av05.jpg">
                </div>
                <div id="choosen">
                  <img src="img/icons/av06.jpg" id="avatar_pic">
                    <input type="radio" name="avatar" value="img/icons/av06.jpg">
                </div>
                <div id="choosen">
                  <img src="img/icons/av07.jpg" id="avatar_pic">
                    <input type="radio" name="avatar" value="img/icons/av07.jpg">
                </div>
                <div id="choosen">
                  <img src="img/icons/av08.jpg" id="avatar_pic">
                    <input type="radio" name="avatar" value="img/icons/av08.jpg">
                </div>
                <div id="choosen">
                  <img src="img/icons/av09.jpg" id="avatar_pic">
                    <input type="radio" name="avatar" value="img/icons/av09.jpg">
                </div>
                <div id="choosen">
                  <img src="img/icons/av10.jpg" id="avatar_pic">
                    <input type="radio" name="avatar" value="img/icons/av10.jpg">
                </div>
                <div id="choosen">
                  <img src="img/icons/av11.jpg" id="avatar_pic">
                    <input type="radio" name="avatar" value="img/icons/av11.jpg">
                </div>
                <div id="choosen">
                  <img src="img/icons/av12.jpg" id="avatar_pic">
                    <input type="radio" name="avatar" value="img/icons/av12.jpg">
                </div>
              </div>
            <div class="button_invio">
            <input type="submit" value="Salva" id="button_invio_inside">
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
