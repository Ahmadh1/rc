@extends('layouts.app')
@section('title', $cat->slug)
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Edit <b>{{ $cat->title }}</b></div>
                <div class="card-body">
                   <form action="{{ route('categories.update', ['id' => $cat->id]) }}" method="POST" class="form-horizontal" role="form">
                    @method('PUT')
                    @csrf
                     <div class="form-group">
                      <label for="">
                         @if ($errors->has('title'))
                        <p class="text-danger">{{ $errors->first('title') }}</p>
                      @else                     
                      Title:
                      @endif
                      </label>
                      <input type="text" name="title" value="{{ $cat->title }}" class="form-control">
                     </div>
                     <div class="form-group">
                       <div class="col-sm-10">
                         <button type="submit" class="btn btn-primary">Update {{ $cat->title }}</button>
                       </div>
                       </div>
                   </form>
                </div>
                <div class="card-footer">
                    <a href="{{ route('categories.index') }}">back to Categories</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
