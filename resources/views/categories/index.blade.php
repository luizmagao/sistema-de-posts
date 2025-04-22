@extends('welcome')


@section('conteudo-das-visoes')
    <div style="color: red;">
        <ul>
            @foreach ($categories as $modelCategory)
                <li>{{ $modelCategory->name }} - ({{ $modelCategory->posts()->count() }})</li>
            @endforeach
        </ul>
    </div>
@endsection
