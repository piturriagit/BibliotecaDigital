let menu = document.getElementById("menu");
let options = menu.getElementsByClassName("option");
for (let option of options) {
  option.addEventListener("load", function() {
  let current = document.getElementsByClassName("active");
  alert(current[0].className + " " + this.innerHTML);
  current[0].className = current[0].className.replace("active ", "");
  this.className += "active ";
  });
}