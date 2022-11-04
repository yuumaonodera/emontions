<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Emontions</title>
</head>

<body style="margin:0px;">
  <style>
    .apri-name{
      text-align:center;
      font-family:"Book Antiqua";
      background-color:black;
      color:white;
      padding-top:30px;
      padding-bottom:30px;
    }
    h2{
      margin:0;
    }
    .register{
      text-align:center;
      font-family:"Arial Black";
      margin-top:30px;
      font-size:45px;
    }
    input {
      height:40px;
      text-align:center;
      border-radius:10px;
      border:1px solid black;
    }
    .name{
      text-align:center;
      margin-top:15px;
    }
    .meal{
      text-align:center;
      margin-top:10px;
    }
    .password{
      text-align:center;
      margin-top:10px;
    }
    .check{
      text-align:center;
      margin-top:10px;
    }
    .entory{
      text-align:center;
      margin-top:30px;
      color:white;
    }
    .register-entory{
      background-color:black;
      color:white;
      font-size:15px;
      height:80px;
    }
    .sub_title{
      position:absolute;
      bottom:0;
      margin-left:46%;
    }
  </style>
  <div class="header">
    <div class="title">
      <h2 class="apri-name">EMONTIONS</h2>
    </div>
  </div>
  <div class="register-group">
    <h2 class="register">会員登録</h2>
  </div>
  <div class="name">
    <input type="text" name="name" placeholder="お名前" size="50" class="name" color="gray">
  </div>
  <div class="meal">
    <input type="text" name="meal" placeholder="メールアドレス" size="50" class="meal">
  </div>
  <div class="password">
    <input type="text" name="password" placeholder="パスワード" size="50" class="password">
  </div>
  <div class="check">
    <input type="text" name="check" placeholder="確認用パスワード" size="50" class="check">
  </div>
  <div class="entory">
    <input type="submit" value="会員登録" class="register-entory">
  </div>
  <div class="sub_title">
    <small>@Emontions,inc</small>
  </div>
</body>