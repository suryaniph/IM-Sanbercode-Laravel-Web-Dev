@extends('layouts.master')
@section('title', "Detail category")
@section('content')

<h1 class="text-primary">{{$category->name}}</h1>
<p>{{$genre->description}}</p>

<a href="/category" class="btn btn-secondary btn-sm">Kembali</a>

@endsection