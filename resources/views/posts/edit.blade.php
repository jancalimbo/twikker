@extends('base')
@section('content')

    <div class="row mt-3">
        <div class="col-md-6">
            <h1>Edit Post</h1>
            <hr>

            {!! Form::model($post,['url'=>'/posts/' . $post->id,'method'=>'PUT']) !!}
                <div class="mb-3">
                    {!! Form::label('title', "Title") !!}
                    {!! Form::text("title", null, ['class'=>'form-controll']) !!}
                </div>

                <div class="mb-3">
                    {!! Form::label('content', "Content") !!}
                    {!! Form::textarea("content", null, ['class'=>'form-controll']) !!}
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary " type="submit">Update Post</button>
                </div>

            {!! Form::close() !!}
        </div>
    </div>
@endsection
