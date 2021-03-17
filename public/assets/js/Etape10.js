const title = document.getElementById('autotext');
const text = "Il est 23h40 le temps presse !! Tu cours au bâtiment le plus proche de la basilique, tu vas donc à la cathédrale Saint-Pierre-Saint-Paul ! Il y a une nuée de gargouilles qui gardent l’entrée. Tu cries pour que quelqu’un te mette à l’épreuve. Une grosse gargouille se met sur la tour manquante et te mets face à l’énigme suivante.";

let index = 0;

const play = () => {
    title.innerHTML = text.slice(0, index)
    index++;

    //Décommenter si je veux que le texte se réécrive à chaque fois
   // if(index > text.length) {
       // index = 0
    //}
}

let timer = setInterval(play, 30)

