@extends('products.layouts')

@section('content')
<div class="row">
        <div class="col-lg-12">
            <div class="pull-left">
               <h3>Show product</h3>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{route('products.index')}}"> Back to products list </a>
            </div>
        </div>
    </div>

    <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    {{ $product->name}}
                </div>
            </div>
            <div class="col-lg-12">
                    <div class="form-group">
                        <strong>Details:</strong>
                        {{$product->detail}}
                    </div>
            </div>
            
        </div>
    @endsection