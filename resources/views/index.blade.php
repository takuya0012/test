@extends('layouts.app')

@section('title', '初めてのLaravelプロジェクト')

@section('sidebar')

@endsection

@section('index')
    <form action="testform" method="post">
        @csrf
        <input type="text" name="textbox1" >
        <input type="text" name="textbox2" >
        <input type="submit" value="送信ボタン" >
    </form>

@endsection

@section('content')
<button id="PB090">test</button>
@endsection
