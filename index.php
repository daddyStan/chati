<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="">
    <title>chatik</title>
    <!-- Custom styles for this template -->
    <link href="../st.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<audio id="audio"><source src="mess.mp3" type="audio/mpeg" /></audio>
    <div class="site-wrapper">
      <div class="site-wrapper-inner">
        <div class="cover-container">
          <div class="inner cover text">
			<p>Ваше имя<p>
			<input type="text" id="names" maxlength="16" plaсeholder="Ваше имя" style="background-color:#fff;opacity:0.85;border-radius:5px;font-size:26px;color:#000;" autocomplete="off">
			<div id="telo"></div>
			<form action="getit.php" method="POST" style="display: flex;" onsubmit="sendy();return false;">
			<textarea onkeypress="if(event.keyCode==10||(event.ctrlKey && event.keyCode==13)){sendy();}" autofocus=true id='text_mess' maxlength="150" class="mess" name="mess"></textarea>
			<input type="submit" id='sub' value="Отправить" class="mess_btn">
			</form>
			<span class="tip s1">Отправить нажав на ctrl+enter</span>
          </div>
        </div>
      </div>
    </div>
          <div class="mastfoot">
            <div class="inner">
              <p><a href="http://vk.com/koshpaev">Кошпаев Станислав</a> Санкт-Петербург</p>
            </div>
          </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="../script.js"></script>
<script>$(document).ready(function(){fresh();refresh();});</script>
  </body>
</html>