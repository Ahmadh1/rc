@extends('layouts.app')
@section('title', 'Add new category')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Add new Category</div>
                <div class="card-body">
                   <form action="{{ route('categories.store') }}" method="POST" class="form-horizontal" role="form">
                    @csrf
                     <div class="form-group">
                      <label for="">
                      @if ($errors->has('title'))
                        <p class="text-danger">{{ $errors->first('title') }}</p>
                      @else                     
                      Title:
                      @endif
                    </label>
                      <input type="text" name="title" placeholder="Burger, Drinks, Coffee" class="form-control">
                      
                     </div>
                     <div class="form-group">
                       <div class="col-sm-10">
                         <button type="submit" class="btn btn-success">Add</button>
                       </div>
                       </div>
                   </form>
                </div>
                <div class="card-footer">
                    <a href="{{ route('categories.index') }}"><i class="fa fa-arrow-left"></i> back to Categories</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
