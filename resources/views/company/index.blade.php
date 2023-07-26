@extends('layouts.app')

@section('content')
    <div class="mt-4">
        <a href="{{ route('companies.create') }}"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">Add
            New Company</a>
    </div>


    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($companies as $company)
                <tr>
                    <td>{{ $company->name }}</td>
                    <td>{{ $company->address }}</td>
                    <td>{{ $company->phone }}</td>
                    <td>
                        <a href="{{ route('companies.edit', $company) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('companies.destroy', $company) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
