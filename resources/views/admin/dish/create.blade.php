@extends('layouts.app')
@section('title', 'Add new Dish')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
          @if ($errors->any())
            <ul class="list-group">
              @foreach ($errors->all() as $error)
                <li class="list-group-item-danger">{{ $error }}</li>
              @endforeach
            </ul>
           @endif
               <div class="card">
                <div class="card-header">Add a new Dish</div>
                <div class="card-body">
                   <form action="{{ route('dishes.store') }}" method="POST" enctype="multipart/form-data">
                     @csrf
                    <div class="form-group">
                      <label for="">Title:</label>
                      <input type="text" name="title" class="form-control" placeholder="Beef Burger, Lemonade, Pizza">
                    </div>
                    <div class="form-group">
                      <label for="">Price:</label>
                      <input type="text" name="price" class="form-control" placeholder="600">
                    </div>
                    <div class="form-group">
                      <label for="">Image:</label>
                      <input type="file" name="image" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="">Category:</label>
                      <select name="category_id" class="form-control">
                        <option value="">Select an category</option>
                        @foreach ($categories as $cat)
                          <option value="{{ $cat->id }}">
                            {{ $cat->title }}
                          </option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="">Ingridents:</label>
                      <textarea rows="6" class="form-control" name="details" placeholder="Onion, Salt, Black Pepper..."></textarea>
                    </div>
                    <div class="form-group">
                      <button class="btn btn-success" type="submit">Add</button>
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
