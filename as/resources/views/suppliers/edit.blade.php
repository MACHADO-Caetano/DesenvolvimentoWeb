<form action="{{ url('suppliers/' . $supplier->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" placeholder="Name" required>
    <input type="text" name="contact" placeholder="Contact" required>
    <button type="submit">Update Supplier</button>
</form>