@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a href="{{ route('page.create') }}" class="btn btn-success">CREATE</a>
                <hr />
                <div class="card">
                    <div class="card-header bg-success text-white">{{ __('Dashboard') }} </div>

                    <div class="card-body">
                        @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <p>{{ session('success') }}</p>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                                <table class="table table-bordered">
                                    <thead class="">
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Photo</th>
                                        <th>Details</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                    @foreach ($page as $item)
                                    <tr>
                                       
                                            <td>{{ $item->page_id }}</td>
                                            <td>{{ $item->page_title }}</td>
                                            <td>{{ $item->page_description }}</td>
                                            <td> <img src="{{ $item->page_photo }}" alt="" width="50px" height="50px"> </td>
                                            <td>
                                                <a class="btn btn-sm btn-success" href="pagered/{{$item->page_id}}">Detail</a>
                                            </td>
                                            <td>
                                                {{-- <a href="{{ route('page.edit',$item->page_id) }}" class="btn btn-sm btn-warning">Edit</a> --}}
                                               
                                                    {{-- <form action="{{ route('page.destroy',$item->page_id) }}" method=""> --}}
                                                       {{--  @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                    </form> --}}
                                               
                                            </td>
                                       

                                    </tr>
                                    @endforeach
                                </table>

                            </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
