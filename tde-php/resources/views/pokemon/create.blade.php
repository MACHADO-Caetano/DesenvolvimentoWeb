@extends('layouts.app')

@section('conteudo')
    <div class="mt-5 p-5 ">
        <form action="{{ url('pokemon') }}" method="POST" class=""> 
            @csrf
            <input type="text" name="name" placeholder="Name" required><br>
            <input type="text" name="type" placeholder="Type" required><br>
            <input type="number" name="power_points" placeholder="Strenght" required><br>
            <button type="submit">Register in Pokedex</button>
        </form>
    </div>
@endsection