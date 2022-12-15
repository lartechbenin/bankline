let pourcentage = document.getElementById('pourcentage');

let displayNone = document.getElementById('displayNone');

let formulaire = document.getElementById('formulaire');

function increments(min, max){

    formulaire.style.display = "none";
    
    let interval = setInterval(function(){

        min++;

        pourcentage.innerHTML = min+'%';

        if(min >= max)
    {
        clearInterval(interval);
        displayNone.style.display = 'none';
        formulaire.style.display = "block";
    }

    }, 1000);

    

   
}