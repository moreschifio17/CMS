@extends('layouts.app')

@section('template_title')
    {{ $image->name ?? 'Show Image' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Image</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('images.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Image Id:</strong>
                            {{ $image->image_id }}
                        </div>
                        <div class="form-group">
                            <strong>Image Name:</strong>
                            {{ $image->image_name }}
                        </div>
                        <div class="form-group">
                            <strong>Image Extention:</strong>
                            {{ $image->image_extention }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
