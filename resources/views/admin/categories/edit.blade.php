@extends('layouts.admin')




@section('content')

    <h1>Categories</h1>

    <div class="col-sm-6">

        {{--<form method="post" action="/cms/public/posts">--}}
        {!! Form::model($category,['method'=>'PATCH', 'action'=>['AdminCategoriesController@update',$category->id]]]) !!}


        <div class="form-group">

            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}


        </div>

        <div class="form-group">
            {!! Form::submit('Update Category', ['class'=>'btn btn-primary']) !!}
        </div>

        {{csrf_field()}}
        {{--</form>--}}

        {!! Form::close() !!}


    </div>

    <div class="col-sm-6">


    </div>
@stop