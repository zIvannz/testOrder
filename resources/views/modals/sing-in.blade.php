
<div id="singIn" class="modal" onclick="hiddenModal('singIn')">
    <div>
        <div class="modal-header">
            <h3>Sing In</h3>
            <span class="close" onclick="closeModal('singIn')">&times;</span>
        </div>
        <div class="modal-content">
        <form action="{{ route('login') }}" method="post">
            @csrf
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <button style="padding: 15px"> Sing In </button>
        </form>
        
        </div>
    </div>
</div>