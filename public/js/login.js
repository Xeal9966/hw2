const form=document.querySelector('form');
form.addEventListener('submit',check);
console.log("caricato");

function check(e){
    const email=document.querySelector('#email');
    const pass=document.querySelector('#pass');
    console.log(pass);
    const alert=document.querySelector(".alert");
    alert.innerHTML='';
    let count=0;
    for(let part of document.querySelectorAll('input')) part.classList.remove('signed');

    if(email.value==''){
        count++;
        email.classList.add('signed')
    }

    if(pass.value==''){
        count++;
        pass.classList.add('signed')
    }

    if(count!=0){
        e.preventDefault();
        const p=document.createElement('p');
        p.textContent="Hey, devi compilare tutti i campi"
        alert.appendChild(p);
    }
}