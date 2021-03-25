const swiper = new Swiper('.section01 .swiper-container', {
  // Default parameters
  slidesPerView: 1,
  effect : 'fade',
  loop : true,
  speed : 1000,
  autoplay: {
    delay : 5000
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
})


function checkAndDo(frontSection02, frontSection03) {
  if((window.innerHeight + window.scrollY) > frontSection02){
    document.querySelector('.home .section02').classList.add('on');
    document.querySelector('.home .section02-east').classList.add('on');
    document.querySelector('.home .section02-west').classList.add('on');
  }
  
  if((window.innerHeight + window.scrollY) > frontSection03){
    document.querySelector('.home .section03').classList.add('on');
    document.querySelector('.home .section03-park').classList.add('on');
  }
}


window.onload = function(){
  const frontSection02 = document.querySelector('.home .section02').getBoundingClientRect().top;
  const frontSection03 = document.querySelector('.home .section03').getBoundingClientRect().top;

  checkAndDo(frontSection02, frontSection03)

  window.addEventListener('scroll', function(){
    checkAndDo(frontSection02, frontSection03)
  })
}


const swiper04 = new Swiper('.section04 .swiper-container', {
  // Default parameters
  slidesPerView: 2,
  spaceBetween: 25,
  slidesPerGroup: 2,
  loop : true,
  speed : 2000,
  autoplay: {
    delay : 3000
  },
})
