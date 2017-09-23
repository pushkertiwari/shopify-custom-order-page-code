<?php
  //echo "<pre>";
  // session_start();
  require __DIR__.'/vendor/autoload.php';
  use phpish\shopify;

  require __DIR__.'/conf.php';
  //require __DIR__.'../app/include/DBConnection.php';
  include_once '../app/include/DBConnection.php';
  if(isset($_SESSION['shop'])){
    $storeName = $_SESSION['shop'];
    $query = $db->query("SELECT * FROM tbl_usersettings WHERE store_name='".$storeName."' ORDER BY id DESC LIMIT 1");
    $data = $query->fetch_assoc();
    $access_token = $data['access_token'];
  }

  $shop = $storeName;
  $token = $access_token;

  $shopify= shopify\client($shop, SHOPIFY_APP_API_KEY, $token);

$themes = $shopify('GET /admin/themes.json');
foreach ($themes as  $value) {
  if($value['role'] == 'main') {
    $theme_ids = $value['id'];
    //print_r($theme_ids);
  }
}
   
try
{
  $products = $shopify("GET /admin/products.json");
 $Orders = $shopify("GET /admin/orders.json");
  $getResults = $db->query("SELECT id,sales,revenue,discount_code FROM tbl_popup WHERE store_name='".$storeName."'");
  while ($fetchResults = $getResults->fetch_assoc()) {
    foreach ($Orders as $value) {
      if($fetchResults['discount_code'] == $value['discount_codes'][0]['code']) {
        $getDiscounts = $db->query("SELECT order_id FROM tbl_discounts WHERE order_number='".$value['order_number']."'");
        if(mysqli_num_rows($getDiscounts) > 0) {
            //echo "string <br>";
        } else {
          $db->query("INSERT INTO `popshopapp`.`tbl_discounts` (`order_id`, `total_price`, `order_number`,`popup_id`) VALUES ('".$value['id']."', '".$value['total_price']."', '".$value['order_number']."','".$fetchResults['id']."')");  
        }
      }
    }
  }
  //print_r($aset_get);
  //$delet = $shopify("DELETE /admin/script_tags/$ids.json");
 // print_r($delet);
 // $scropt = $shopify('GET /admin/script_tags.json');
  /*if($scropt['id'] != ''){
  }*/
   $aset_get = $shopify("GET /admin/themes/$theme_ids/assets.json?asset[key]=assets/pop_up.js&theme_id=$theme_ids");
    $scropt = $shopify('GET /admin/script_tags.json');
  $user_details=$shopify('GET /admin/shop.json');
}

catch (shopify\ApiException $e)
{
      # HTTP status code was >= 400 or response contained the key 'errors'
  /*echo $e;
  print_r($e->getRequest());
  print_r($e->getResponse());*/
}
catch (shopify\CurlException $e)
{
      # cURL error
  /*echo $e;
  print_r($e->getRequest());
  print_r($e->getResponse());*/
}


    //$variant_id=$variant_query[0]['id'];
     //echo fbq('init', '".$pixel_id."');
  if($scropt[0] != ''){
  foreach($scropt as $scrp){
  //echo $scrp['id']."<br>";
    $delet = $shopify('DELETE /admin/script_tags/'.$scrp["id"].'.json');
  //print_r($delet);
  }
}
   // print_r($scropt);

    //echo $ids;
 // print_r($aset_get ); //second file data aa raha hai
$pos = strrpos($aset_get['public_url'], '?');
$id = $pos === false ? $aset_get['public_url'] : substr($aset_get['public_url'], $pos + 1);


$data = array(
 'script_tag' => array(
  "event" => "onload", 
  "src"=> $aset_get['public_url'],

  )
 );


try
{

 $fb_query = $shopify('POST /admin/script_tags.json',$data);
 //print_r($fb_query);die;

}

catch (shopify\ApiException $e)
{
      # HTTP status code was >= 400 or response contained the key 'errors'
 /* echo $e;
  print_r($e->getRequest());
  print_r($e->getResponse());*/
}
catch (shopify\CurlException $e)
{
      # cURL error
 /* echo $e;
  print_r($e->getRequest());
  print_r($e->getResponse());*/
}



    //$variant_id=$variant_query[0]['id'];
//print_r($fb_query); 

$_SESSION['id'] = $fb_query['id'];  
?>
