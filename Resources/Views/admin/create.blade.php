@extends('titan::layouts.admin')

@section('page')
    <h1 class="h3 mb-4 text-gray-800">New Entry
        <a href="{{ route('admin.ian.changelog') }}" class="btn btn-primary float-right">View entries</a>
    </h1>

    {!! Form::open('admin.ian.changelog.store') !!}

    {!! Form::text('title', 'Title') !!}


    <div class="form-group">
        @include('titan::partials.admin.editor', [
            'id'    =>  'changelogContentEditor',
            'name'  =>  'content'
        ])</div>

    {!! Form::submit('Create entry') !!}

    {!! Form::close() !!}
@endsection
