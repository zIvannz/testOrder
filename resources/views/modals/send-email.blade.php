<div id="sendEmail" class="modal">
    <div>
        <div class="modal-header">
            <h3>Send to Email</h3>
            <span class="close" onclick="closeModal('sendEmail')">&times;</span>
        </div>
        <div class="modal-content">
            <form id="sendEmailForm" action="{{ route('send.email') }}" method="post">
                @csrf
                <input type="hidden" id="sendEmailPostId" name="post_id">
                <p id="errorsEmail"></p>
                <label for="sendEmailValue">Enter Email</label>
                <input type="email" id="sendEmailValue" name="email" required>

                <button style="padding: 15px"> Send to Email </button>
            </form>
        </div>
    </div>
</div>