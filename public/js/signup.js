const form=document.querySelector('form');
form.addEventListener('submit',check);
console.log("caricato");

function check(e){
    const nome=document.querySelector('#nome');
    const cognome=document.querySelector('#cognome');
    const email=document.querySelector('#email');
    const pass=document.querySelector('#pass');
    const repass=document.querySelector('#repass');
    const alert=document.querySelector(".alert");
    alert.innerHTML='';
    let count=0;
    for(let part of document.querySelectorAll('input')) part.classList.remove('signed');
    console.log(nome.value);
    if(nome.value==''){
        count++;
        nome.classList.add('signed')
    }

    if(cognome.value==''){
        count++;
        cognome.classList.add('signed')
    }

    if(email.value==''){
        count++;
        email.classList.add('signed')
    }

    if(pass.value==''){
        count++;
        pass.classList.add('signed')
    }

    if(repass.value==''){
        count++;
        repass.classList.add('signed')
    }

    if(count!=0){
        e.preventDefault();
        const p=document.createElement('p');
        p.textContent="Hey, devi compilare tutti i campi"
        alert.appendChild(p);
    }
    console.log(count);
}