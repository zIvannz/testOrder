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
    }else if(event.target.id == "updateQuote"){
        document.getElementById('updateQuote').style.display = "none";
    }
}

function updateModal(id) {
    document.getElementById('post_id').value = id
    document.getElementById('title_update').value = document.getElementById('title-' + id).textContent;
    document.getElementById('update_quote').value = document.getElementById('quote-' + id).textContent;
}