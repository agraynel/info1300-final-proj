function zoomFirst() {
  initSlider();
  for (let i = 1; i < 5; i++) {
    var image = document.getElementById(i);
    image.style.opacity = 0.2;
    image.style.width = "100%";
  }
}

function zoomIn(img) {
  initSlider();
  img.style.width = "300%";
  img.style.opacity = 3;
  var id = img.id;
  for (let i = 0; i < 5; i++) {
    if (i == id) continue;
    var image = document.getElementById(i);
    image.style.opacity = 0.2;
    image.style.width = "100%";
  }
}

function initSlider() {
  for (let i = 0; i < 5; i++) {
    var image = document.getElementById(i);
    image.style.opacity = 1;
    image.style.width = "100%";
  }
}
