@extends('layouts.admin')


@section('content')

    @if(count($replies) > 0)

        <h1>replies</h1>

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

            @foreach($replies as $reply)

                <tr>
                    <td>{{$reply->id}}</td>
                    <td>{{$reply->author}}</td>
                    <td>{{$reply->email}}</td>
                    <td>{{$reply->body}}</td>
                    <td><a href="{{route('single.posts', $reply->comment->post->slug)}}">View Post</a></td>

                    <td>

                        @if($reply->is_active == 1)

                            {{--<form method="post" action="/cms/public/posts">--}}
                            {!! Form::open(['method'=>'PATCH', 'action'=>['CommentRepliesController@update', $reply->id]]) !!}

                            <input type="hidden" name="is_active" value="0">

                            <div class="form-group">
                                {!! Form::submit('Un-approve', ['class'=>'btn btn-success']) !!}
                            </div>

                            {{csrf_field()}}
                            {{--</form>--}}

                            {!! Form::close() !!}
                        @else

                            {{--<form method="post" action="/cms/public/posts">--}}
                            {!! Form::open(['method'=>'PATCH', 'action'=>['CommentRepliesController@update', $reply->id]]) !!}

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
                        {!! Form::open(['method'=>'DELETE', 'action'=>['CommentRepliesController@destroy', $reply->id],'onsubmit' => 'return ConfirmDelete()'])!!}



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
        <div class="row">
            <div class="col-sm-6 col-sm-offset-5">

                {{$replies->render()}}

            </div>
        </div>
    @else

        <h1 class="text-center">No Replies</h1>

    @endif

@stop
<script>

    function ConfirmDelete() {
        var x = confirm("Are you sure you want to delete?");
        if (x)
            return true;
        else
            return false;
    }

</script>