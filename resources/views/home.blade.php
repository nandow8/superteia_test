@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in !

                    <input type="text" id="datepicker">
                    <br />

                    <textarea name="te" id="tex" cols="30" rows="10"></textarea>

                    <button type="button" id="bu" class="btn btn-primary">clica ae bixo</button>
                    <button type="button" id="toas" class="btn btn-primary">clica ae toast</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('local_script')
<script>
    $('document').ready(function () {
        $('#datepicker').datepicker();
        $('#tex').summernote();
        
        $("#bu").click(function (e) { 
            e.preventDefault();
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                if (result.value) {
                    Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                    )
                }
            })
        });

        $("#toas").click(function (e) { 
     
            toastr.info('info');
        });
    });
</script>
@endsection