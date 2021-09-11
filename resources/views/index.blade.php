<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせフォーム</title>
</head>

<body>
  <h1>トップページ</h1>
  <form action="/thanks" method="POST">
    @csrf
    <table>
      <tr>
        <td>名前</td>
      </tr>
       <tr>
        <td>
          <input type="text" name="name" >
        </td>
     </tr>
     <tr>
       <td>メールアドレス</td>
     </tr>
     <tr>
       <td>
        <input type="email" name="email" >
       </td>
     </tr>
    </table>
    <input type="submit" value="送信する" >
  </form>
</body>

</html>
