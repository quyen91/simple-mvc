<div class="contain">
<div class="news-content">
  <div class="row span12 big-img">
    <?    $result = model('news')->get_post(); ?>
    <img src="<? echo $result[0]['figimage'];?>" width="500" height="200" alt=""> 
    <div class="title-item">
    <a href=""><h3><? echo $result[0]['title'];?></h3></a>
      
    </div>
    

  </div>

  <div class="row span9">

   <div class="row-contain"> 
     <?php
     foreach ($post as $p) {
       # code...
     
       
       ?>
       <div class="item-news span6">
       <img href="" src="<?php echo $p['figimage'];?>" width="180" height="100"  alt="" >
       <div class="title-item">
       <a href="index.php?c=news&m=detailpage&id=<?echo $p['ID']?>"><h5><? echo $p['title'];?></h5></a>
        
      </div>
       </div>
       <?php
     }
     ?>
   </div>



 </div>
</div></div>


<script type="text/javascript">
  $('.main-nav li').removeClass('active');
  $('.main-nav li#news').addClass('active');
</script>
