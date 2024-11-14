@extends('layouts.app')

@section('conteudo')
    @foreach($pokemon as $poke)
    <div class="card p-10 m-2 bg-slate-900 border-5 border-solid rounded-lg">
        <h3 class="p-2 mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $poke->name }}</h3>
        <p class="p-2 font-normal text-gray-700 dark:text-gray-400">{{ $poke->type }}</p>
        <p class="p-2 font-normal text-gray-700 dark:text-gray-400">{{$poke->power_points}}</p>
        <a class="p-2 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" href="{{ url('pokemon/'.$poke->id.'/edit') }}">Edit</a>
        <form action="{{ url('pokemon/'.$poke->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button class="mt-2 inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg--700 rounded-lg hover:bg--800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="submit">Delete</button>
        </form>
    </div>
    @endforeach
@endsection