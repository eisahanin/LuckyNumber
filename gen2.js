window.onscroll = function() {unless()};

function unless() {
  if (document.documentElement.scrollTop > 120) {
    document.getElementById("unless").className = "unless";
  }
}
