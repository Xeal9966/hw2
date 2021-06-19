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
    <link rel="stylesheet" href='{{url("css/homepage.css")}}' />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src='{{url("js/homepage.js")}}' defer></script>

  </head>
  <body>
    <div class="menumobile hidden">
      <img src="img/icons/delete.png" id="delete">
      <a href="#novità"><span id="voce">Novità</span></a>
      <a href="#raccolte"><span id="voce">Raccolte</span></a>
      <a href="#offerta"><span id="voce">Promozioni</span></a>
      <a href="#rec"><span id="voce">Recensioni</span></a>
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
        <a href="#novità" ><span id="voce">Novità</span></a>
        <a href="#raccolte"><span id="voce">Raccolte</span></a>
        <a href="#offerta"><span id="voce">Promozioni</span></a>
        <a href="#rec"><span id="voce">Recensioni</span></a>
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
  <div class="background" id="novità">
    <div class="box">
      <div class="mainnav">
        <a data-num="1" class="dot color"></a>
        <a data-num="2" class="dot"></a>
        <a data-num="3" class="dot" ></a>
      </div>
    <div class="sfondo">
      <div class="slide" data-num="1" style="position: relative">
        <a href="game=Dead Space 2">
        <img src="img/sfondo01 1.png" class="copertina"/>
        <div class="scritta">
          <span id="titolo">DEAD SPACE</span>
          <span  id="bottone">Aggiungi</span>
        </div>
      </a>
      </div>
      <div  class="slide hidden" data-num="2" style="position: relative">
        <a href="game=Monster Hunter Rise">
        <img src="img/sfondo02 1.jpg" class="copertina" />
        <div class="scritta">
          <span id="titolo" >MONSTER HUNTER RISE</span>
          <span id="bottone">Aggiungi</span>
        </div>
      </a>
      </div>
      <div class="slide hidden" data-num="3" style="position: relative">
        <a href="game=Resident Evil Village" id="logo_addr">
        <img src="img/sfondo03 1.png" class="copertina"/>
        <div class="scritta">
          <span id="titolo">VILLAGE
            RESIDENT EVIL
          </span>
          <span  id="bottone">Aggiungi</span>
        </div>
      </a>
      </div>
    </div>
  </div>
    <img src="img/sfondo01.jpg" class="backim" data-num="1">
    <img src="img/sfondo02.jpg" class="backim hidden" data-num="2">
    <img src="img/sfondo03.jpeg" class="backim hidden" data-num="3">
    <div class="cover"></div>
  </div>
  <div class="section">
    <div class="spot">
      <div class="block">
        <img src="img/icons/5fbbf2cd7b7ed 1.jpg">
        <span>GIOCHI PROTETTI</span>
        <span>Giochi nuovi e imbustati singolarmente.
          Per veri collezionisti</span>
      </div>
      <div class="block">
        <img src="img/icons/5fbbf2db23935 1 (1).jpg">
        <span>ECO-FRIENDLY</span>
        <span id="raccolte">Usiamo plastiche riciclabili ed ecosostenibili per spedire i tuoi giochi</span>
      </div>
      <div class="block">
        <img src="img/icons/6070cf0a2a2e5 1.jpg">
        <span>SPEDIZIONE GRATUITA</span>
        <span>Con una spesa superiore a 49 EURO la spedizione è gratuita</span>
      </div>
    </div>
    <div class="giochi giochi1">
      <div id="intes">
      <span>Nuove Uscite</span>
      <a href="allgames"> <span>Mostra Tutto</span></a>
    </div>
      <div class="scroll scroll1"></div>
      <div class="mainnav2">
        <div  data-num="a1" class="dot2 color"></div>
        <div  data-num="a2" class="dot2"></div>
      </div>
    </div>
    <div class="giochi giochi2">
      <div id="intes">
        <span>Consigliati</span>
        <a href="allgames"> <span>Mostra Tutto</span></a>
      </div>
      <div class="scroll scroll2"></div>
        <div class="mainnav2">
          <div data-num="b1" class="dot2 color"></div>
          <div data-num="b2" class="dot2"></div>
      </div>
    </div>
    <div id="offerta">
      <div class="sfondo">
      <a href="game=Assassin's Creed Valhalla">
        <img src="img/image 10.png" class="copertina"/>
        <div class="scritta">
          <span id="titolo">Assasin's Creed Valhalla</span>
          <span id="titolo">-20%</span>
          <span  id="bottone">Aggiungi</span>
        </div>
      </a>
      </div>
    </div>
    <div id="rec"></div>
    <div id="recontainer">
    <div id="recensioni"> 
      <span style="margin-bottom: 50px;">Recensioni</span>
      <div class="blocchi"></div>
    </div>
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
      <img src="img/footer/Frame 33.png" id="euro">
    </div>
    <div id="credit2">
      <div id="social">
      <img src="img/footer/Vector.png" alt="">
      <img src="img/footer/Vector (1).png" alt="">
      <img src="img/footer/Vector (2).png" alt="">
    </div>
    </div>
    <div id="credit">
      <img src="img/footer/aaa.png" alt="">
      <img src="img/footer/Frame 29.png" id="pay">
    </div>
  </div>
  </div>
</div>
  </body>
</html>
