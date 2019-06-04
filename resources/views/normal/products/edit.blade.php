@extends('layouts.master')

@section('content') 
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="h3 card-header">Edit Product</div>
                    <div class="card-body">
                        <a href="{{ route('products.index') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <br />
                        <br />

                        <form method="POST" action="{{ url('/products/' . $product->id) }}" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                            @method('PUT')
                            {{ csrf_field() }}

                            @include ('normal.products.form', ['formMode' => 'Editar'])                 
                        </form> 

                    </div>
                </div>
            </div>
        </div> 
    </div>
@endsection