<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('nacs') }}
            {{ Form::text('nacs', $nac->nacs, ['class' => 'form-control' . ($errors->has('nacs') ? ' is-invalid' : ''), 'placeholder' => 'Nacs']) }}
            {!! $errors->first('nacs', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>