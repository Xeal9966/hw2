<!DOCTYPE html>
<html>
  <head>
    <title>GameBomb_homepage</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Scope+One&display=swap" rel="stylesheet">
    <link rel="stylesheet" href='{{url("css/cart.css")}}' />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src='{{url("js/cart.js")}}' defer></script>

  </head>
  <body>
    <div class="contconf hidden">
    <div class="confirmed">
        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
        <circle class="path circle" fill="none" stroke="#2BC56B" stroke-width="6" stroke-miterlimit="10" cx="65.1" cy="65.1" r="62.1"/>
        <polyline class="path check" fill="none" stroke="#2BC56B" stroke-width="6" stroke-linecap="round" stroke-miterlimit="10" points="100.2,40.2 51.5,88.8 29.8,67.5 "/>
        </svg>
      <h3>Acquisto Completato!</h3>
    </div>
    </div>
    <div class="menumobile hidden">
      <img src="img/icons/delete.png" id="delete">
      <a href="home#novità"><span id="voce">Novità</span></a>
      <a href="home#raccolte"><span id="voce">Raccolte</span></a>
      <a href="home#offerta"><span id="voce">Promozioni</span></a>
      <a href="home#rec"><span id="voce">Recensioni</span></a>
    </div>
    <div class="overlay hidden"></div>
    <div class="navbar">
      <a href="home" class="logo_addr">
        <img src="img/cooltext384479799279327.png" class="logo"
      /></a>
      <div class="mobile">
        <img src="img/icons/burger 1.svg" id="burger" />
        <img src="img/cooltext384480893474897.png" id="logomobile" />
      </div>
      <div class="menu">
        <a href="home#novità" ><span id="voce">Novità</span></a>
        <a href="home#raccolte"><span id="voce">Raccolte</span></a>
        <a href="home#offerta"><span id="voce">Promozioni</span></a>
        <a href="home#rec"><span id="voce">Recensioni</span></a>
      </div>
      <div class="container">
        <img src="img/icons/add_shopping_cart_white_24dp.svg" id="icon_cart" />
        <a href="login" id="nolog" class="hidden" style="padding: 10px">Accedi</a>
        <img src="img/icons/av01 1.png" id="log" class="hidden" style="margin-right: 10px"/>
        <div class="account hidden">
          <img src="img/icons/av04.jpg" id="log1" />
          <span style="padding-bottom: 30px">Davie504</span>
          <a href="chooseavatar"
          ><div id="ab">
            <img src="img/icons/Vector1.png" style="width: 16px; height: 16px" />
            <span class="write">Modifica Avatar</span>
          </div></a>
          <a href="logout" id="esci"><span id="ab" class="write">Esci</span></a>
        </div>
      </div>
    </div>
    <div class="full-container">
      <div class="section">
        <div class="cart_container">
          <div id="account_info"></div>
          <div id="carrellobello">
            <span id="riep" class="mostrata">Il mio Carrello</span>
            <span id="crono">Cronologia Acquisti</span>
          </div>
          <div class="riepilogo">
          <div id='pulisci'>
            <span class="svuota hidden">Svuota Carrello</span>
          </div>
          <div class="box_giochi"></div>
          <div class="tot"></div>
          </div>
          <div class="cronologia hidden"></div>
        </div>
        <div class="footer">
          <div id="credit">
            <div>
              <span>Sollami</span>
              <span>Gabriele Maria</span>
              <span>n.m. O46002082</span>
              <span>Web Programming</span>
              <span>Ing. Informatica</span>
            </div>
            <div id="cen">
              <span>Condizioni di Vendita</span>
              <span>Pagamento Sicuro</span>
              <span>Informazioni sulla Privacy</span>
            </div>
            <img src="img/footer/Frame 33.png" id="euro" />
          </div>
          <div id="credit2">
            <div id="social">
              <img src="img/footer/Vector.png" alt="" />
              <img src="img/footer/Vector (1).png" alt="" />
              <img src="img/footer/Vector (2).png" alt="" />
            </div>
          </div>
          <div id="credit">
            <img src="img/footer/aaa.png" alt="" />
            <img src="img/footer/Frame 29.png" id="pay" />
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
