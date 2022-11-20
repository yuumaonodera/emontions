<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Emotions</title>
</head>

<body style="margin:0px;">
  <style>
    p{
      font-weight:bold;
      margin-right:70px;
    }
    .header{
      display:flex;
      background-color:black;
      justify-content:space-between;
    }
    .header-menu{
      display:flex;
      justify-content:space-between;
      color:white;
      margin-top:10px;
    }
    .title{
      color:white;
      margin-left:30px;
    }
    a{
      color:white;
    }
    .main{
      margin:0px;
    }
    .main-title{
      margin:0px;
      text-align:center;
      font-family:"Arial Black";
      font-size:40px;
      margin-top:30px;
    }
    .sub-title{
      position:absolute;
      bottom:0;
      margin-left:46%;
    }
  </style>
  <div class="header">
    <div class="title">
      <h2 class="spri-name">EMONTIONS</h2>
    </div>
    <div class="header-menu">
      <p><a href="/" style="text-decoration:none;">感情選択</a></p>
      <p>ログアウト</p>
    </div>
  </div>
    <div class="main">
      <h2 class="main-title">カレンダー</h2>
    </div>
    <div id='calendar'></div>
    <script src="{{ mix('js/app.js') }}"></script>
    <div class="sub-title">
      <small>@Emontions,inc</small>
    </div>
</body>