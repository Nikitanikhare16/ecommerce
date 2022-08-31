@extends('admin.layouts.master')
@section('content')
    <div class="container pt-3">
        @if(session()->has('message'))
        <div class="alert alert-success">
        {{ session()->get('message')}}
        </div>
        @endif
        <div class="container-fluid">
<div class="row">
 <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">All Products</h4>
                <p class="category">List of all stock</p>
            </div>
            <div class="content table-responsive table-full-width">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Desc</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
              @foreach($data as $d)
                    <tr>
                        <td>{{$d->id}}</td>
                        <td> {{$d->name}}</td>
                        <td>{{$d->price}}</td>
                        <td>{{$d->description}}</td>
                        <td><img src="{{asset('uploads/'.$d->image)}}" width="50px" height="50px"  ></td>
                        <td><a href="{{route('products.edit',$d->id)}}">
                            <button class="btn btn-sm btn-info ti-pencil-alt" title="Edit"></button></a>
                            <a href="{{route('delete',$d->id)}}">
                            <button class="btn btn-sm btn-danger ti-trash" title="Delete"></button></a>
                            <a href="{{route('products.details',$d->id)}}">
                            <button class="btn btn-sm btn-primary ti-view-list-alt"
                                    title="Details"></button></a>
                        </td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
