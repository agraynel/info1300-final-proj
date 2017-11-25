const steps = ['#step1', '#step2', '#step3', '#step4', '#step5'];
function zoomIn(img) {
  img.style.width = "150%";
  var id = img.id
  for (let i = 0; i < 5; i++) {
    if (i == id) continue;
    var image = document.getElementById(i);
    image.style.opacity = 0.2;
    image.style.width = "50%";
  }
}

function zoomOut(img) {
  for (let i = 0; i < 5; i++) {
    var image = document.getElementById(i);
    image.style.opacity = 1;
    image.style.width = "100%";
  }
}
