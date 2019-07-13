<!-- resources/views/child.blade.phpとして保存 -->

@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
<form action="/syougaku/course1" method="post">
    @csrf
    <label for="course">メインコースの選択</label>
    <select name="course">
        <option value="速読">速読</option>
        <option value="検定">検定</option>
        <option value="作文＆ロジカルトーク">作文＆ロジカルトーク</option>
    </select>

    <select name="koma">
            <option value="1">1コマ</option>
            <option value="2">2コマ</option>
            <option value="3">3コマ</option>
        </select>
    <br>
    <input type="submit" value="次へ">
</form>
@endsection