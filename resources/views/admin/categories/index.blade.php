@extends('layouts.admin')




@section('content')

    <h1>Categories</h1>

    <div class="row">

        <div class="col-sm-6">

            {{--<form method="post" action="/cms/public/posts">--}}
            {!! Form::open(['method'=>'POST', 'action'=>'AdminCategoriesController@store']) !!}


            <div class="form-group">

                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}


            </div>

            <div class="form-group">
                {!! Form::submit('Create Category', ['class'=>'btn btn-primary']) !!}
            </div>

            {{csrf_field()}}
            {{--</form>--}}

            {!! Form::close() !!}


        </div>

        <div class="col-sm-6">
            @if($categories)

                <table class="table">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Created Date</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($categories as $category)

                        <tr>
                            <td>{{$category->id}}</td>
                            <td><a href="{{route('admin.categories.edit', $category->id)}}">{{$category->name}}</a></td>
                            <td>{{$category->created_at ? $category->created_at->diffForHumans():'no date'}}</td>
                        </tr>

                    @endforeach

                    </tbody>
                </table>
                <div class="row">
                    <div class="col-sm-6 col-sm-offset-5">

                        {{$categories->render()}}

                    </div>
                </div>
            @endif

        </div>
    </div>
    <div class="row">

        @include('includes.form_error')

    </div>
@stop