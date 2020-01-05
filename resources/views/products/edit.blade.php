@extends('products.layouts')

@section('content')
<div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
               <h3>Edit product</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('products.index')}}"> Back to products list </a>
            </div>
        </div>
    </div>
    <form action="{{ route('products.update',$product->id)}}" method="POST">
            @csrf
            @method("PUT")
            <div class="row">
                <div class="col-lg-12">
                    <div class="form-group">
                        <strong>Name:</strong>
                    <input type="text" name="name" value="{{$product->name}}" class="form-control" placeholder="Name">
                    </div>
                </div>
                <div class="col-lg-12">
                        <div class="form-group">
                            <strong>Details:</strong>
                        <textarea name="detail" name="detail"  placeholder="Details" class="form-control">{{$product->detail}}</textarea>
                        </div>
                </div>
                <div class=" col-lg-12">
                    <button type="submit" class="btn btn-primary">Submit</button> </button>
                </div>
            </div>
        </form>
    @endsection