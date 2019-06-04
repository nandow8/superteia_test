@extends('layouts.master')

@section('content')    
    <div class="row mt-5">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <span class="h3">Products</span>
                    <a style="float:right;" href="{{ route('products.create') }}" class="btn btn-success btn-sm pull-right" title="Add New Blog">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add new product
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-hover">
                        <table class="table" id="tabela_products">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Names</th>
                                    <th>Descriptions</th>
                                    <th>Prices</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $key => $product)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td> {{ $product->name }}</td>
                                        <td> {!! $product->description !!}</td>
                                        <td> {{ $product->price }}</td>
                                        <td>
                                            <a href="{{ url('/products/' . $product->id . '/edit') }}" title="Editar product">
                                                <button class="btn btn-primary btn-sm"><i class="fa fa-edit" aria-hidden="true"></i></button>
                                            </a>
                                            
                                            <form action="{{ route('products.destroy',$product->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-outline-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                            </form>
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
@endsection

@section('local_script')
<script>
    $(document).ready(function () {
        $('form').on('submit', function (e) {
            e.preventDefault();
            var form = this;

            Swal.fire({
                title: 'Delete product?' ,
                type: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes!',
                cancelButtonText: 'No',
                }).then((result) => {
                if (result.value) {
                
                    form.submit()
                }
            })
        });

        $("#tabela_products").DataTable({
            "language": {
                "sSearch": "Search",
                "lengthMenu": "",
                "zeroRecords": "",
                "info": "showing _PAGE_ of _PAGES_ pages",
                "infoEmpty": "",
                "sLoadingRecords": "Loading...",
                "oPaginate": {
                    "sNext": "Next",
                    "sPrevious": "Back",
                    "sFirst": "First",
                    "sLast": "Last"
                },
            }
        });
    });
</script>
@endsection