@extends('layouts.master')
@section('title', "Update category")
@section('content')
    
<form action="/category/{{$category->id}}" method="POST">

    @csrf
    @method("PUT")

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

  <div class="mb-3">
    <label class="form-label">Category Name</label>
    <input type="text" name="name" class="form-control" value="{{old('name', $category->name)}}">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label class="form-label">Category Description</label>
    <textarea name="description" class="form-control" cols="30" rows="10">{{old('description', $category->description)}}</textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection