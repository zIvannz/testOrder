
<div id="sendTelegram" class="modal">
    <div>
        <div class="modal-header">
            <h3>Send to Telegram</h3>
            <span class="close" onclick="closeModal('sendTelegram')">&times;</span>
        </div>
        <div class="modal-content">
            
            <form id="sendTelegramForm" action="{{ route('send.telegram')}}" method="post">
                @csrf
                <input type="hidden" id="sendTelegramPostId" name="post_id">
                <p id="errorsTelegram"></p>
                <label for="sendTelegramValue">Your number in Telegram</label>
                <input type="tell" id="sendTelegramValue" name="number" required>

                <button style="padding: 15px" type="submit" > Send to telegram </button>
            </form>
        </div>
    </div>
</div>