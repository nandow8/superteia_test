<div class="container">
    <div class="form-group{{ $errors->has('name') ? ' has-error' : ''}} row">
        <label class="col-2 col-form-label" for="name">{{ 'Name' }}</label>

        <div class="col-6">
            <input name="name" class="form-control" type="text" id="name" value="{{ old('name', isset($product->name) ? $product->name : '') }}">
        </div>
        @if ($errors->has('name'))
            <span class="text-danger">{{ $errors->first('name') }}</span>
        @endif
    </div> 

    <div class="form-group{{ $errors->has('description') ? ' has-error' : ''}} row">
        <label  class="col-2 col-form-label" for="description">Description</label>

        <div class="col-6">
            <textarea name="description" class="form-control" id="description" rows="3">{{ old('description', isset($product->description) ? $product->description : '') }}</textarea>
        </div>
        @if ($errors->has('description'))
            <span class="text-danger">{{ $errors->first('description') }}</span>
        @endif
    </div>

    <div class="form-group{{ $errors->has('price') ? ' has-error' : ''}} row">
        <label class="col-2 col-form-label" for="price">{{ 'Price' }}</label>

        <div class="col-6">
            <input name="price" class="form-control" type="text" id="price" value="{{ old('price', isset($product->price) ? $product->price : '') }}">
        </div>
        @if ($errors->has('price'))
            <span class="text-danger">{{ $errors->first('price') }}</span>
        @endif
    </div>

    <br/>
        
    <div class="form-group offset-md-5">
        <a class="btn btn-warning" href="{{ route('products.index') }}"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
        
        <button class="btn btn-primary" type="submit">
        <i class="fa fa-check fa-1" aria-hidden="true"></i> {{ $formMode === 'edit' ? 'Edit' : 'Save' }}</button>
    </div>
</div> 

@section('local_script')
<script>
    $('document').ready(function () {
        $('#description').summernote();
    });
</script>
@endsection