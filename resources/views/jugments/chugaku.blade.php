<!-- resources/views/child.blade.phpとして保存 -->

@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
<form action="/syogaku/course1" method="post">
    <label for="course">コースの選択</label>
    <select name="course">
        <option value="basic">ベーシック</option>
        <option value="advance">アドバンス</option>
        <option value="only_sokudoku">速読のみ</option>
        <option value="only_kentei">検定のみ</option>
        <option value="logical_talk">作文＆ロジカルトーク</option>
    </select>
    <br>
    <input type="submit" value="次へ">
</form>
@endsection