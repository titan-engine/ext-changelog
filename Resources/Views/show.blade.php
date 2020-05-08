@extends('titan::layouts.game')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>{{ $changelog->title }}</h1>
                <h5 class="text-muted">Written by {{ $changelog->author->name }}</h5>

                {!! $changelog->content !!}
            </div>
        </div>
    </div>
@endsection
