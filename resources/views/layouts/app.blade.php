<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
<title>@yield('title')</title>
</head>
<body>
<div class="sidebar">
<form method="get" action="http://www.google.co.jp/search" target="_blank">
<span id="leftMenu">CLONE</span>
<ul>
<li><a href="https://www.yahoo.co.jp/">Yahoo | </a></li>
<li><a href="https://www.excite.co.jp/">Excite | </a></li>
<li><a href="https://www.goo.ne.jp/">Goo | </a></li>
</ul>
<input type="text" name="q" size="31" maxlength="255" value="" class="serchWindow" placeholder="Google検索">
<input type="submit" name="btng" value="検索" class="serchButton">
<input type="hidden" name="hl" value="ja">
</ul>
</form>
<div class"clear"></div>

@yield('sidebar')
</div>
<div class="index">
@yield('index')
</div>
<div class="container">
@yield('content')
</div>
<script src="{{ asset('js/test.js') }}" type="text/javascript"></script>
</body>
</html>
