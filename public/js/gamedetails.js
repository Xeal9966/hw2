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

console.log('carica');

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

console.log('carica');

/*aggiungi*/

function onResponse4(response) {
    return response.json();
}
async function onJSON4(json) {
console.log(json);
document.querySelector('.contconf').classList.remove('hidden');
document.querySelector('.overlay').classList.remove('hidden');
await sleep(2200);
document.querySelector('.contconf').classList.add('hidden');
document.querySelector('.overlay').classList.add('hidden');
}
    function AddToCart(e){
    console.log("eccomi");
    if(user==0) {
        console.log("users"+ user);
        location.href = 'login';}
    else{
        const gioco=e.currentTarget.parentNode.querySelector('h2');
        console.log(gioco);
        const a=gioco.textContent;
        fetch("cart/add="+a).then(onResponse4).then(onJSON4);
    }
}
let user=0;
document.querySelector('.bottone').addEventListener('click',AddToCart);

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
  }

  /*video*/
const nome_gioco=document.querySelector('h2').textContent;
console.log(nome_gioco);
fetch('api/video='+ nome_gioco).then(onResponsevideo).then(onJSONvideo);

function onResponsevideo(response) {
    return response.json();
}
function onJSONvideo(json) {
console.log(json);
console.log(json.results.length);
if(json.results.length!=0 && json.results[0].hd_url!='' ){
console.log(json.results[0].hd_url);
var videoelement = document.createElement("video");
videoelement.setAttribute("id", "video1");
videoelement.setAttribute("controls", "controls");

var sourceMP4 = document.createElement("source"); 
sourceMP4.type = "video/mp4";
sourceMP4.src = json.results[0].hd_url;
const a=document.querySelector('.video');
a.appendChild(videoelement);
videoelement.appendChild(sourceMP4);
}
else document.querySelector('.noresults').classList.remove('hidden');
}


function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
  }