
<div id="createQuote" class="modal">
    <div>
        <div class="modal-header">
            <h3>Create Quote</h3>
            <span class="close" onclick="closeModal('createQuote')">&times;</span>
        </div>
        <div class="modal-content">
        <form action="{{ route('login') }}" method="post">
            @csrf
            <label for="title">Title</label>
            <input type="text" id="title" name="title" required>

            <label for="quote">Quote</label>
            <textarea name="quote" id="quote" cols="30" rows="10" style="width: 90%"></textarea>
            <button style="padding: 15px"> Sing In </button>
        </form>
        
        </div>
    </div>
</div>