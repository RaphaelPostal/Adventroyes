const title = document.getElementById('autotext');
const text = "Il est à présent 22h30, le temps presse ! Il est l’heure de se rendre au stade de l’Aube !! Les gargouilles se sont toutes retrouvées au milieu du stade. On ne voit même plus la pelouse. Une gargouille s’envole et vient vers toi !";

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

