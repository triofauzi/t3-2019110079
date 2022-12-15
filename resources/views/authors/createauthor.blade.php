@extends('layouts.master')
@section('title', 'Add New Author')
@section('content')
    <h2>Add New Movie</h2>
    <form action="{{ route('authors.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-3">
                <label for="id">ID</label>
                <input type="text" class="form-control @error('id') is-invalid @enderror" name="id" id="id"
                    value="{{ old('id') }}">
                @error('id')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="col-md-6 mb-3">
                <label for="penulis">penulis</label>
                <input type="text" class="form-control @error('penulis') is-invalid @enderror" name="penulis" id="penulis"
                    value="{{ old('penulis') }}">
                @error('penulis')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <button class="btn btn-primary btn-lg btn-block" type="submit">Add</button>
    </form>
@endsection
