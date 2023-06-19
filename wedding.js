var audio = document.getElementById("audio");
var playPauseBTN = document.getElementById("playPauseBTN");
var count = 0;

document.addEventListener("DOMContentLoaded", function () {
  var audio = new Audio("jazz.mp3");
  audio.addEventListener("canplaythrough", function () {
    audio.play();
    playPauseBTN.innerHTML = "❚❚";
  });
});

function playPause() {
  if (count == 0) {
    count = 1;
    audio.play();
    playPauseBTN.innerHTML = "❚❚";
  } else {
    count = 0;
    audio.pause();
    playPauseBTN.innerHTML = "►";
  }
}

function stop() {
  playPause();
  audio.pause();
  audio.currentTime = 0;
  playPauseBTN.innerHTML = "Play ►";
}

// Menambahkan autoplay saat halaman dimuat
window.addEventListener("DOMContentLoaded", function () {
  audio.autoplay();
  playPauseBTN.innerHTML = "❚❚";
});

function reveal() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", reveal);
