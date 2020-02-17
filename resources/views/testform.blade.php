<?php
$objCount = count($userData);
for ($i = 0; $i < $objCount; $i++) {
    foreach ($userData[$i] as $key => $value) {
        if ($key == "name") {
            $name[$i] = $value;
        }
        if ($key == "email") {
            $email[$i] = $value;
        }
    }
}
?>

@extends('layouts.app')

@section('title', '管理登録名簿')

@section('sidebar')

@endsection

@section('index')

<p class="menuHedder" >【登録者名簿】</p><br>
<?php
for ($i = 0; $i < $objCount; $i++) {
    foreach ($userData[$i] as $key => $value) {
        if ($key == "name") {
            print "登録者名";
            print "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
            print $value;
            print "<br>";
        }
?>
<?php
        if ($key == "email") {
            print "メールアドレス";
            print "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
            print $value;
            print "<br><br>";
        }
    }
}
?>

@endsection

@section('content')
<button id="PB090">test</button>
@endsection
