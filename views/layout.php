<!DOCTYPE html>
<html>
<head>
<title>Simple MVC</title>
<meta charset='utf-8' content="content">
<link rel="stylesheet" href="./styles/css/bootstrap.min.css">
<link rel="stylesheet" href="./styles/css/styles.css">
<script type="text/javascript" src="./styles/js/jquery.js"></script>
<script type="text/javascript" src="./styles/js/private.js"></script>

</head>
<body>
  <div class='container'>
    <div class='navbar navbar-inverse bg'>
      <div class='navbar-inner nav-collapse' style="height: auto;">
        <ul class="main-nav nav">
            <li class="active" id="home"><a href="index.php">Trang chủ</a></li>
            <li id="news"><a href="index.php?c=news&m=mainpage">Tin tức</a></li>
            <li id="products"><a href="index.php?c=products&m=mainpage">Sản phẩm</a></li>
            <li class="cart_nav"><a href="index.php?c=cart&m=view">Giỏ hàng(<?if(isset($_SESSION['cart'])) echo count($_SESSION['cart']); else echo 0;?>)</a> </li>
        </ul>
      </div>
    </div>
    <div id='content' class='row-fluid'>
      <div class='span9 main'>
        <?php include ROOT . DS . 'views' . DS . $template_file; ?>
      </div>
      <div class='span3 sidebar'>
        <?php include ROOT . DS . 'views' . DS . 'blocks' . DS . 'sidebar.php'; ?>
      </div>
    </div>
  </div>
</body>
</html>
