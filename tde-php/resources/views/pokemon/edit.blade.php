<form action="{{ url('pokemon/'.$pokemon->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" placeholder="Name" value="{{ $pokemon->name }}" required>
    <textarea name="type" placeholder="Type" required>{{ $pokemon->type }}</textarea>
    <input type="number" placeholder="Power Points" value="{{$pokemon->power_points}}">
    <button type="submit">Register in Pokedex</button>
</form>