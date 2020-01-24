@extends('layouts.app')
@section('title', $dish->slug)
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Edit <b>{{ $dish->title }}</b></div>
                <div class="card-body">
                   <form action="{{ route('dishes.update', ['id' => $dish->id]) }}" method="POST" class="form-horizontal" role="form" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                     <div class="form-group">
                      <label for="">Title:</label>
                      <input type="text" name="title" value="{{ $dish->title }}" class="form-control">
                     </div>
                      <div class="form-group">
                        <label for="">Price:</label>
                        <input type="text" name="price" value="{{ $dish->price }}" class="form-control">
                      </div>
                      <div class="form-group">
                        <label>Category:</label>
                        <select name="category_id" class="form-control">
                          @foreach ($categories as $category)
                            <option value="{{ $category->id }}" 
                              @if($dish->category->id == $category->id)
                                selected
                              @endif>
                          {{ $category->title }}</option>
                          @endforeach
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="">Old Image:</label>
                        <img src="{{ asset('/uploads'. '/' . $dish->image) }}" style="width: 150px;" alt="">
                      </div>
                      <div class="form-group">
                        <label for="">New Image:</label>
                        <input type="file" name="image" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="">Ingredients:</label>
                        <textarea class="form-control" name="details" rows="7">{{ $dish->details }}</textarea>
                      </div> 
                     <div class="form-group">
                       <div class="col-sm-10">
                         <button type="submit" class="btn btn-primary">Update {{ $dish->slug }}</button>
                       </div>
                       </div>
                   </form>
                </div>
                <div class="card-footer">
                    <a href="{{ route('dishes.index') }}">back to dishes</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
