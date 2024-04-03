@extends('layouts.app')

@section('title', 'Instructors')

@section('content')
<div class="container">
    <h1 class="my-4">Instructors</h1>
    <a class="btn btn-primary mb-3" href="{{-- {{ route('course.create') }} --}}">Create New</a>
    <div class="">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th></th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Hire Date</th>
                    <th>Office</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($instructors as $item)
                <tr class="select">
                    <td>
                        <a href="{{-- {{ url('/course/edit/'.$item->course_id) }} --}}">Select</a> |
                        <a href="{{-- {{route('course.detail', $item['course_id'])}} --}}">Edit</a> |
                        <a href="{{-- {{route('course.detail', $item['course_id'])}} --}}">Details</a> |
                        <a href="{{-- {{ url('/course/delete/'.$item->course_id) }} --}}">Delete</a>
                    </td>
                    <td>{{$item->last_name}}</td>
                    <td>{{$item->first_midname}}</td>
                    <td>{{$item->hiredate}}</td>
                    <td>{{$item->office->location ?? ''}}</td>    
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<style>
    .table-hover tbody .select:hover {
        background-color: #47b8e8; 
    }
</style>
@endsection
