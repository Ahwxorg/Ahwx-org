var xmlhttp = new XMLHttpRequest();
var url = "https://api.github.com/users/Ahwxx/repos";
xmlhttp.onreadystatechange = function () {
  if (this.readyState == 4 && this.status == 200) {
    var arr = JSON.parse(this.responseText);
    var out = "";
    var i;
    for (i = 0; i < arr.length; i++) {
      out += '<div class="project"><div class="pink"><a href="' + arr[i].html_url + '">' + arr[i].name + '</a></div> ' + arr[i].description + '<br> ' + arr[i].language + '</div> <br>';
    }
    document.getElementById("projects").innerHTML += out;
  }
};
xmlhttp.open("GET", url, true);
xmlhttp.send();
