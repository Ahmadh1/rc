@extends('layouts.app')
@section('title', 'All Categories')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Categories</div>
                <div class="card-body">
                   @if ($categories->count() > 0)
                       <div class="table-responsive">
                           <table class="table table-hover">
                               <thead>
                                   <tr>
                                       <th>#</th>
                                       <th>Title</th>
                                       <th>Added</th>
                                       <th>Update</th>
                                       <th>Remove</th>
                                   </tr>
                               </thead>
                               <tbody>
                                @foreach ($categories as $cat)
                                    <tr>
                                       <td>{{ $cat->id }}</td>
                                       <td>{{ $cat->title }}</td>
                                       <td>{{ Carbon\Carbon::parse($cat->created_at)->toDayDateTimeString() }}</td>
                                       <td>
                                        <a href="{{ route('categories.edit', ['id' => $cat->id]) }}" class="btn btn-sm">
                                          <i class="fa fa-pencil"></i>
                                        </a>
                                      </td>
                                       <td>
                                        <form action="{{ route('categories.destroy', ['id' => $cat->id]) }}" method="POST">
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
            {{ $categories->links() }}
        </div>
      </div>
</div>
@endsection
