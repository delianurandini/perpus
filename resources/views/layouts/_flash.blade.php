@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-body">

                @if (session()->has('flash_notification.message'))
                <div class="container">
                	<div class="alert alert-{{session()->get('flash_notification.level')}}">
                		<button type="button" class="close" data-dismiss="alert" aria_hidden="true">&times;</button>
                		{!! session()->get('flash_notification.message') !!}
                	</div>
                </div>
                @endif

                </div>
           </div>
       </div>
    </div>
 </div>
@endsection

