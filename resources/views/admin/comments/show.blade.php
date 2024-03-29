@extends('layouts.admin')


@section('content')

    @if(count($comments) > 0)

        <h1>Comments</h1>

        <table class="table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Author</th>
                <th>Email</th>
                <th>Body</th>
            </tr>
            </thead>
            <tbody>

            @foreach($comments as $comment)

                <tr>
                    <td>{{$comment->id}}</td>
                    <td>{{$comment->author}}</td>
                    <td>{{$comment->email}}</td>
                    <td>{{$comment->body}}</td>
                    <td><a href="{{route('single.posts', $comment->post->slug)}}">View Post</a></td>

                    <td>

                        @if($comment->is_active == 1)

                            {{--<form method="post" action="/cms/public/posts">--}}
                            {!! Form::open(['method'=>'PATCH', 'action'=>['PostCommentsController@update', $comment->id]]) !!}

                            <input type="hidden" name="is_active" value="0">

                            <div class="form-group">
                                {!! Form::submit('Un-approve', ['class'=>'btn btn-success']) !!}
                            </div>

                            {{csrf_field()}}
                            {{--</form>--}}

                            {!! Form::close() !!}
                        @else

                            {{--<form method="post" action="/cms/public/posts">--}}
                            {!! Form::open(['method'=>'PATCH', 'action'=>['PostCommentsController@update', $comment->id]]) !!}

                            <input type="hidden" name="is_active" value="1">

                            <div class="form-group">
                                {!! Form::submit('Approve', ['class'=>'btn btn-info']) !!}
                            </div>

                            {{csrf_field()}}
                            {{--</form>--}}

                            {!! Form::close() !!}


                        @endif

                    </td>

                    <td>

                        {{--<form method="post" action="/cms/public/posts">--}}
                        {!! Form::open(['method'=>'DELETE', 'action'=>['PostCommentsController@destroy', $comment->id],'onsubmit' => 'return ConfirmDelete()']) !!}



                        <div class="form-group">
                            {!! Form::submit('Delete', ['class'=>'btn btn-danger']) !!}
                        </div>

                        {{csrf_field()}}
                        {{--</form>--}}

                        {!! Form::close() !!}

                    </td>

                </tr>

            @endforeach

            </tbody>
        </table>

    @else

        <h1 class="text-center">No Comments</h1>

    @endif



@stop
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
