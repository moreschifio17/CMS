@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header panel panel-success">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                       
                        <form action="{{ route('pagered.store') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="col-sm-9">

                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <label class="text-dark">Title</label>
                                        <input type="hidden" name="page_id" value={{ $page->page_id }} id="">
                                        <input class="form-control" placeholder="Titulo"
                                            value="{{ $page->page_title }}" name="page_title"
                                            readonly="" type="text" autofocus="">
                                    </div>
                                </div>
                                <div class="col-sm-9">
                                    <div class="form-group">
                                        <label class="text-dark">Description</label>
                                       
                                        <textarea name="page_description" readonly="" class="form-control" cols="5" rows="5">{{ $page->page_description }}</textarea>
                                    </div>
                                </div>

                                <div class="col-sm-5">
                                    <div class="form-group">
                                        <label class="text-dark">Type of contact</label>
                                       
                                        <select class="form-control" id="social_net_id" name="social_net_id">
                                            <option value="">Select an option:</option> 
                                            @foreach ($red as $item)
                                            <option value="{{$item->social_net_id}}">{{$item->social_net_type}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                              

                                <div class="col-sm-7">
                                    <div class="form-group">
                                        <label class="text-dark">Description</label>
                                        <input class="form-control" value="{{ old('description') }}"
                                          placeholder="984478253"  name="description" type="text">
                                    </div>

                                    <div class="col-sm-5">
                                        <button class="btn btn-sm btn-success">
                                            <span>+</span>
                                               </button>
    
                                    </div>
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
