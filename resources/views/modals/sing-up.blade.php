
<div id="singUp" class="modal" onclick="hiddenModal('singUp')">
    <div>
        <div class="modal-header">
            <h3>Sing In</h3>
            <span class="close" onclick="closeModal('singUp')">&times;</span>
        </div>
        <div class="modal-content">
        <form action="{{ route('register') }}" method="post">
            @csrf
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <label for="password_confirmation">Confirm Password</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
            <button style="padding: 15px"> Sing Up </button>
        </form>
        
        </div>
    </div>
</div>