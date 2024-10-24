// add hovered class to selected list item
let list = document.querySelectorAll(".navigation li");

function activeLink() {
  list.forEach((item) => {
    item.classList.remove("hovered");
  });
  this.classList.add("hovered");
}

list.forEach((item) => item.addEventListener("mouseover", activeLink));

// Menu Toggle
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function () {
  navigation.classList.toggle("active");
  main.classList.toggle("active");
};

// click events for cards
// Go to ballot Page
function gotoVotePage(){
  window.location.href='ballot.html';
}
// Go to results Page
function gotoresults(){
  window.location.href='displayresults.php';
}
// Go To Register Page
function gotoRegisterpage(){
  window.location.href='ad_register.html';
}

function gotoAddCandidate(){
  window.location.href='add_candidate.html';
}

