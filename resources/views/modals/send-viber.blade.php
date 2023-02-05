<div id="sendViber" class="modal">
    <div>
        <div class="modal-header">
            <h3>Send to Viber</h3>
            <span class="close" onclick="closeModal('sendViber')">&times;</span>
        </div>
        <div class="modal-content">
            <form id="sendViberForm" action="{{ route('send.viber') }}" method="post">
                @csrf
                <input type="hidden" id="sendViberPostId" name="post_id">
                <p id="errorsViber"></p>
                <label for="sendViberValue">Your number in Viber</label>
                <input type="tell" id="sendViberValue" name="number" required>

                <button style="padding: 15px" type="submit"> Send to Viber </button>
            </form>
        </div>
    </div>
</div>