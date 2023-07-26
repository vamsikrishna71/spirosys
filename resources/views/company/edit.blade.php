@extends('layouts.app')

@section('content')
    <h1>Edit Company</h1>

    <form action="{{ route('companies.update', $company) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $company->name }}">
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" id="address" class="form-control" value="{{ $company->address }}">
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" id="phone" class="form-control" value="{{ $company->phone }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
