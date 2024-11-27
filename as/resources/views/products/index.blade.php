@extends('layouts.base')

@section('content')

@can('create', App\Models\Product::class)
<div class="flex items-start">
    <div class="py-8 mb-5 p-4">
        <a href="{{ url('products/create' )}}" class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 shadow-lg shadow-green-500/50 dark:shadow-lg dark:shadow-green-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Add Product</a>
    </div>
</div>
@endcan



<div class="flex flex-wrap justify-center mt-10">
    @foreach($products as $product)
    <div class="p-4 max-w-sm">
        <div class="flex rounded-lg h-full dark:bg-gray-800 bg-teal-400 p-8 flex-col">
            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $product->name }}</h5>
            <span class="text-sm text-gray-500 dark:text-gray-400">{{ $product->price }}</span>
            <span class="text-sm text-gray-500 dark:text-gray-400">{{ $product->quantity }}</span>
            @if(isset($product->category))
            <span class="text-sm text-gray-500 dark:text-gray-400">{{ $product->category->description }}</span>
            @else
            <span class="text-sm text-gray-500 dark:text-gray-400">No category</span>
            @endif
            <div class="flex mt-4 md:mt-6">
                <a href="{{ url('products/'.$product->id.'/edit') }}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Edit</a>
                <form action="{{ url('products/'.$product->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="py-2 px-4 ms-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Delete</button>
            </div>
        </div>
    </div>
    @endforeach

</div>

@endsection