@extends('layouts.app')

@section('content')
    <h1>Add Genre</h1>
    <form action="{{ route('genres.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <button type="submit">Save</button>
    </form>
@endsection