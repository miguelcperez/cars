@extends('test.home')
@section('content')
    <div class="container">
        <h1>Dropdown Dinamico</h1>
        {!! Form::model($makeForm, ['method'=> 'GET', 'class'=> 'form', 'id'=> 'search'])!!}
            {!! Field::select('make_id', $makes) !!}
            {!! Field::select('makeyear_id', $makeYears) !!}
            {!! Field::select('model_id', $models) !!}
        {!! Form::close() !!}
    </div>
@endsection