<form action="{{ url('pokemon/'.$pokemon->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" placeholder="Name" value="{{ $pokemon->name }}" required>
    <input type="text" name="type" placeholder="Type" value="{{$pokemon->type}}" required>
    <input type="number" placeholder="Strenght" value="{{$pokemon->power_points}}">
    <button type="submit">Register in Pokedex</button>
</form>