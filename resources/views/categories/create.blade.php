@extends('layouts.adminmaster')

@section('content')
<div class="card">
    <div class="card-header">
        Add Category
    </div>
    <div class="card-body">
        {!! Form::open(['route'=>'categories.store']) !!}
        <div class="form-group">
            {!! Form::label('name','Name') !!}
            {!! Form::text('name',null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Create', ['class'=>'btn btn-success']) !!}
        </div>
        {!! Form::close() !!}

        @include('partials.errors')
    </div>
</div>

@endsection
