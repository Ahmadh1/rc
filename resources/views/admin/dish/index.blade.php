@extends('layouts.app')
@section('title', 'All Dishes')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dishes</div>
                <div class="card-body">
                   @if ($dishes->count() > 0)
                       <div class="table-responsive">
                           <table class="table table-hover">
                               <thead>
                                   <tr>
                                       <th>#</th>
                                       <th>Title</th>
                                       <th>Category</th>
                                       <th>Price</th>
                                       <th>Image</th>
                                       <th>Update</th>
                                       <th>Remove</th>
                                   </tr>
                               </thead>
                               <tbody>
                                @foreach ($dishes as $d)
                                    <tr>
                                       <td>{{ $d->id }}</td>
                                       <td>{{ $d->title }}</td>
                                       <td>{{ $d->category->title }}</td>
                                       <td>{{ $d->price }}</td>
                                       <td><img src="{{ asset('/uploads'. '/' . $d->image) }}" alt="{{ $d->title }}" style="width: 150px;"></td>
                                       <td><a href="{{ route('dishes.edit', ['id' => $d->id]) }}" class="btn btn-sm"><i class="fa fa-pencil"></i></a></td>
                                       <td>
                                        <form action="{{ route('dishes.destroy', ['id' => $d->id]) }}" method="POST">
                                          @method('DELETE')
                                          @csrf
                                          <button class="btn btn-sm" type="submit"><i class="fa fa-trash-o"></i></button>
                                        </form>
                                      </td>
                                    </tr>
                                @endforeach
                               </tbody>
                           </table>
                       </div>
                   @endif
                </div>
                <div class="card-footer">
                    <a href="{{ route('home') }}">back to home</a>
                </div>


            </div>
            {{ $dishes->links() }}
        </div>
      </div>
</div>
@endsection
