<form action="{{ url('products/' . $product->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" placeholder="Name" required>
    <input type="number" name="price" placeholder="Price" required>
    <input type="number" name="quantity" placeholder="Quantity" required>
    <button type="submit">Update Product</button>
</form>