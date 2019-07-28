@include('layouts.header')
<br>
<div class="container">
    <!--banner Slider Ends Here -->
    @if (Session::has('comment_message'))
        <p class="bg-info">{{session('comment_message')}}</p>
    @endif
    <h1>Register</h1>

    {{--<form method="post" action="/cms/public/posts">--}}
    {!! Form::open(['method'=>'POST', 'action'=>'RegistersController@store','files'=>true]) !!}


    <div class="form-group">

        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}


    </div>

    <div class="form-group">

        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email', null, ['class'=>'form-control']) !!}


    </div>

    <div class="form-group">

        {!! Form::label('role_id', 'Role:') !!}
        {!! Form::select('role_id', array(4=>'User') ,4, ['class'=>'form-control']) !!}


    </div>

    <div class="form-group" hidden="true">

        {!! Form::label('is_active', 'Status:') !!}
        {!! Form::select('is_active', array(1=>'Active') ,1, ['class'=>'form-control']) !!}


    </div>

    <div class="form-group">

        {!! Form::label('photo_id', 'Photo:') !!}
        {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}


    </div>

    <div class="form-group" >

        {!! Form::label('password', 'Password:') !!}
        {!! Form::password('password', ['class'=>'form-control']) !!}


    </div>
    <div class="form-group">
        {!! Form::submit('Register', ['class'=>'btn btn-primary']) !!}
    </div>

    {{csrf_field()}}
    {{--</form>--}}

    {!! Form::close() !!}
</div>
@include('includes.form_error')
@include('layouts.footer')

