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
      font-family:"Book Antiqua";
      text-align:center;
      margin:0;
      color:white;
      background-color:black;
      padding-top:30px;
      padding-bottom:30px;
    }
    .login{
      font-family:"Arial Black";
      font-size:50px;
      text-align:center;
      margin-top:2vw;
    }
    input {
      border:1px solid black;
      height:50px;
      margin-top:10px;
    }
    .meal{
      border-radius:15px;
      font-size:15px;
      text-align:center;
    }
    .password{
      border-radius:15px;
      font-size:15px;
      text-align:center;
      margin-top:10px;
    }
    h4{
      text-align:center;
      padding-top:19px;
    }
    .register{
      text-align:center;
      margin-top:-20px;
    }
    .small_title{
      bottom:0;
      position:absolute;
      margin-left:46%
    }
    .login-1{
      text-align:center;
      margin-top:5px;
    }
    .login-2{
      width:200px;
      background-color:black;
      color:white;
      border-radius:10px;
    }
  </style>
  <div class="header">
    <div class="title">
      <h2 class="apri-name">EMONTIONS</h2>
    </div>
  </div>
  <form action="/login" method="POST">
    @csrf
    <div class="subtitle">
      <h2 class="login">LOGIN</h2>
    </div>
    <div class="meal">
      <input type="text" name="emali" placeholder="メールアドレス" size="50px" class="meal" >
    </div>
    <div class="password">
      <input type="text" name="password" placeholder="パスワード" size="50px" class="password">
    </div>
    <div class="not have">
      <h4>会員登録していない人はこちらから</h4>
    </div>
    <div class="register">
      <a href="/register">会員登録</a>
    </div>
    <div class="login-1">
      <input type="submit" value="ログイン" class="login-2">
    </div>
  </form>
    <div class="small_title">
      <small>@Emontions,inc</small>
    </div>
</body>