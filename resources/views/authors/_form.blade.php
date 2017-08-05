@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">

                <div class="form-group{{$errors->has('name') ? 'has-error' : ''}}">
                	{!! Form::label('name', 'Nama', ['class'=>'col-md-2 control-label']) !!}
                	<div class="col-md-4">
                		{!! Form::text('name', null, ['class'=>'form-control']) !!}
                		{!!	$errors->first('name', '<p class="help-block">:message</p>') !!}
                	</div>
                </div>

                <div class="form-group">
                	<div class="col-md-4 col-md-offset-2">
                		{!! Form::submit('Simpan', ['class'=>'btn btn-primary']) !!}
                	</div>
                </div>

                </div>
                </div>
            </div>
        </div>
    </div>
@endsection