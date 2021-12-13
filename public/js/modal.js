function toggleMenu() {
  var modal = document.getElementById("myModal");    
  if(modal.style.display == "block") {
    modal.style.display = "none";
  }
  else {
    modal.style.display = "block";
  }
}

function ancreModalClose() {
  var modal = document.getElementById("myModal");
  if(modal.style.display == "block") {
    modal.style.display = "none";
  }
}

// var span = document.getElementsByClassName("optionMenu");
// span.onclick = function() {
//   modal.style.display = "none";
// }