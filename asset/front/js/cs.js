const cs_anchors = document.querySelectorAll('.section1 a')


cs_anchors.forEach(el => {
  if(window.location.href.indexOf(el.href) >= 0){
    el.parentElement.classList.add('t-p');
  }
})



