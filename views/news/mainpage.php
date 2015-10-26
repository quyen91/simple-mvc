<div class="contain">
<div class="news-content">
  <div class="row span12">
     <?php
     foreach ($post as $p) {
       # code...
     
       
       ?>
   <div class="item-news span12">
     <img class="news-thumb span4" href="" src="<?php echo $p['figimage'];?>"   width="180" height="100"  alt="" >
       <div class="right-item-news span8">
          <div class="title-item">
         <a href="index.php?c=news&m=detailpage&id=<?echo $p['ID']?>"><h5><? echo $p['title'];?></h5></a>
         <p><small><?echo $p['time']?></small></p>
         </div>
         <div class="new-slogan span8">
           <p><?echo $p['slogan']?><br><a href="index.php?c=news&m=detailpage&id=<?echo $p['ID']?>">Chi tiết[...]</a></p>
         </div>..
      </div>
       </div>
       <?php
     }
     ?>
   </div>
   



 </div>
</div>


<script type="text/javascript">
  $('.main-nav li').removeClass('active');
  $('.main-nav li#news').addClass('active');
</script>
