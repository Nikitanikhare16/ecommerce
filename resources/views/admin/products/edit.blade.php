@extends('admin.layouts.master')
@section('content')
<div class="content">

    <form action={{route('update',$data->id)}} method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Product Name:</label>
                    <input type="text" class="form-control border-input" placeholder="Macbook pro" Name="name" value="{{$data->name}}">
                </div>

                <div class="form-group">
                    <label>Product Price:</label>
                    <input type="text" class="form-control border-input" placeholder="$2500" Name="price" value="{{$data->price}}">
                </div>

                <div class="form-group">
                    <label>Product Description:</label>
                    <textarea id="" cols="30" rows="10"
                              class="form-control border-input" placeholder="Product Description" Name="description">{{$data->description}}</textarea>
                </div>

                <div class="form-group">
                    <label>Product Image:</label>
                    <input type="file" class="form-control border-input" name="image">
                </div>

            </div>

        </div>
        <div class="">
            <button type="submit" class="btn btn-info btn-fill btn-wd">Update</button>
        </div>
        <div class="clearfix"></div>
    </form>
</div>
@endsection
