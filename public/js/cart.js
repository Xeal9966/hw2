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
    const primo=document.querySelector('#account_info');
    const im=document.createElement('img');
im.src=json.avatar_image;
const nome=document.createElement('h3');
nome.textContent=json.name;
primo.appendChild(im);
primo.appendChild(nome);
}
else{
    document.querySelector('#nolog').classList.remove('hidden');
    console.log("noaccount");
    }
}


/*loadgame*/
document.querySelector('.svuota').addEventListener("click",svuotaCarrello);
const giochi=document.querySelector('.box_giochi');
fetch("cart/loadcart").then(onResponse6).then(onJSON6);
fetch('cart/loadhistory').then(onResponsehistory).then(onJSONhistory);

function onResponse8(response) {
    return response.json();
}

function onJSON8(json) {
console.log(json);
const totale=document.querySelector('.tot');
document.querySelector('.svuota').classList.remove('hidden');
const acquistalo=document.createElement('span');
acquistalo.classList.add('acquistaloo');
acquistalo.textContent='Acquista';
const spa=document.createElement('span');
spa.classList.add('tota');
spa.textContent="Totale: "+"\u20AC "+json['0'].total;
totale.appendChild(spa);
totale.appendChild(acquistalo);

document.querySelector('.acquistaloo').addEventListener('click',Acquista);
}


function onResponse6(response) {
    return response.json();
}
function onJSON6(json) {
    console.log(json);
    if(json.length==0){
        document.querySelector('.svuota').classList.add('hidden');
        const c = document.createElement('div');
        c.classList.add('nobody');
        const tit=document.createElement('span');
        tit.textContent="Non ci sono articoli nel carrello";
        const link=document.createElement('a');
        link.href="allgames";
        link.textContent="Vedi Tutti i Giochi";
        giochi.appendChild(c);
        c.appendChild(tit);
        c.appendChild(link);
    }
    else{
    for(let i=0;i<json.length;i++){
        const a = document.createElement('div');
        a.classList.add('card');
        const img=document.createElement('img');
        img.classList.add('pic');
        const gg = document.createElement('div');
        gg.classList.add('sistema');
        const title=document.createElement('span');
        title.classList.add('title');
        const prezzo=document.createElement('span');
        prezzo.textContent="\u20AC "+json[i].prezzo;
        img.src=json[i].main_image;
        title.textContent=json[i].name;
        const second = document.createElement('div');
        const add = document.createElement('div');
        add.classList.add('modifica');
        const meno=document.createElement('img');
        meno.src="img/icons/meno.png";
        meno.classList.add('meno');
        const n=document.createElement('span');
        n.textContent=json[i].n;
        const piu=document.createElement('img');
        piu.src="img/icons/piu.png";
        piu.classList.add('piu');

        giochi.appendChild(a);
        a.appendChild(img);
        a.appendChild(gg);
        gg.appendChild(title);
        gg.appendChild(second);
        second.appendChild(prezzo);
        second.appendChild(add);
        add.appendChild(meno);
        add.appendChild(n);
        add.appendChild(piu);
    }

    for(let key of document.querySelectorAll('.meno')) key.addEventListener('click', RemoveToCart); 
    for(let key of document.querySelectorAll('.piu')) key.addEventListener('click', AddToCart); 
    fetch("cart/loadtot").then(onResponse8).then(onJSON8);
    }
}

function onResponse4(response) {
    return response.json();
}

async function onJSON4(json) {
console.log(json);
document.querySelector('.box_giochi').innerHTML='';
const totale=document.querySelector('.tot');
totale.innerHTML='';
fetch("cart/loadcart").then(onResponse6).then(onJSON6);
}

function svuotaCarrello(){
    fetch("cart/removeall").then(onResponse4).then(onJSON4);
}

function RemoveToCart(e){
        const gioco=e.currentTarget.parentNode.parentNode.parentNode.querySelector('.title');
        const a=gioco.textContent;
        fetch("cart/remove="+a).then(onResponse4).then(onJSON4);
}

function AddToCart(e){
        const gioco=e.currentTarget.parentNode.parentNode.parentNode.querySelector('.title');
        const a=gioco.textContent;
        fetch("cart/add="+a).then(onResponse4).then(onJSON4);
}

function vediDettagli(e){
    const gioco=e.currentTarget.parentNode.querySelector('.title');
    const a=gioco.textContent;
    location.href = 'gamedetails.php?titolo='+a;
}

function Mostracronologia(e){
    for(let key of document.querySelectorAll('#carrellobello span'))  key.classList.remove('mostrata');
    e.currentTarget.classList.add('mostrata');
    document.querySelector('.riepilogo').classList.add('hidden');
    document.querySelector('.cronologia').classList.remove('hidden');
}

function Mostrariepilogo(e){
    for(let key of document.querySelectorAll('#carrellobello span')) key.classList.remove('mostrata');
    e.currentTarget.classList.add('mostrata');
    document.querySelector('.cronologia').classList.add('hidden');
    document.querySelector('.riepilogo').classList.remove('hidden');
}

document.querySelector('#riep').addEventListener('click',Mostrariepilogo);
document.querySelector('#crono').addEventListener('click',Mostracronologia);

/*History*/
function onResponsehistory(response) {
    return response.json();
}
function onJSONhistory(json) {
    console.log(json);
    const giochi=document.querySelector('.cronologia');
    if(json.length==0){
        const c = document.createElement('div');
        c.classList.add('nobody');
        const tit=document.createElement('span');
        tit.textContent="Non hai acquistato nessun prodotto";
        giochi.appendChild(c);
        c.appendChild(tit);
    }
    else{
    for(let i=0;i<json.length;i++){
        const a = document.createElement('div');
        a.classList.add('segment');
        const title=document.createElement('span');
        const prezzo=document.createElement('span');
        prezzo.textContent="\u20AC "+json[i].prezzo;
        title.textContent=json[i].name;
        const data=document.createElement('span');
        data.textContent=json[i].created_at;

        giochi.appendChild(a);
        a.appendChild(title);
        a.appendChild(prezzo);
        a.appendChild(data);
    }
    }
}

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
  }


function Acquista(){
    document.querySelector('.overlay').classList.remove('hidden');
    document.querySelector('.contconf').classList.remove('hidden');
    fetch("cart/acquista").then(onResponseAcquista).then(onJSONAcquista);
}

function onResponseAcquista(response) {
    return response.json();
}
async function onJSONAcquista(json) {
    console.log(json);

    document.querySelector('.cronologia').innerHTML='';
    document.querySelector('.box_giochi').innerHTML='';
    const totale=document.querySelector('.tot');
    totale.innerHTML='';
    fetch("cart/loadcart").then(onResponse6).then(onJSON6);
    fetch('cart/loadhistory').then(onResponsehistory).then(onJSONhistory);
    await sleep(1700);
    document.querySelector('.contconf').classList.add('hidden');
    document.querySelector('.overlay').classList.add('hidden');
}