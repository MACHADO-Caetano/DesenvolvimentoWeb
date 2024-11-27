<form action="{{ url('suppliers') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name" required>
    <input type="text" name="contact" placeholder="Contact">
    <button type="submit">Create Supplier</button>
</form>