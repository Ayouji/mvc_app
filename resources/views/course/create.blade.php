@extends('layouts.app')

@section('title', 'create')

@section('content')
<div class="container">
    <h1 class="my-4">Create</h1>
    <form method="POST" action="{{route('course.store')}}">
        @csrf
        <div class="form-group">
            <label for="inputNom">LastName :</label>
            <input type="text" class="form-control" name="last_name" >
            @error('title')
                <div class="form-error text-danger text-danger">
                    {{$message}}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="inputPrenom">FirstMidname :</label>
            <input type="text" class="form-control" name="first_midname">
            @error('credit')
                <div class="form-error text-danger">
                    {{$message}}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
    <a href="{{route('course.index')}}"> Back to List</a>
</div>
@endsection
