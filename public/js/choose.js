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

    for(let key of document.querySelectorAll('input')){
        if(key.checked==true)
        count++;
    }

    if(count==0){
        e.preventDefault();
        const p=document.createElement('p');
        p.textContent="Seleziona un Avatar"
        alert.appendChild(p);
    }
}