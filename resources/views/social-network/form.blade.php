<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('social_net_id') }}
            {{ Form::text('social_net_id', $socialNetwork->social_net_id, ['class' => 'form-control' . ($errors->has('social_net_id') ? ' is-invalid' : ''), 'placeholder' => 'Social Net Id']) }}
            {!! $errors->first('social_net_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('social_net_type') }}
            {{ Form::text('social_net_type', $socialNetwork->social_net_type, ['class' => 'form-control' . ($errors->has('social_net_type') ? ' is-invalid' : ''), 'placeholder' => 'Social Net Type']) }}
            {!! $errors->first('social_net_type', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>