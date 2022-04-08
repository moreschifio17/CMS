@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('prueba') }}</div>

                    <div class="card-body">

                        <form action="{{ route('page.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="col-sm-9">

                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <label class="text-dark">Title</label>
                                        <input class="form-control" placeholder="Titulo" value="{{ old('page_title') }}"
                                            name="page_title" required="" type="text" autofocus="">
                                    </div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="form-group">
                                        <label class="text-dark">Description</label>
                                        {{-- <input class="form-control" placeholder="Describa su negocio"
                                            value="{{ old('page_description') }}" name="page_descri" required="" type="text"
                                            autofocus=""> --}}

                                        <textarea name="page_description" value="{{ old('page_description') }}" class="form-control" cols="60" rows="5">

                                        </textarea>
                                    </div>
                                </div>


                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <label class="text-dark">Photo</label>
                                        <input class="form-control" value="{{ old('page_photo') }}" name="page_photo"
                                            type="file">
                                    </div>

                                </div>
                                <p></p>

                               <hr/>
                                  
                                    <div class="form-group">
                                        <a class="btn btn-primary" href="{{ route('page') }}">Back</a>
                                        <input class="btn btn-danger" type="reset" value="Cancel">
                                        <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>
                                            Save</button>

                                   
                                    </div>
                                </div>

                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
