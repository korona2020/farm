@extends('layouts.adminmaster')

@section('content')

    <div class="card">

        <div class="card-header">Edito Produkt</div>

        <div class="card-body">
            {!! Form::model($product,['method'=>'PUT', 'route'=>['products.update',$product->id],'files'=>true]) !!}
            <div class="form-group">
                {!! Form::label('name','Emertimi') !!}
                {!! Form::text('name',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('price','Cmimi') !!}
                {!! Form::number('price', null, ['class' => 'form-control','step' => '0.01']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('discount','Zbritje (%)') !!}
                {!! Form::number('discount', null, ['class' => 'form-control','min'=>0]) !!}
            </div>
            <div class="form-group">
                {!! Form::label('unit','Njesia (kg)') !!}
                {!! Form::text('unit',null,['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('category_id', 'Kategoria') !!}
                {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('description','Pershkrimi') !!}
                {!! Form::textarea('description',null, ['class'=>'form-control' ,'rows'=>3]) !!}
            </div>
            <div class="form-group">
                {!! Form::file('image',null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::submit('Edito Produkt',['class'=>'btn btn-success']) !!}
            </div>

            {!! Form::close() !!}

        </div>
        @include('partials.errors')
    </div>

@endsection
