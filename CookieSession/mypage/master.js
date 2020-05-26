window.onload = function(){
  //document.querySelector(".state").innerHTML = Date();
  var edu = document.querySelectorAll(".tag")[0];
  edu.classList.add("active");
  var chos = document.querySelectorAll(".chos");
  var ct = document.querySelectorAll(".ct");
  var content = document.querySelector(".content");
  chos.forEach(act);

  function act(value,index,array){
    value.onclick = click;

    function click(){
      chos.forEach(hide);
      this.children[0].classList.add("active");
      for(var i = 0;i < ct.length;i ++)
      {
        ct[i].style.display = "none";
      }
      var num = 0;
      for(var i = 0;i < chos.length;i ++)
      {
        if(this === chos[i])
        {
          num = i;
          console.log(num);
          break;
        }
      }
      ct[num].style.display = "block";
      ct[num].style.position = "relative";
      ct[num].style.animation = "mymove 0.4s ease-out";
      function hide(value,index,array)
      {
        var tag = value.children[0];
        tag.classList.remove("active");
      }
    }
  }

  for(var i = 0;i < ct.length;i ++)
  {
    ct[i].style.width = content.offsetWidth - 40 + "px";
    ct[i].style.height = content.offsetHeight -40 + "px";
  }

  for(var i = 0;i < ct.length;i ++){
    ct[i].style.display = "none";
  }
  ct[0].style.display = "block";
}

// window.onresize = function(){
//   var sideBar = document.querySelector(".sideBar");
//   var content = document.querySelector(".content");
//   sideBar.style.width = window.document.body.offsetWidth * 0.3;
//   content.style.width = window.document.body.offsetHeight * 0.7;
// }
