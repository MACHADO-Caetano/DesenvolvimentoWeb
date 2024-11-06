@foreach($pokemon as $poke)
<div>
    <h3>{{ $poke->name }}</h3>
    <p>{{ $poke->type }}</p>
    <p>{{$poke->power_points}}</p>
    <a href="{{ url('pokemon/'.$poke->id.'/edit') }}">Edit</a>
    <form action="{{ url('pokemon/'.$poke->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</div>
@endforeach