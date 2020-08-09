@extends('master')

@section('content')
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Create New Post</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/pertanyaan" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="name" class="form-control" id="title" name="title" value="{{ old('title','') }}" placeholder="Judul Pertanyaan">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="body">Pertanyaan</label>
                    <input type="text" class="form-control" id="body" name="body" value="{{ old('body','') }}" placeholder="Pertanyaan">
                    @error('body')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>                           
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
</div>
@endsection