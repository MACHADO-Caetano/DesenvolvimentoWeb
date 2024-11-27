@extends('layouts.base')

@section('content')
    <form class="max-w-sm mx-auto" action="{{ url('product') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-5">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
            <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>
        <div class="mb-5">
            <label for="price" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Price</label>
            <input type="numbert" name="price" id="price" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>
        <div class="mb-5">
            <label for="quantity" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Quantity</label>
            <input type="number" name="quantity" id="quantity" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
        </div>
        <div class="mb-5">
            <label for="category_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
            <select name="category_id" id="category_id" required>
                <option value="">Select a category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->description }}</option>
                @endforeach
            </select>
        </div>
        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded" type="submit">Create Product</button>
    </form>
@endsection

