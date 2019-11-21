@if(\Session::has('message'))
	@php
		$record = \Session::get('message');
	@endphp
	<div class="col-sm-12">
        <div class="alert {!! $record['status'] ? 'alert-success' : 'alert-danger' !!}">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <p>{!! $record['msg'] !!}</p>
        </div>
    </div>
@endif
@if(count($errors) > 0)
    <div class="col-sm-12">
        <div class="alert alert-danger alert-list">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{!! $error !!}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
