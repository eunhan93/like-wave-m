<?php


header('Access-Control-Allow-Origin: *'); 
header("Access-Control-Allow-Credentials: true");
header('Content-type: application/json'); 




$reciveData = json_decode(file_get_contents('php://input'));

$sendData = '';
if(!empty($reciveData)){
global $wp_query;

$tit = $reciveData -> date . ' ' . $reciveData -> time . ' ' . $reciveData -> name . '님 예약 (전화번호 ' . $reciveData -> phone_num . ')';
    if(!empty($wp_query -> posts)){
      foreach($wp_query -> posts as $p){
        if($p -> post_title == $tit){
          $sendData = 'exist';
        }
      }

      if($sendData == ''){

        $insertPostArgs = [
          "post_type" => 'rsv',
          "post_title" => $tit,
          'post_status'  => 'publish',
          'meta_input' => [
            'reserv_name' => $reciveData -> name,
            'reserv_phone_num' => $reciveData -> phone_num,
            'reserv_date' => $reciveData -> date,
            'reserv_time' => $reciveData -> time
          ]
        ];
      
        wp_insert_post($insertPostArgs);
        $page = get_page_by_title($tit, OBJECT, 'rsv');

        if(!empty(get_post($page->ID))){
          $sendData = 'success';
        }
      }
  }
  
} else {
  $sendData = 'fail';
}



// echo json_encode(["response" => $sendData]);

echo '{"status":"' . $sendData . '"}';










// $sendData = '[]';
// if(!empty($reciveData)){
// $tit = $reciveData -> date . ' ' . $reciveData -> time . ' ' . $reciveData -> name . '님 예약 (전화번호 ' . $reciveData -> phone_num . ')';
//     if(!empty($wp_query -> posts)){
//       foreach($wp_query -> posts as $p){
//         if($p -> post_title == $tit){
//           $sendData['response'] = 'exist';
//         }
//       }

//       if(empty($sendData['response'])){

//         $insertPostArgs = [
//           "post_type" => 'rsv',
//           "post_title" => $tit,
//           'post_status'  => 'publish',
//           'meta_input' => [
//             'reserv_name' => $reciveData -> name,
//             'reserv_phone_num' => $reciveData -> phone_num,
//             'reserv_date' => $reciveData -> date,
//             'reserv_time' => $reciveData -> time
//           ]
//         ];
      
//         wp_insert_post($insertPostArgs);
//         $page = get_page_by_title($tit, OBJECT, 'rsv');

//         if(!empty(get_post($page->ID))){
//           $sendData['response'] = 'success';
//         }
//       }
//   }
  
// } else {
//   $sendData['response'] = 'fail';
// }

