<form action="{{ url('pokemon') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name" required>
    <textarea name="type" placeholder="Type" required></textarea>
    <input type="text" name="power_points" placeholder="Power Points" required>
    <button type="submit">Register in Pokedex</button>
</form>