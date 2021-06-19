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

function changeslide(e){
    const elem = e.currentTarget;
    const slide = document.querySelector('.slide');
    if (elem.dataset.num !== currentNumber) {
        for (let key of document.querySelectorAll('.dot')) key.classList.remove('color');
        for (let key of document.querySelectorAll('.dot'))
        if (key.dataset.num == elem.dataset.num) key.classList.add('color');
        for (let key of document.querySelectorAll('.slide')) key.classList.add('hidden');
        for (let key of document.querySelectorAll('.slide'))
            if (key.dataset.num == elem.dataset.num)  key.classList.remove('hidden');
        for (let key of document.querySelectorAll('.backim')) key.classList.add('hidden');
        for (let key of document.querySelectorAll('.backim'))
            if (key.dataset.num == elem.dataset.num) key.classList.remove('hidden');
        currentNumber = elem.dataset.num;
    }
}

function change() {
    if (currentNumber >= document.querySelectorAll('.slide').length) currentNumber = 0;
    currentNumber++;
    for (let key of document.querySelectorAll('.dot')) key.classList.remove('color');
    for (let key of document.querySelectorAll('.dot'))
    if (key.dataset.num == currentNumber) key.classList.add('color');
    for (let key of document.querySelectorAll('.slide')) key.classList.add('hidden');
    for (let key of document.querySelectorAll('.slide'))
        if (key.dataset.num == currentNumber) key.classList.remove('hidden');

    for (let key of document.querySelectorAll('.backim')) key.classList.add('hidden');
    for (let key of document.querySelectorAll('.backim'))
        if (key.dataset.num == currentNumber) key.classList.remove('hidden');
}

setInterval(function() {
    change();
}, 5000);


function login(){
    location.href = 'login';
}

function mostracarrello(){
    location.href = 'cart';
}

let currentNumber=1;
document.querySelector('#icon_cart').addEventListener('click',login);
document.querySelector('.overlay').addEventListener('click',nascondi);

const dettagli=document.querySelectorAll('.dot');
for(dettaglio of dettagli){
dettaglio.addEventListener('click', changeslide);
}

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


function scrollleft(e){
    const target=e.currentTarget;
    if(!target.classList.contains('color')){
        for (let key of target.closest('.mainnav2').querySelectorAll('.dot2')) key.classList.remove('color');
        if(target.dataset.num=="a1" || target.dataset.num=="b1" ) target.parentNode.parentNode.querySelector('.scroll').scrollLeft=0;
        else{
        const position=document.querySelector('#'+target.dataset.num).offsetLeft;
        target.parentNode.parentNode.querySelector('.scroll').scrollLeft=position;
        }
        for (let key of target.closest('.mainnav2').querySelectorAll('.dot2')) if(key==e.currentTarget) key.classList.add('color');
    }

}

for(let key of document.querySelectorAll('.giochi1 .mainnav2 div')) key.addEventListener('click',scrollleft);
for(let key of document.querySelectorAll('.giochi2 .mainnav2 div')) key.addEventListener('click',scrollleft);



/*fetch*/

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

/*load recensioni*/
function onResponse2(response) {
    return response.json();
}
function onJSON2(json) {
    console.log(json);
    for(let i=15;i<19;i++){
        const a = document.createElement('div');
        a.classList.add('recbox');
        const title1=document.createElement('span');
        title1.textContent=json[i].name;
        const b = document.createElement('div');
        const title2=document.createElement('span');
        title2.classList.add('voto');
        title2.textContent=json[i].voto+"/10";
        const title3=document.createElement('span');
        title3.textContent="by "+json[i].nome;
    
        a3.appendChild(a);
        a.appendChild(title1);
        a.appendChild(b);
        b.appendChild(title2);
        b.appendChild(title3);
    }
}
fetch("home/loadrecs").then(onResponse2).then(onJSON2);

/*load giochi*/

function onResponse3(response) {
    return response.json();
}
function onJSON3(json) {
    console.log(json);

    for(let i=0;i<6;i++){
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
        if(i==0) a.setAttribute("id","a1");
        if(i==5) a.setAttribute("id","a2");
        a1.appendChild(a);
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

    for(let i=8;i<14;i++){
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
        if(i==8) a.setAttribute("id","b1");
        if(i==13) a.setAttribute("id","b2");
        a2.appendChild(a);
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

fetch("home/loadgames").then(onResponse3).then(onJSON3);

/*cambia pagina*/

console.log("cai");
function vediDettagli(e){
        const gioco=e.currentTarget.parentNode.parentNode.querySelector('.title');
        const a=gioco.textContent;
        location.href = 'game='+a;
}

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
  }