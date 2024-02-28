window.onscroll = function() {unless()};

function unless() {
  if (document.documentElement.scrollTop > 120) {
    document.getElementById("unless").className = "unless";
  }
}

document.onreadystatechange = function () {
          if (document.readyState !== "complete") {
              document.querySelector(
                  "main").style.visibility = "hidden";
              document.querySelector(
                  ".overlay").style.visibility = "visible";
          } else {
              document.querySelector(
                  ".overlay").style.display = "none";
              document.querySelector(
                  "main").style.visibility = "visible";
          }
      };
