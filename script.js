var counter = document.querySelector(".counter");
var visits = localStorage.getItem("page_view");

// Check if page_view entry is present
if (visits) {
  visits = Number(visits) + 1;
  localStorage.setItem("page_view", visits);
} else {
  visits = 1;
  localStorage.setItem("page_view", 1);
}

counter.innerHTML = "You are visitor " + visits;
