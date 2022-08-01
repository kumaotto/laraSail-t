<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<title>HOME</title>
</head>

<body>
	<p>Hello World
@if (Auth::check())
	{{ \Auth::user()->name }}さん</p>
	<p><a href="/logout">ログアウト</a></p>
@else
	ゲストさん</p>
	<p><a href="/login">ログイン</a></p>
	<br>
	<p><a href="/register">会員登録</a></p>
@endif
</body>

</html>