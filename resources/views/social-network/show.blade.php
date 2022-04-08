@extends('layouts.app')

@section('template_title')
    {{ $socialNetwork->name ?? 'Show Social Network' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Social Network</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('social-networks.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Social Net Id:</strong>
                            {{ $socialNetwork->social_net_id }}
                        </div>
                        <div class="form-group">
                            <strong>Social Net Type:</strong>
                            {{ $socialNetwork->social_net_type }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
