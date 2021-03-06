<?php
  session_start();
  if(isset($_SESSION["pass"])&&$_SESSION["pass"] == TRUE&& time()<$_SESSION["expires"])
  {
    
    echo "<script>alert('欢迎回来！');</script>";
  }
  else{
    //echo "未登录";
    echo "<script>alert('登录已过期，请重新登录');window.location.href='../login.php';</script>";
  }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>个人简介</title>
    <link rel="stylesheet" href="master.css">
    <link rel="stylesheet" href="iconfont.css">
    <script type="text/javascript" src="master.js">
    </script>
  </head>
  <body>
    <div class="bg">
    </div>
    <!-- <div class="state">
    </div> -->
    <div class="info">
      <div class="sideBar">
        <div class="tip">
          <div style="float:left;">
            <img src="./head.jpg" style="border-radius: 5px;" class="head" alt="头像">
          </div>
          <div class="inf">
            <div class="name">
              <p>姓&nbsp;名：&nbsp;&nbsp;向&nbsp;健</p>
              <p>性&nbsp;别：&nbsp;&nbsp;男</p>
              <p>民&nbsp;族：&nbsp;&nbsp;汉</p>
              <p style="overflow:hidden;">联&nbsp;系&nbsp;方&nbsp;式：&nbsp;&nbsp;undefined|null</p>
            </div>
          </div>
        </div>
         <div class="chos">
          <div class="tag">
          </div>
          个人介绍
          <span style="float:right;margin-right:30px;">
            >
          </span>
        </div>
        <hr style="width:30vw;">
        <div class="chos">
          <div class="tag">
          </div>
          学习经历
          <span style="float:right;margin-right:30px;">
            >
          </span>
        </div>

        <hr style="width:30vw;">
        <div class="chos">
          <div class="tag">
          </div>
          项目经历
          <span style="float:right;margin-right:30px;">
            >
          </span>
        </div>
        <hr style="width:30vw;">
        <div class="chos">
          <div class="tag">
          </div>
          个人理解
          <span style="float:right;margin-right:30px;">
            >
          </span>
        </div>
        <center>
          <div class="connect">
            <a href="https://www.qq.com"><i class="iconfont iconQQ1"></i></a>
            <a href="mailto:1366541915@qq.com"><i class="iconfont iconmail4"></i></a>
            <a href="https://github.com/LUFFY18D/first" style="margin-right: 0;"><i class="iconfont icongithub"></i></a>
          </div>
        </center>
      </div>
      <div class="content">
        <div class="ct">
          <span class="title">
            个人介绍
          </span>
          <hr class="tt">
          <p>尊敬的HR前辈，您好！我来自湖南师范大学，学院是信息科学与工程学院，专业为计算机科学与技术。我喜欢学习技术，除了编程之外，我闲暇时间会打打乒乓球，看看电影，听听音乐，追追剧。这次很荣幸能参加阿里巴巴的实习应聘！</p>
          <p>我应聘的实习方向为前端开发工程师，下面我介绍一下我自身的情况以及对该岗位的理解，如有不对的地方，烦劳斧正。</p>
        </div>
        <div class="ct">
          <span class="title">
          学习经历
        </span>
        <hr class="tt">
        <p>上大学之前，我学过html、c语言、java（稍微过了一遍）等，觉得很有趣，因为用代码就可以解决一些实际问题。上了大学，我接触到算法、ACM这些比较难的知识，自我感觉不是很适合这些，前端更加适合我。</p>
        <p>刚刚接触html的时候，我就感觉不错，因为我自己写的代码可以在浏览器里面运行。大学的学习过程中，我接触了一些专业的学习网站，比如w3school。还有一些厉害的学长给予过我帮助，让我学习到css、javascript等，也接触了一些前端库以及框架，如jquery，bootstrap等。刚开始使用css和javascript的时候就被吸引了，html简陋的外观在css的修饰下十分美观，javascript也赋予了静态网页活泼的气息。至于jquery和bootstrap这些，是后面开发网站功能时使用过。</p>
        <p>大二的时候，我成为了师大家教中心网络宣传部的主管，主要负责家教网的运营、微信公众号信息的发布以及给中心提供技术支持。那时我接触到了php和mysql，并且使用这些后端语言为中心开发过一些网站功能。</p>
        </div>
        <div class="ct">
          <span class="title">
          项目经历
        </span>
        <hr class="tt">
          <p>我做的功能主要有以下这些：</p>
          <p>学校宣传项目无纸化办公（简称学宣），招新项目面试功能（简称招新），优秀教员评价功能（简称评价）。</p>
          <p><i class="iconfont iconhand-point-right"></i>学宣是我做过学校宣传项目之后想到要做的，因为当时学校的信息都是登记在簿子上，要核实、修改、删除都很麻烦，对我来说更是没有工作效率。我就用php和mysql以及前端语言开发了这个。首先是界面开发，主要用到html5，css3，javascript等，后端php接收信息并使用mysql语句对已经构造好的数据表进行操作。这样对信息的核实以及增删改查都方便很多。同时我还对信息按时间排序，最紧急的信息会显示在前面。</p>
          <p><i class="iconfont iconhand-point-right"></i>招新功能是中心当时无纸化办公的需要，大概用了两天就基本完成了，一周之后就完善上线了。这个功能可以对面试者进行签到，并把面试者分成一轮未面、一轮失败、二轮未面、二轮失败、三轮未面、三轮失败以及面试成功这几个状态，可以通过所属部门和面试状态进行筛选。点击一个面试者信息将可以进行评价。</p>
          <p><i class="iconfont iconhand-point-right"></i>评价功能主要是学校老师对中心施压，要求对教员进行分级。在这个项目中，我给原来教员面试安排界面设置了四个部门的评价项，根据这些评价来对教员进行分级，有黑名单、普通教员、优秀教员等。</p>
          <p以上是我自身的情况，这些项目的开发都是我一个人做的，通过这些项目，我也对网站运营和功能开发有了一定的认识，尽管php不是一个热门的语言。</p>
        </div>
        <div class="ct">
          <span class="title">
          个人理解
        </span>
        <hr class="tt">
        <p>我认为前端工程师的技术栈应该有：html、css、js以及一些好用的库和框架，能理解客户需求，能用这些语言（框架）进行相应功能的开发。目前我的技术肯定还是不够工作要求的，但是我相信我有这些基础会很快适应这份实习工作。</p>
        </div>
      </div>
    </div>
  </body>
</html>
