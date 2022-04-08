<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('image_id') }}
            {{ Form::text('image_id', $image->image_id, ['class' => 'form-control', 'placeholder' => 'Image Id']) }}
            
        </div>
        <div class="form-group">
            {{ Form::label('image_name') }}
            {{ Form::text('image_name', $image->image_name, ['class' => 'form-control' , 'placeholder' => 'Image Name']) }}
            
        </div>
        <div class="form-group">
            {{ Form::label('image_extention') }}
            {{ Form::text('image_extention', $image->image_extention, ['class' => 'form-control' , 'placeholder' => 'Image Extention']) }}
           
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>