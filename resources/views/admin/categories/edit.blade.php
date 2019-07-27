@extends('layouts.admin')




@section('content')

    <h1>Edit Categories</h1>

    <div class="row">

        <div class="col-sm-6">

            {{--<form method="post" action="/cms/public/posts">--}}
            {!! Form::model($category,['method'=>'PATCH', 'action'=>['AdminCategoriesController@update',$category->id]]) !!}


            <div class="form-group">

                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control']) !!}


            </div>

            <div class="form-group">
                {!! Form::submit('Update Category', ['class'=>'btn btn-primary col-sm-3']) !!}
            </div>

            {{csrf_field()}}
            {{--</form>--}}

            {!! Form::close() !!}

            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminCategoriesController@destroy',$category->id],'onsubmit' => 'return ConfirmDelete()']) !!}


            <div class="form-group">
                {!! Form::submit('Delete Category', ['class'=>'btn btn-danger col-sm-3']) !!}
            </div>

            {{csrf_field()}}
            {{--</form>--}}

            {!! Form::close() !!}

        </div>
    </div>
    <div class="row">

        @include('includes.form_error')

    </div>
    <script>

        function ConfirmDelete() {
            var x = confirm("Are you sure you want to delete?");
            if (x)
                return true;
            else
                return false;
        }

    </script>
@stop