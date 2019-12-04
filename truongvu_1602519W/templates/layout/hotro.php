<?php
  $d->reset();
  $sql = "select * from #_yahoo where hienthi=1 and type ='yahoo' order by stt";
  $d->query($sql);
  $row_yahoo = $d->result_array();
?>
<div class="hotro">
  <div class="phone"><img src="images/hotro.png" alt="Hỗ trợ"><span><?=$row_setting['hotline']?></span></div>
  <div class="khung">
  <?php for($i=0,$count_ya=count($row_yahoo);$i<$count_ya;$i++){?>
    <div class="yahoo">
      <p class="hinh">
        <?php if($row_yahoo[$i]['skype'] != ''){ ?>
        <a target="_blank" href="skype:<?=$row_yahoo[$i]['skype']?>?chat">
          <img src="images/skype.png" title="skype" alt=""> 
        </a>
        <?php } ?>
         <?php if($row_yahoo[$i]['zalo'] != ''){ ?>
        <a target="_blank" href="http://zalo.me/<?=$row_yahoo[$i]['zalo']?>">
         <img src="images/zalo.png" title="zalo" alt=""></a>
        <?php } ?>
        <span><?=$row_yahoo[$i]['ten_'.$lang]?></span>
       </p>
       <p class="thongtin">
         <span><?=$row_yahoo[$i]['email']?></span>
         <span><?=$row_yahoo[$i]['dienthoai']?></span>
       </p>
     </div>
   <?php }?>
   </div>
 </div>