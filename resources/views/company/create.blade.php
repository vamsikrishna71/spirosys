@extends('layouts.app')

@section('content')
    <a href="{{ route('companies.index') }}" class="btn btn-dark">Back</a>
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="max-w-md w-full">
            <form action="{{ route('companies.store') }}" method="POST"
                class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf
                <div class="form-group">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        type="text" name="name" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="address">Address</label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        type="text" name="address" id="address" class="form-control">
                </div>
                <div class="form-group">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="phone">Phone</label>
                    <input
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        type="text" name="phone" id="phone" class="form-control">
                </div>
                <button type="submit"
                    class="bg-blue-500 mt-4 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Add</button>
            </form>
        </div>
    </div>
@endsection
