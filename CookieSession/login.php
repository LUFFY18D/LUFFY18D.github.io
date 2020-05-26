<?php
    setcookie("user","201630185022");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            padding:0;
            margin:0;
        }
        body{
            background-color: rgba(232, 123, 241, 0.867);
        }
        .container{
            height:100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position:relative;
        }
        .login_box{
            display:flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            width: 500px;
            height:500px;
            background-image:linear-gradient(135deg,#2ae0f8,#2ff03f,#725bf5,#df18b4);
            border-radius:10px;
            position:absolute;
            box-shadow: -3px -3px 10px white,
            3px 3px 10px #000000;
        }
        input{
            width: 200px;
            height: 20px;
            margin-bottom:20px;
            border-radius: 10px;
            border:0;
            padding: 10px;
            font-family: "等线";
            font-size: 16px;
            font-weight: bold;
            box-shadow: 2px 2px 10px #000000,
            -2px -2px 10px white;
            background-image:linear-gradient(45deg,#725bf5b7,#28e80fd2);
        }
        input:hover{
            box-shadow: inset 2px 2px 5px #000000,
            inset -2px -2px 5px white,
            2px 2px 10px #000000,
            -2px -2px 10px white;
        }
        button{
            width:60px;
            height:60px;
            border-radius: 150px;
            border:0;
            box-shadow: 2px 2px 10px #000000,
            -2px -2px 10px #ffffff;
            font-family: "等线";
            font-size: 18px;
            font-weight: bold;
            background-image:linear-gradient(45deg,#2df81bd7,#0bf5e2be);
        }
        button:hover{
            box-shadow: 2px 2px 10px #000000,
            -2px -2px 10px #ffffff,
            inset 2px 2px 10px #000000,
            inset -2px -2px 10px #ffffff;
        }
    </style>

</head>
<body>
<div class="container">
    <div class="login_box">
        <span style="margin-bottom: 20px;font-size:30px;font-weight: bold;color:#725bf5;text-shadow: 2px 2px 10px #050b0c;">LOGIN</span>
        <form id="myForm">
            <div class="input_box">
                <input id="user" name="user" type="text" placeholder="userName">
            </div>
            <div class="input_box">
                <input id="pswd" name="pswd" type="password" placeholder="password">
            </div>
            <input name="type" id="type" value="login" hidden>
        </form>
        <div style="display:flex;width:200px;justify-content:space-between;">
            <button class="button" onclick="login()">登录</button>
            <button class="button" onclick="signin()">注册</button>
        </div>
    </div>
</div>
<script>
    function login(){
        var form = document.querySelector("#myForm");
        var user = document.querySelector("#user");
        var pswd = document.querySelector("#pswd");
        var uv = user.value;
        var pv = pswd.value;
        document.cookie = "pswd="+pv;

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("post","./validate.php",true);
        xmlhttp.setRequestHeader('content-type','application/x-www-form-urlencoded');
        xmlhttp.send("type=login&user="+uv+"&pswd="+pv);
        xmlhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                var obj = JSON.parse(this.responseText);
                if(obj.code == "233")//密码错误
                {
                    alert("输入密码有误");
                }
                else if(obj.code=="999"){//游客
                    alert(obj.user + "你好，请先注册再登录");
                }
                else if(obj.code=="666")//登录成功
                {
                    window.location.href = "./mypage/resume.php";
                }
            }
        };
        
    }
    function signin()
    {
        var type = document.querySelector("#type");
        var user = document.querySelector("#user");
        var pswd = document.querySelector("#pswd");
        var uv = user.value;
        var pv = pswd.value;

        var xmlhttp = new XMLHttpRequest();
        xmlhttp.open("post","./validate.php",true);
        xmlhttp.setRequestHeader('content-type','application/x-www-form-urlencoded');
        xmlhttp.send("type=signin&user="+uv+"&pswd="+pv);

        xmlhttp.onreadystatechange = function(){
            if(this.readyState == 4 && this.status == 200){
                var obj = JSON.parse(this.responseText);
                if(obj.code == "888")
                {
                    alert("请勿重复注册");
                }
                else{
                    alert(obj.user+"你好，注册成功！");
                }  
            }
        };
    }
    
</script>
</body>
</html>