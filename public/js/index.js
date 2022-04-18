// scrollreavel
const sr2 = ScrollReveal()
sr2.reveal('.scroll',{duration : 250,origin : 'right',scale : 0.5,interval: 100,});
// Retour achat
function delayBack() {
    setTimeout(function(){history.go(-1);}, 1000);
}