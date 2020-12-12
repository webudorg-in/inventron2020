function slidec(home) {
  var travi = home;
  window.location.href = "#" + travi;
}

var deadline = new Date("dec 23, 2020 10:00:00").getTime(); 
          
          var x = setInterval(function() { 
          
          var now = new Date().getTime(); 
          var t = deadline - now; 
          var days = Math.floor(t / (1000 * 60 * 60 * 24)); 
          var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60)); 
          var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60)); 
          var seconds = Math.floor((t % (1000 * 60)) / 1000); 
          document.getElementById("day").innerHTML =days ; 
          document.getElementById("hour").innerHTML =hours; 
          document.getElementById("minute").innerHTML = minutes; 
          
          if (t < 0) { 
              clearInterval(x); 
              document.getElementById("demo").innerHTML = "TIME UP"; 
              document.getElementById("day").innerHTML ='0'; 
              document.getElementById("hour").innerHTML ='0'; 
              document.getElementById("minute").innerHTML ='0' ; 
              } 
          }, 1000);