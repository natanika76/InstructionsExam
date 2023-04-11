@extends('layouts.main')
@section('content')
<div class="mb-3">
    <div>{{$instruct->id}}.{{$instruct->title}}</div>
    <div>{{$instruct->content}}</div>
</div>
<div class="mb-3">
    <a href="{{route('instruct.edit', $instruct->id)}}">Edit</a>
</div>
<div class="mb-3">
    <form action="{{route('instruct.delete', $instruct->id)}}" method="POST">
    @csrf
    @method('delete')
    <input type="submit" value="Delete" class="btn btn-danger">
    </form>
</div>
<div class="mb-3">
    <a href="{{route('instruct.index')}}">Back</a>
</div>

@endsection
