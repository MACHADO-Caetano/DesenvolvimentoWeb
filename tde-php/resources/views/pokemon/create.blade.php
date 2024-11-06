<form action="{{ url('pokemon') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name" required>
    <input type="text" name="type" placeholder="Type" required>
    <input type="text" name="Strenght" placeholder="Power Points" required>
    <button type="submit">Register in Pokedex</button>
</form>