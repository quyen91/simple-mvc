<?php
function products_mainpage() {
    $data = array();
    // model('')->fc();
    $data['product'] = model('products')->get_product();
    $data['template_file'] = 'products/product_page.php';
    render('layout.php', $data);

}
function products_detail(){

  $data['product'] =   model('products')->get_product_byid($_GET['id']);
  $data['template_file'] = 'products/productdetail.php';
  render('layout.php', $data);
}
function products_checkout(){
  if(isset($_POST['submit'])){

    $temp = array();
    $temp['name_customer'] = $_POST['name_customer'];
    $temp['email'] = $_POST['email'];
    $temp['phone'] = $_POST['phone'];
    $temp['bank'] = $_POST['bank'];
    $temp['sum'] = $_GET['s'];

    $data['bill'] = $temp;
    $data['cart'] = model('products')->get_product_session();
    $data['template_file'] = 'products/paybill.php';
    render('layout.php', $data);
    unset($_SESSION['cart']);
  }
  elseif(isset($_SESSION['cart'])){
    $data['cart'] = model('products')->get_product_session();
    $data['template_file'] = 'products/checkout.php';
    render('layout.php', $data);


  }
}
function products_viewAlltype(){
  $data = array();
    $data['product'] = model('products')->get_product_alltype();
    $data['template_file'] = 'products/alltype.php';
    render('layout.php', $data);

}
function products_viewOnetype(){

  //phan trang
 


  $data = array();
   //var_dump($data['pagi']);die();
    $data['product'] = model('products')->get_product_bytype();
    $data['template_file'] = 'products/product_page.php';
    render('layout.php', $data);
}
function products_pagination(){
    $page = $_GET['page'];
     $id = $_GET['type'];
    $where = "WHERE `type`=$id";

    $data['product'] = model('products')->paginate($page,2,$where);
    $data['product_all'] = model('products')->get_product_bytype();
    //var_dump( $data['product_all']);die();
    $data['template_file'] = 'products/product_page.php';
    render('layout.php', $data);
  }
 ?>
}
