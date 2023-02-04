
<div id="updateQuote" class="modal">
    <div>
        <div class="modal-header">
            <h3>Update Quote</h3>
            <span class="close" onclick="closeModal('updateQuote')">&times;</span>
        </div>
        <div class="modal-content">
        <form action="{{ route('post.update') }}" method="post">
            @csrf
            <input type="hidden" id="post_id" name="post_id">
            <label for="title_update">Title</label>
            <input type="text" id="title_update" name="title" required>

            <label for="update_quote">Quote</label>
            <textarea name="quote" id="update_quote" cols="30" rows="10" style="width: 90%"></textarea>
            <button style="padding: 15px"> Update </button>
        </form>
        
        </div>
    </div>
</div>