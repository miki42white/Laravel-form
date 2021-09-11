<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせフォーム</title>
</head>

<body>
  <h1>お問い合わせ完了ページ</h1>
  @foreach ($items as $item)
  <p> {{$item['name']}}さん</p>
  <p>{{$item['email']}}</p>
  @endforeach
  <p>お問い合わせありがとうございます。</p>
  <a href="../views/index.blade.php">トップへ戻る</a>
</body>
</html>