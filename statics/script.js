$(function(){
  setInterval(function() {
    // Create a newDate() object and extract the seconds of the current time on the visitor's
    var seconds = new Date().getSeconds();
    // Add a leading zero to seconds value
    $("#sec").html((seconds < 10 ? "0" : "") + seconds + " ");
  }, 1000);

  setInterval(function() {
    // Create a newDate() object and extract the minutes of the current time on the visitor's
    var minutes = new Date().getMinutes();
    // Add a leading zero to the minutes value
    $("#min").html((minutes < 10 ? "0" : "") + minutes + ':');
  }, 1000);

  setInterval(function() {
    // Create a newDate() object and extract the hours of the current time on the visitor's
    var hours = new Date().getHours();
    var hours = hours > 12 ? hours - 12 : hours;
    // Add a leading zero to the hours value
    $("#hours").html((hours < 10 ? "" : "") + hours + ':');
  }, 1000);


  setInterval(function() {

    var hours = new Date().getHours();
    var mid = 'am';
    if (hours == 0) {
      hours = 12;

    } else if (hours > 12) {
      hours = hours % 12;
      mid = 'pm';
    }
    $("#ampm").html(mid);

  }, 1000);


    var today = new Date();
    var curHr = today.getHours();
    var ele = document.getElementById("ampm");

    if (curHr < 12) {
      ele.innerHTML = 'am';
    } else {
      ele.innerHTML = 'pm';
    }
    greeting();
});

function greeting() {
var today = new Date();
var curHr = today.getHours();
var element = document.getElementById("hello");

if (curHr < 12) {
  element.innerHTML = 'Good Morning <span id="username">User</span>! Welcome to Your Home Page';
} else if (curHr < 18) {
  element.innerHTML = 'Good Afternoon <span id="username">User</span>! Welcome to Your Home Page';

} else {
  element.innerHTML = 'Good Evening <span id="username">User</span>! Welcome to Your Home Page';
      }
}


function newElement() {
  var li = document.createElement("li");
 var inputValue = document.getElementById("myInput").value;
 var t = document.createTextNode(inputValue);
 li.appendChild(t);
 if (inputValue === '') {
   alert("You must write something!");
 } else {
   document.getElementById("myUL").appendChild(li);
 }
 document.getElementById("myInput").value = "";

 var span = document.createElement("SPAN");
 var txt = document.createTextNode("\u00D7");
 span.className = "close";
 span.appendChild(txt);
 li.appendChild(span);

 for (i = 0; i < close.length; i++) {
   close[i].onclick = function() {
     var div = this.parentElement;
     div.style.display = "none";
   }
 }
}
