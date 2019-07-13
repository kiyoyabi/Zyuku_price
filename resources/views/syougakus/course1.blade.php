<!-- resources/views/child.blade.phpとして保存 -->

@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
<form action="/syougaku/cal" method="post">
    @csrf
    {{-- ここにsyougaku.blade.phpから送られてきたフォームデータを格納--}}
    <input name="course1" type="hidden" value="{{ $course1 }}"><br>

    {{-- メインコースで「速読」以外を選んだら表示 --}}
    @if($course1 !== 'only_sokudoku')
    <label for="sokudoku">速読のコース</label>
    <select name="sokudoku">
        <option value="速読解">速読解</option>
        <option value="スポーツ">スポーツ</option>
        <option value="中学受験">中学受験</option>
        <option value="なし">なし</option>
    </select>
    <br>
    @endif

    {{-- メインコースで「検定」以外を選んだら表示 --}}
    @if($course1 !== 'only_kentei')
    <label for="kentei">検定のコース</label>
    <select name="kentei">
        <option value="なし">なし</option>
        <option value="漢検">漢検</option>
        <option value="算数検定">算数検定</option>
        <option value="英検5級">英検5級</option>
    </select>
    <br>
    @endif

    {{-- メインコースで「作文＆ロジカルトーク」以外を選んだら表示 --}}
    @if($course1 !== 'logical_talk')
    <label for="logical_talk">作文＆ロジカルトークの有無</label>
    <select name="logical_talk">
        <option value="なし">なし</option>
        <option value="あり">30分</option>
        <option value="あり">50分</option>
    </select>
    <br>
    @endif
    <input type="submit" value="概算" >
</form>
@endsection