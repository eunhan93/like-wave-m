window.onload = function(){
  const xdsoft_calendar = document.querySelector('.xdsoft_calendar');
  const calendar_current = document.querySelector('.xdsoft_calendar .xdsoft_current');
  const xdsoft_timepicker = document.querySelector('.xdsoft_timepicker .xdsoft_time_variant');
  const timepicker_current = document.querySelector('.xdsoft_timepicker .xdsoft_time_variant .xdsoft_current');
  
  
  document.getElementById('rsv-date').value = `${calendar_current.dataset.year}년 ${Number(calendar_current.dataset.month) + 1}월 ${calendar_current.dataset.date}일`
  
  document.getElementById('rsv-time').value = `${timepicker_current.dataset.hour}시 ${timepicker_current.dataset.minute}일`

  xdsoft_calendar.addEventListener('click', function(e) {
    let rsvDate;
    if(e.target.nodeName === 'DIV' && !e.target.parentElement.classList.contains('xdsoft_disabled')){
      rsvDate = e.target.parentNode.dataset
      document.getElementById('rsv-date').setAttribute('value', `${rsvDate.year}년 ${Number(rsvDate.month) + 1}월 ${rsvDate.date}일`)
    } else if(e.target.nodeName === 'TD' && !e.target.classList.contains('xdsoft_disabled')){
      rsvDate = e.target.dataset
      document.getElementById('rsv-date').setAttribute('value', `${rsvDate.year}년 ${Number(rsvDate.month) + 1}월 ${rsvDate.date}일`)
    }
  })

  xdsoft_timepicker.addEventListener('click', function(e) {
    document.getElementById('rsv-time').setAttribute('value',`${e.target.dataset.hour}시 ${e.target.dataset.minute}분`)
  })







}



const form = document.querySelector('.rsv-form')



form.addEventListener('submit', function(e) {
  e.preventDefault();

  if(document.getElementById('rsv-name').value === ''){
    alert('이름을 입력하세요');
    return false;
  }

  if(document.getElementById('rsv-phone').value === ''){
    alert('전화번호를 입력하세요');
    return false;

  }

  fetch('http://localhost/wp-1/rsv/', {
    method : 'POST',
    headers: {
          "Access-Control-Allow-Origin": '*',
          "Access-Control-Allow-Credentials": "true",
          "Content-Type": "application/json",
        },
          body: JSON.stringify({
            name: document.getElementById('rsv-name').value,
            phone_num : document.getElementById('rsv-phone').value,
            date : document.getElementById('rsv-date').value,
            time : document.getElementById('rsv-time').value,
          }),
  }).then(data => data.json()).then(res => {
    if(res.status === 'fail'){
      alert('예약을 하지 할 수 없습니다. 다음에 다시 시도해주세요.')
    } else if (res.status === 'exist'){
      alert('예약이 이미 존재합니다. 예약정보를 분실하셨다면 고객센터로 문의 바랍니다.')
    } else if(res.status === 'success'){
      alert('예약이 완료되었습니다. 예약을 취소하실 경우 고객센터로 문의 바랍니다.');
    }
  })
})

