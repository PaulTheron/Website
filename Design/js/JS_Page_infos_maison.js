// On récupère le modal
var modal = document.getElementById('myModal');
// On récupère le span qui permet de fermer le modal
var span = document.getElementsByClassName("close")[0];
// fonction appelée lors du clic sur le bouton pour fermer le modal
span.onclick = function() {
	modal.style.display = "none";
}
// Foncion qui ferme aussi le modal quand l'utilisateur clique n'importe où ailleurs
window.onclick = function(event) {
    if (event.target == modal) {
		modal.style.display = "none";
		document.getElementById("temp").style.display = "none";
		document.getElementById("lum").style.display = "none";
		document.getElementById("hum").style.display = "none";
		document.getElementById("tv").style.display = "none";
    }
}


// on récupère la section contenant les éléments liés au salon
const salon = document.getElementById("salon");
// on crée une fonction appelée lors du clique
salon.addEventListener("click", clickOnLivingR);
// on récupère tous les <li> du salon
var r1 = salon.getElementsByTagName("span");

// on décrit cette fonction
function clickOnLivingR(event) {
	console.log("clique sur le salon");
	console.log("Type de l'event");
	console.log(event.type);
	console.log("Cible de l'event");
	console.log(event.target);

	// Quand l'utilisateur clique sur la section, le modal apparaît 
	modal.style.display = "block";
	document.getElementById("modalTitle").innerHTML = "Salon";

	// les icônes apparaissent également
	document.getElementById("temp").style.display = "flex";
	document.getElementById("lum").style.display = "flex";
	document.getElementById("hum").style.display = "flex";
	document.getElementById("tv").style.display = "flex";

	document.getElementById("tempVal").innerHTML = r1[0].innerHTML;
	document.getElementById("lumVal").innerHTML = r1[1].innerHTML;
	document.getElementById("humVal").innerHTML = r1[2].innerHTML;
	document.getElementById("tvVal").innerHTML = r1[3].innerHTML;
}


// idem pour la salle à manger
const salleAManger = document.getElementById("salle_a_manger");
salleAManger.addEventListener("click", clickOnDiningR);
var r2 = salleAManger.getElementsByTagName("span");

function clickOnDiningR(event) {
	console.log("clique sur la salle a manger");
	console.log("Type de l'event");
	console.log(event.type);
	console.log("Cible de l'event");
	console.log(event.target);

	// Quand l'utilisateur clique sur la section, le modal apparaît
	modal.style.display = "block";
	document.getElementById("modalTitle").innerHTML = "Salle à manger";

	// les icônes apparaissent également
	document.getElementById("temp").style.display = "flex";
	document.getElementById("lum").style.display = "flex";
	document.getElementById("hum").style.display = "flex";

	document.getElementById("tempVal").innerHTML = r2[0].innerHTML;
	document.getElementById("lumVal").innerHTML = r2[1].innerHTML;
	document.getElementById("humVal").innerHTML = r2[2].innerHTML;
}


// et pour la chambre
const chambre = document.getElementById("chambre");
chambre.addEventListener("click", clickOnBedR);
var r3 = chambre.getElementsByTagName("span");

function clickOnBedR(event) {
	console.log("clique sur la chambre");
	console.log("Type de l'event");
	console.log(event.type);
	console.log("Cible de l'event");
	console.log(event.target);

	// Quand l'utilisateur clique sur la section, le modal apparaît
	modal.style.display = "block";
	document.getElementById("modalTitle").innerHTML = "Chambre";

	// les icônes apparaissent également
	document.getElementById("temp").style.display = "flex";
	document.getElementById("lum").style.display = "flex";
	document.getElementById("hum").style.display = "flex";

	document.getElementById("tempVal").innerHTML = r3[0].innerHTML;
	document.getElementById("lumVal").innerHTML = r3[1].innerHTML;
	document.getElementById("humVal").innerHTML = r3[2].innerHTML;
}

// et pour la salle de bain
const salleDeBain = document.getElementById("salle_de_bain");
salleDeBain.addEventListener("click", clickOnBathR);
var r4 = salleDeBain.getElementsByTagName("span");

function clickOnBathR(event) {
	console.log("clique sur la salle de bain");
	console.log("Type de l'event");
	console.log(event.type);
	console.log("Cible de l'event");
	console.log(event.target);

	// Quand l'utilisateur clique sur la section, le modal apparaît
	modal.style.display = "block";
	document.getElementsByTagName("modalTitle").innerHTML = "Salle de bain";

	// les icônes apparaissent également
	document.getElementById("temp").style.display = "flex";
	document.getElementById("lum").style.display = "flex";
	document.getElementById("hum").style.display = "flex";

	document.getElementById("tempVal").innerHTML = r4[0].innerHTML;
	document.getElementById("lumVal").innerHTML = r4[1].innerHTML;
	document.getElementById("humVal").innerHTML = r4[2].innerHTML;
}