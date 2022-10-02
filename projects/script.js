const projects = document.getElementById("projects");

                    var xmlhttp = new XMLHttpRequest();
                    var url = "https://api.github.com/users/Ahwxorg/repos";
                    xmlhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            var arr = JSON.parse(this.responseText);
                            var out = "";
                            var i;
                            for (i = 0; i < arr.length; i++) {
                                if (i <= 100) {
                                    out += `
                                        <div class="project">
                                            <div class="big">` + arr[i].name + `</div>`;
                                    if (arr[i].description != null) {
                                        out += `<p class="ghs">` + arr[i].description + `</p>`;
                                    }
                                    if (arr[i].language != null) {
                                        out += `<div class="ghs">
                                                    <div>` + arr[i].language + `</div>
                                                </div>`;
                                    }
                                    out += `<div class="ghs">
                                                <a href="` + arr[i].html_url + `">Repository</a>
                                            </div>
                                        </div>`;
                                }
                            }
                            projects.innerHTML = out;
                        }
                    };
                    xmlhttp.open("GET", url, true);
                    xmlhttp.send();

