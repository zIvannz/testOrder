function openModal(modalId) {
    document.getElementById(modalId).style.display = "block";
}

function openShareModal(modalId, id) {
    document.getElementById(modalId).style.display = "block";
    document.getElementById(modalId + 'PostId').value = id
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
    }else if(event.target.id == "sendTelegram"){
        document.getElementById('sendTelegram').style.display = "none";
    }else if(event.target.id == "sendEmail"){
        document.getElementById('sendEmail').style.display = "none";
    }else if(event.target.id == "sendViber"){
        document.getElementById('sendViber').style.display = "none";
    }
}

function updateModal(id) {
    document.getElementById('post_id').value = id
    document.getElementById('title_update').value = document.getElementById('title-' + id).textContent;
    document.getElementById('update_quote').value = document.getElementById('quote-' + id).textContent;
}


$("#sendTelegramForm").submit(function(e) {

    e.preventDefault();

    alert('Quote will be sent to Telegram!')

    var form = $(this);
    var actionUrl = form.attr('action');
    document.getElementById('errorsTelegram').innerHTML = "";
    var modal = document.getElementById('sendTelegram');
    modal.style.display = "none";
    
    $.ajax({
        type: "POST",
        url: actionUrl,
        data: form.serialize(),
        success: function(data)
        {
            
          alert("Quote has been sent to Telegram"); 
        },
        error: function (errors) {
             modal.style.display = "block";
            document.getElementById('errorsTelegram').innerHTML = errors.responseJSON.errors;
        }
    });
    
});

$("#sendViberForm").submit(function(e) {

    e.preventDefault();

    alert('Quote will be sent to Viber!')

    var form = $(this);
    var actionUrl = form.attr('action');
    document.getElementById('errorsViber').innerHTML = "";
    var modal = document.getElementById('sendViber');
    modal.style.display = "none";
    
    $.ajax({
        type: "POST",
        url: actionUrl,
        data: form.serialize(), 
        success: function(data)
        {
          alert("Quote has been sent to viber"); 
        },
        error: function (errors) {
            modal.style.display = "block";
            document.getElementById('errorsViber').innerHTML = errors.responseJSON.errors.number[0];
        }
    });
    
});

$("#sendEmailForm").submit(function(e) {

    e.preventDefault();

    alert('Quote will be sent to Email!')

    var form = $(this);
    var actionUrl = form.attr('action');
    document.getElementById('errorsEmail').innerHTML = "";
    var modal = document.getElementById('sendEmail');
    modal.style.display = "none";
    $.ajax({
        type: "POST",
        url: actionUrl,
        data: form.serialize(), 
        success: function(data)
        {
            
            alert("Quote has been sent to email"); 
        },
        error: function (errors) {
            modal.style.display = "block";
            document.getElementById('errorsEmail').innerHTML = errors.responseJSON.errors.email[0];
        }
    });
    
});