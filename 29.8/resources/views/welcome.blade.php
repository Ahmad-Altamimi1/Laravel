<form method="POST" action="{{ route('store-data') }}">
    @csrf <!-- CSRF token -->
    <input type="text" name="email" placeholder="Enter your email">
    <button type="submit">Submit</button>
</form>