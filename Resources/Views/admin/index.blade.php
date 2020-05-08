@extends('titan::layouts.admin')

@section('page')
    <h1 class="h3 mb-4 text-gray-800">Changelog Entries
        <a href="{{ route('admin.ian.changelog.create') }}" class="btn btn-primary float-right">Create new entry</a>
    </h1>


    <h6 class="text-muted">{{ $items->total() }} items</h6>

    @if($items->total() > 0)
        <table class="table table-striped table-hover table-bordered">
            <thead>
            <tr>
                <th>Title</th>
            </tr>
            </thead>
            <tbody>
            @foreach($items as $item)

                <tr>
                    <td width="80%">{{ $item->title }}</td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('ian.changelog.show', $item->slug) }}">View</a>
                    </td>
                    <td>
                        <a class="btn btn-primary" href="{{ route('admin.ian.changelog.edit', $item->slug) }}">Edit</a>
                    </td>
                    <td>
                        {!! Form::open()->route('admin.ian.changelog.delete', [$item->slug])->method('DELETE') !!}
                        {!! Form::submit('Delete')->attrs([
                            'class' =>  'btn-danger'
                        ]) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <td>
                    {!! $items->links() !!}
                </td>
            </tr>
            </tfoot>
        </table>
    @endif
@endsection
