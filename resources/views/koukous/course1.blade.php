@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
<form action="/koukou/course1" method="post">
    {{-- ここにsyougaku.blade.phpから送られてきたフォームデータを格納 --}}
    <input type="text" value="">
    
    {{-- コースで「速読のみ」以外の選択肢を選んだら表示 --}}
    <label for="sokudoku">速読の有無</label>
    <select name="sokudoku">
        <option value="あり">あり</option>
        <option value="なし">なし</option>
    </select>
    <br>

    <label for="logic_talk">作文＆ロジカルトークの有無</label>
    <select name="logical_talk">
        <option value="あり">あり</option>
        <option value="なし">なし</option>
    </select>
    <br>
    <

</form>
@endsection