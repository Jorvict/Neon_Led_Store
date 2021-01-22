var modal = document.getElementById("modal-metodo");

var modal_card = document.getElementById("modal-card");

var modal_yape = document.getElementById("modal-yape");


var btn = document.getElementById("button_orden");
var card = document.getElementById("card");
var yape = document.getElementById("yape");
var span = document.getElementsByClassName("close")[0];
var back_card = document.getElementById("back_card");
var back_yape = document.getElementById("back_yape");
btn.onclick = function () {
    modal.style.display = "flex";
}
span.onclick = function () {
    modal.style.display = "none";
}
window.onclick = function (event) {
    if ((event.target == modal) || (event.target == modal_card) || (event.target == modal_yape)) {
        modal.style.display = "none";
        modal_card.style.display = "none";
        modal_yape.style.display = "none";
    }
}

back_card.onclick = function () {
    modal.style.display = "flex";
    modal_card.style.display = "none";
}

back_yape.onclick = function () {
    modal.style.display = "flex";
    modal_yape.style.display = "none";
}

card.onclick = function () {
    modal.style.display = "none";
    modal_card.style.display = "flex";
}

yape.onclick = function () {
    modal.style.display = "none";
    modal_yape.style.display = "flex";
}