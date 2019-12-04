<?php
	$d->reset();
    $sql_video = "select ten_$lang,tenkhongdau,links from #_video where type='video' and hienthi=1  order by stt,id desc";
	$d->query($sql_video);
	$video = $d->result_array();
?>
<div id="video">
	<div class="margin_auto">
		<div class="title"><h4>tổng hợp video clip</h4><p><?=$row_setting['slogan_'.$lang]?></p></div>
		<?php if(count($video) > 0){ ?>
		<div class="slick_video">
			<?php foreach ($video as $key => $val) { ?>
			<div class="video">
				<a data-fancybox href="<?=$val['links']?>"><img src="https://img.youtube.com/vi/<?=getYoutubeIdFromUrl($val['links'])?>/hqdefault.jpg" alt="<?=$val['ten_'.$lang]?>"></a>
				<h3><a data-fancybox href="<?=$val['links']?>"><?=$val['ten_'.$lang]?></a></h3>
			</div>
			<?php } ?>
		</div>
		<?php }else{ ?><div class="updating">Nội dung đang cập nhật</div><?php } ?>
	</div>
</div>