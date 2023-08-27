@extends('layouts.app')

@section('content')
    {{-- {{ $errors }} --}}
    @include('form', ['task' => $task])
@endsection
