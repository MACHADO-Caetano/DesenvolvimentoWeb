<form action="{{ url('categories/' . $category->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="description" placeholder="Description" required>
    <button type="submit">Update Product</button>
</form>