@extends('layouts.app')

@section('template_title')
    Create Image
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

               

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Image</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('images.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('image.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
