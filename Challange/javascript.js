var ran1 =Math.floor(Math.random() * 6)+1;


var ranimg = "dice" + ran1 + ".png";

var ranimgsrc = ranimg;

var img1 = document.querySelectorAll("img")[0]; //img tag
img1.setAttribute("src",ranimgsrc);



var ran2 =Math.floor(Math.random() * 6)+1;
var ranimg2 = "dice" + ran2 + ".png";

var ranimgsrc2 = ranimg2;

var img2 = document.querySelectorAll("img")[1];
img2.setAttribute("src",ranimgsrc2);

if (ran1>ran2){
    document.querySelector("h1").innerHTML="🚩Player 1 Wins!!"
}
else if (ran2>ran1){
    document.querySelector("h1").innerHTML="🚩Player 2 Wins!!"
}
else{
    document.querySelector("h1").innerHTML="Draw!"
}