function openModal(modalId) {
    document.getElementById(modalId).style.display = "block";
}

function closeModal(modalId) {
    document.getElementById(modalId).style.display = "none";
}

window.onclick = function(event) {
    if (event.target.id == "singIn") {
        document.getElementById('singIn').style.display = "none";
    }else if(event.target.id == "singUp"){
        document.getElementById('singUp').style.display = "none";
    }else if(event.target.id == "createQuote"){
        document.getElementById('createQuote').style.display = "none";
    }
}