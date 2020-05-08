@extends('titan::layouts.admin')

@section('page')
    <h1 class="h3 mb-4 text-gray-800">New Entry
        <a href="{{ route('admin.ian.changelog') }}" class="btn btn-primary float-right">View entries</a>
    </h1>

    {!! Form::open('admin.ian.changelog.update')->fill($changelog)->method('PUT') !!}

    {!! Form::text('title', 'Title') !!}


    <div class="form-group">
        @include('titan::partials.admin.editor', [
            'id'    =>  'changelogContentEditor',
            'name'  =>  'content',
            'default'   =>  $changelog->content
        ])</div>

    {!! Form::submit('Update entry') !!}

    {!! Form::close() !!}
@endsection
