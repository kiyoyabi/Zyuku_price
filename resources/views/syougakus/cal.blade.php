<!-- resources/views/child.blade.phpとして保存 -->

@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
<div class="container">
    <div class="row">
            @foreach ($courses as $course)
            <div class="d-inline-block">
                    {{ $course }}
            </div>
        @endforeach
    </div>
</div>
@endsection