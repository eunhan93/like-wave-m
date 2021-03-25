const anchors = document.querySelectorAll('header .gnb a');


console.log()
anchors.forEach(el => {
  if(el.href !== 'http://localhost/wp-1/#' && el.href === window.location.href){
    el.classList.add('on');
  }
})