@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">File Upload</div>

            <div class="card-body">
                <form action="#" method="POST" enctype="multipart/form-data" name="add_name" id="add_name">  

                    @csrf
                    <div class="form-group">
                        <label for="file">Pilih File</label>
                        <input type="file" name="files[]" multiple class="form-control" id="exampleInputPassword1">
                        @if ($errors->has('files'))
                        <span class="invalid-feedback" style="display: block;" role="alert">
                            <strong>{{ $errors->first('files') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                       <button class="btn btn-primary">Upload File</button>
                    </div>
                 </form>  
            </div>
        </div>
    </div>
</div>
@endsection