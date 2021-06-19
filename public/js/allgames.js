function mostra(){
    console.log("ciao");
    document.querySelector('.account').classList.remove('hidden');;
    document.querySelector('.overlay').classList.remove('hidden');
    document.querySelector('#log').addEventListener('click',nascondi);
}

function nascondi(){
    console.log("ciao");
    document.querySelector('.account').classList.add('hidden');
    document.querySelector('.overlay').classList.add('hidden');
    document.querySelector('#log').removeEventListener('click',nascondi);
    document.querySelector('#log').addEventListener('click',mostra);
}

function login(){
    location.href = "login";
}

function mostracarrello(){
    location.href = 'cart';
}

document.querySelector('#icon_cart').addEventListener('click',login);
console.log(document.querySelector('#icon_cart'));
document.querySelector('.overlay').addEventListener('click',nascondi);

const a1=document.querySelector('.scroll1');
const a2=document.querySelector('.scroll2');
const a3=document.querySelector('.blocchi');
document.querySelector('#burger').addEventListener('click',aprimenu);
document.querySelector('#delete').addEventListener('click',chiudimenu);

function aprimenu(){
    document.querySelector(".menumobile").classList.remove('hidden');
}

function chiudimenu(){
    document.querySelector(".menumobile").classList.add('hidden');
}


for(let key of document.querySelectorAll('.menumobile a')) key.addEventListener('click',chiudimenu);


/*c'è il cookie*/
fetch("home/loaduser").then(onResponse1).then(onJSON1);

function onResponse1(response) {
    return response.json();
}
function onJSON1(json) {
console.log(json);
if(json!=0){
    user=1;
    document.querySelector('#log').classList.remove('hidden');
    document.querySelector('#nolog').classList.add('hidden');
    document.querySelector('#log').addEventListener('click',mostra);
    document.querySelector('#icon_cart').removeEventListener('click',login);
    document.querySelector('#icon_cart').addEventListener('click',mostracarrello);
    document.querySelector('#log').src=json.avatar_image;
    document.querySelector('#log1').src=json.avatar_image;
    document.querySelector('.account span').textContent=json.name;
}
else{
    document.querySelector('#nolog').classList.remove('hidden');
    console.log("noaccount");
    }
}


/*loadgame*/
const giochi=document.querySelector('.box_giochi');
fetch("allgames/loadgames").then(onResponse6).then(onJSON6);

function onResponse6(response) {
    return response.json();
}
function onJSON6(json) {
    console.log(json);
    for(let i=0;i<json.length;i++){
        const a = document.createElement('div');
        a.classList.add('card');
        const img=document.createElement('img');
        img.classList.add('pic');
        const gg = document.createElement('div');
        gg.classList.add('sistema');
        const title=document.createElement('span');
        title.classList.add('title');
        const link=document.createElement('a');
        link.href="#aggiungi";
        const acquista=document.createElement('div');
        acquista.classList.add('acquista');
        const carrello=document.createElement('img');
        carrello.classList.add('carrello');
        carrello.src="img/icons/cart-white.png";
        const prezzo=document.createElement('span');
        prezzo.classList.add('prezzo');
        prezzo.textContent="\u20AC "+json[i].prezzo;
        img.src=json[i].main_image;
        title.textContent=json[i].name;
        const divv=document.createElement('div');
        divv.classList.add('anim');
        divv.classList.add('hidden');
        const spann=document.createElement('span');
        spann.textContent="Aggiunto";
        spann.classList.add('prezzo');
        giochi.appendChild(a);
        a.appendChild(img);
        a.appendChild(gg);
        gg.appendChild(title);
        gg.appendChild(link);
        link.appendChild(acquista);
        acquista.appendChild(carrello);
        acquista.appendChild(prezzo);
        acquista.appendChild(divv);
        divv.appendChild(spann);
    }
    for(let key of document.querySelectorAll('.acquista')) key.addEventListener('click', vediDettagli); 
}



function vediDettagli(e){
    const gioco=e.currentTarget.parentNode.parentNode.querySelector('.title');
    const a=gioco.textContent;
    location.href = 'game='+a;
}

/*ricerca*/
function aggiornaelementi(event){
    var nomiprodotti=document.querySelectorAll('.title');
    console.log("qui");
    var prodotti=document.querySelectorAll('.card');
    for(let i=0;i<prodotti.length;i++){
        prodotti[i].classList.remove('hidden');
    }
    console.log("ok");
    for(let i=0;i<prodotti.length;i++){
        let a=nomiprodotti[i].textContent.toLowerCase();
        let b=event.target.value.toLowerCase();
        let count=0;
        if(a.includes(b)) count++;
        if(count==0) prodotti[i].classList.add('hidden');
        }
    console.log("fatto");
}


document.querySelector('#input').addEventListener('input',aggiornaelementi);

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
  }