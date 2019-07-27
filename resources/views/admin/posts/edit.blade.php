@extends('layouts.admin')


@section('content')

    <h1>Edit Post</h1>

    <div class="row">

        <div class="col-sm-3">

            <img src="{{URL::to('/') }}/images/{{$post->photo ? $post->photo->file : '400x400.png' }}"
                 alt="" class="img-responsive img-rounded">

        </div>

        <div class="col-sm-9">

            {{--<form method="post" action="/cms/public/posts">--}}
            {!! Form::model($post, ['method'=>'PATCH', 'action'=>['AdminPostsController@update', $post->id], 'files'=>true]) !!}


            <div class="form-group">

                {!! Form::label('title', 'Title:') !!}
                {!! Form::text('title', null, ['class'=>'form-control']) !!}


            </div>

            <div class="form-group">

                {!! Form::label('category_id', 'Category:') !!}
                {!! Form::select('category_id', $categories ,null, ['class'=>'form-control']) !!}


            </div>

            <div class="form-group">

                {!! Form::label('photo_id', 'Photo:') !!}
                {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}


            </div>

            <div class="form-group">

                {!! Form::label('body', 'Description:') !!}
                {!! Form::textarea('body', null, ['class'=>'form-control']) !!}


            </div>

            <div class="form-group">
                {!! Form::submit('Update Post', ['class'=>'btn btn-primary col-sm-2']) !!}
            </div>

            {{csrf_field()}}
            {{--</form>--}}

            {!! Form::close() !!}

            {{--<form method="post" action="/cms/public/posts">--}}
            {!! Form::open(['method'=>'DELETE', 'action'=>['AdminPostsController@destroy',$post->id],'onsubmit' => 'return ConfirmDelete()']) !!}


            <div class="form-group" >
                {!! Form::submit('Delete Post', ['class'=>'btn btn-danger col-sm-2']) !!}
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

        function ConfirmDelete()
        {
            var x = confirm("Are you sure you want to delete?");
            if (x)
                return true;
            else
                return false;
        }

    </script>

@stop