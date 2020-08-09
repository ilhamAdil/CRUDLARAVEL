@extends('master')

@section('content')
<div class="card card-primary">
              <div class="card-header bg-success">
                <h3 class="card-title">Edit Pertanyaan {{$post->id}}</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="/pertanyaan/{{$post->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="name" class="form-control" id="title" name="title" value="{{ old('title',$post->title) }}" placeholder="Judul Pertanyaan">
                    @error('title')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="body">Pertanyaan</label>
                    <input type="text" class="form-control" id="body" name="body" value="{{ old('body',$post->body) }}" placeholder="Pertanyaan">
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