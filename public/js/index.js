// scrollreavel
const sr2 = ScrollReveal()
sr2.reveal('.scroll',{duration : 250,origin : 'right',scale : 0.5,interval: 100,});
// Retour achat
function delayBack() {
    setTimeout(function(){history.go(-1);}, 1000);
}
// Toggle
function toggle() {
    var x = document.querySelector("#toggle");
    if (x.innerHTML === "") {
      x.innerHTML = `L’ensemble de nos réalisations sont entièrement conçues à la main et personnalisables afin de s’adapter à vos préférences et à votre environnement.
      Une question, une suggestion ? N’hésitez pas à nous contacter !
      Pour ne rien rater de nos dernières nouveautés et suivre notre actualité, retrouvez-nous sur Facebook, Instagram et Pinterest !`;
    } else {
      x.innerHTML = "";
    }
  } 