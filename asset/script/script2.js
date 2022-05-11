function code(){
    //script JS ajout d'écouteur d'événement sur chaque card (élément avec la classe card)

    //récupération de la liste de cards
    const list = document.querySelectorAll('.cards');
    //création d'un tableau vide (tab)
    const tab = new Array();
    //boucle Foreach (list)
    list.forEach(element => {
        //remplissage du tableau tab avec le titre (element.firstChild.textContent) de chaque card
        tab.push(element.innerText);
        //ajout d'un écouteur d'événement 'click' sur chaque element (de list)
        element.addEventListener('click', ()=>{
            //si la valeur d'opacité de l'image est égale à 0.33
            if(element.lastChild.style.opacity == 0.33){
                /* on remplace le textContent de l'enfant (h4) par sa valeur 
                textContent par sa valeur par défaut ex : Titre 1 */
                element.firstChild.textContent = tab[element.id -1];   
                //on met la valeur d'opacité de l'enfant (img) à à 1
                element.lastChild.style.opacity= 1;
            }
            //sinon opacité est égale à 1
            else{
                //on remplace le textContent de l'enfant (h4) par test
                element.firstChild.textContent = "Title" + " " + element.id;
                //on met la valeur d'opacité de l'enfant (img) à 0.33
                element.lastChild.style.opacity= 0.33;
            }
        })
    });
}
setTimeout(code, 2000);