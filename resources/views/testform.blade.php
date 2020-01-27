@extends('layouts.app')

@section('title', '初めてのLaravelプロジェクト')

@section('sidebar')

@endsection

@section('index')

<p>入力した文字は、{{$data1['textbox1']}}</p>
<p>入力した文字は、{{$data1['textbox2']}}</p>

@endsection

@section('content')
<button id="PB090">test</button>
@endsection
