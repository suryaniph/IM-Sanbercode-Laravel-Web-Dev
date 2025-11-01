@extends('layouts.master')
@section('title', "List category")
@section('content')

<a href="category/create" class="btn btn-primary btn-sm my-2">Tambah</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($categories as $item)
        <tr>
            <th scope="row">{{$loop->literation}}</th>
            <td>{{$item->name}}</td>
            <td>
                <a href="/category/{{$item->id}}" class="btn btn-warning btn-sm">Detail</a>
                <a href="/category/{{$item->id}}/edit" class="btn btn-info btn-sm">Edit</a>
            </td>
        </tr>
    @empty
        <tr>
            <td>Tidak ada Category</td>
        </tr>
    @endforelse

  </tbody>
</table>

@endsection