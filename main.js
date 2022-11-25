
var boolClick=false;
function dropMenu(){
  if(!boolClick)
  {
    document.getElementsByClassName('navbar')[0].style.animation = 'none';
    document.getElementsByClassName('navbar')[0].offsetHeight;
    document.getElementsByClassName('navbar')[0].style.animation = null; 
    document.getElementsByClassName('navbar')[0].style.animation='navbarHeightAnimation 1s ease-in-out forwards';
    document.getElementsByClassName('drop_menu')[0].style.animation = 'none';
    document.getElementsByClassName('drop_menu')[0].offsetHeight;
    document.getElementsByClassName('drop_menu')[0].style.animation = null; 
    document.getElementsByClassName('drop_menu')[0].style.animation='dropMenuAnimation 1s ease-in-out forwards';
    document.getElementById('menuBtn').style.animation = 'none';
    document.getElementById('menuBtn').offsetHeight;
    document.getElementById('menuBtn').style.animation = null; 
    document.getElementById('menuBtn').style.animation='dropMenuBtnAnimation 1s ease-in-out forwards';
  }
  else
  {
    document.getElementsByClassName('navbar')[0].style.animation = 'none';
    document.getElementsByClassName('navbar')[0].offsetHeight; /* trigger reflow */
    document.getElementsByClassName('navbar')[0].style.animation = null; 
    document.getElementsByClassName('navbar')[0].style.animation='navbarHeightAnimation 1s ease-in-out forwards reverse';
    document.getElementsByClassName('drop_menu')[0].style.animation = 'none';
    document.getElementsByClassName('drop_menu')[0].offsetHeight;
    document.getElementsByClassName('drop_menu')[0].style.animation = null; 
    document.getElementsByClassName('drop_menu')[0].style.animation='dropMenuAnimation 1s ease-in-out forwards reverse';
    document.getElementById('menuBtn').style.animation = 'none';
    document.getElementById('menuBtn').offsetHeight;
    document.getElementById('menuBtn').style.animation = null; 
    document.getElementById('menuBtn').style.animation='dropMenuBtnAnimation 1s ease-in-out forwards reverse';
  }
  boolClick=!boolClick;
};
document.querySelector("#mne18").onclick=function(){
  document.querySelector('.modal').style.display = 'none';
};
document.querySelector("#mnenet18").onclick=function closeWindow(){
  document.location.href="/";
};
document.querySelector("#closeBtnItemInfo").onclick=function closeWindow(){
  document.getElementsByClassName("modal").style.display="none";
};
document.querySelector("#closeBtn").onclick=function closeWindow(){
  document.location.href="/";
};
try{
  var notification =document.getElementById('notification');
  notification.onclick=function() {
    notification.style.display='none';
  };
}
catch
{
  null;
}
// var product = document.getElementsByClassName('product');
// product[0].onclick=function(){
//   alert(product[0].getElementsByTagName('b')[0].textContent);
// }
