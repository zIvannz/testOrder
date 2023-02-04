
<div id="sendTelegram" class="modal">
    <div>
        <div class="modal-header">
            <h3>Create Quote</h3>
            <span class="close" onclick="closeModal('sendTelegram')">&times;</span>
        </div>
        <div class="modal-content">
            <form action="" method="post">
                @csrf
                <label for="telegram">Your number in Telegram</label>
                <input type="number" id="telegram">

                <button style="padding: 15px" type="button"> Send to telegram </button>
            </form>
        </div>
    </div>
</div>