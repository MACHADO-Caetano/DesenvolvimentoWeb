@foreach($suppliers as $supplier)
    <div>
        <h3>{{ $supplier->name }}</h3>
        <p>{{ $supplier->contact }}</p>
        <a href="{{ url('suppliers/'.$supplier->id.'/edit') }}">Edit</a>
        <form action="{{ url('suppliers/'.$supplier->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach