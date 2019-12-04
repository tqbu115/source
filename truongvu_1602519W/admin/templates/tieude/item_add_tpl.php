<script type="text/javascript">		
	$(document).ready(function() {
		$('.chonngonngu li a').click(function(event) {
			var lang = $(this).attr('href');
			$('.chonngonngu li a').removeClass('active');
			$(this).addClass('active');
			$('.lang_hidden').removeClass('active');
			$('.lang_'+lang).addClass('active');
			return false;
		});
		$('.update_stt').keyup(function(event) {
			var id = $(this).attr('rel');
			var table = 'product_photo';
			var value = $(this).val();
			var ten = 'stt';
			$.ajax ({
				type: "POST",
				url: "ajax/update_stt.php",
				data: {id:id,table:table,value:value,ten: ten},
				success: function(result) {
				}
			});
		});
		$('.delete_images').click(function(){
			if (confirm('Bạn có muốn xóa hình này ko ? ')) {
				var id = $(this).attr('title');
				var table = 'product_photo';
				var links = "../upload/product/";
				$.ajax ({
					type: "POST",
					url: "ajax/delete_images.php",
					data: {id:id,table:table,links:links},
					success: function(result) { 
					}
				});
				$(this).parent().slideUp();
			}
			return false;
		});
	});

</script>
<div class="wrapper">
	<div class="control_frm" style="margin-top:25px;">
		<div class="bc">
			<ul id="breadcrumbs" class="breadcrumbs">
				<li><a href="index.php?com=tieude&act=add<?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?><?=$_REQUEST['id_parent']!=''?"&id_parent=".$_REQUEST['id_parent']:""?>"><span>Thêm <?=$title_main?></span></a></li>
				<li class="current"><a href="#" onclick="return false;">Thêm</a></li>
			</ul>
			<div class="clear"></div>
		</div>
	</div>

	<form name="supplier" id="validate" class="form" action="index.php?com=tieude&act=save<?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?><?=$_REQUEST['id_parent']!=''?"&id_parent=".$_REQUEST['id_parent']:""?>" method="post" enctype="multipart/form-data">
		<div class="widget">

			<div class="title chonngonngu">
				<ul>
					<li><a href="vi" class="active tipS validate[required]" title="Chọn tiếng việt "><img src="./images/vi.png" alt="" class="tiengviet" />Tiếng Việt</a></li>
					<li><a href="en" class="tipS validate[required]" title="Chọn tiếng anh "><img src="./images/en.png" alt="" class="tienganh" />Tiếng Anh</a></li>
				</ul>
			</div>	
			<div class="formRow lang_hidden lang_vi active">
				<label>Tiêu đề</label>
				<div class="formRight">
					<input type="text" name="ten_vi" title="Nhập tên danh mục" id="ten_vi" class="tipS validate[required]" value="<?=@$item['ten_vi']?>" />
				</div>
				<div class="clear"></div>
			</div>
			<div class="formRow lang_hidden lang_en">
				<label>Tiêu đề (Tiếng anh)</label>
				<div class="formRight">
					<input type="text" name="ten_en" title="Nhập tên danh mục" id="ten_en" class="tipS validate[required]" value="<?=@$item['ten_en']?>" />
				</div>
				<div class="clear"></div>
			</div>
			<?php if($mau  == "true"){ ?>
				<div class="formRow">
					<label>màu sắc </label>
					<div class="formRight">
						<input type="text" name="color" title="Nhập color" id="color" class="tipS color" value="<?=@$item['color']?>" />
					</div>
					<div class="clear"></div>
				</div>
			<?php } if($config_mota=='true'){ ?>
				<div class="formRow lang_hidden lang_<?=$l?> <?=$key==0?'active':''?>">
					<label>Hotline</label>
					<div class="formRight">
						<input type="text" name="mota" title="Nhập tên danh mục" id="mota" class="tipS validate[required]" value="<?=@$item['mota']?>" />
						<!-- <textarea rows="4" cols="" id="mota" name="mota"><?=@$item['mota']?></textarea> -->
					</div>
					<div class="clear"></div>
				</div>
			<?php } ?>
			<?php if($config_giatri=='true'){?>
				<div class="formRow">
					<label>Giá trị: </label>
					<div class="formRight">
						<input type="text" name="giatri" title="Nhập tên danh mục" id="giatri" class="tipS validate[required]" value="<?=@$item['giatri']?>" />
					</div>
					<div class="clear"></div>
				</div>
			<?php } ?>
			<?php if($config_images=='true'){ ?>
				<div class="formRow">
					<label>Tải hình ảnh:</label>
					<div class="formRight">
						<input type="file" id="file" name="file" />
						<img src="./images/question-button.png" alt="Upload hình" class="icon_question tipS" original-title="Tải hình ảnh (ảnh JPEG, GIF , JPG , PNG)">
						<div class="note"> width : <?php echo _width_thumb;?> px , Height : <?php echo _height_thumb;?> px </div>
					</div>
					<div class="clear"></div>
				</div>
				<?php if($_GET['act']=='edit'){?>
					<div class="formRow">
						<label>Hình Hiện Tại :</label>
						<div class="formRight">

							<div class="mt10"><img src="<?=_upload_tieude.$item['photo']?>"  alt="NO PHOTO" width="<?=_width_thumb?>" /></div>

						</div>
						<div class="clear"></div>
					</div>
				<?php } ?>
			<?php } ?>
			<?php if($config_img != "false"){ ?>
				<div class="formRow">
					<label>Hình ảnh kèm theo: </label>
					<div class="formRight"><div class="note"> width : <?php echo _width_thumb_img*$ratio_;?> px , Height : <?php echo _height_thumb_img*$ratio_;?> px </div></div>
					<div class="formRight">
						<a class="file_input" data-jfiler-name="files" data-jfiler-extensions="jpg, jpeg, png, gif"><img src="images/image_add.png" alt="" width="100"></a> 
						<?php if($act=='edit'){?>
							<?php if(count($ds_photo)!=0){?>       
								<?php for($i=0;$i<count($ds_photo);$i++){?>
									<div class="item_trich">
										<img class="img_trich" width="140px" height="110px" src="<?=_upload_product.$ds_photo[$i]['photo']?>" />
										<input type="text" rel="<?=$ds_photo[$i]['id']?>" value="<?=$ds_photo[$i]['stt']?>" class="update_stt tipS" />
										<a class="delete_images" title="<?=$ds_photo[$i]['id']?>"><img src="images/delete.png"></a>
									</div>
								<?php } ?>
							<?php }?>
						<?php }?>
					</div>
					<div class="clear"></div>
				</div> 	
			<?php } ?>
			<div class="formRow">
				<label>Hiển thị : <img src="./images/question-button.png" alt="Chọn loại" class="icon_que tipS" original-title="Bỏ chọn để không hiển thị danh mục này ! "> </label>
				<div class="formRight">

					<input type="checkbox" name="hienthi" id="check1" value="1" <?=(!isset($item['hienthi']) || $item['hienthi']==1)?'checked="checked"':''?> />
					<label>Số thứ tự: </label>
					<input type="text" class="tipS" value="<?=isset($item['stt'])?$item['stt']:1?>" name="stt" style="width:20px; text-align:center;" onkeypress="return OnlyNumber(event)" original-title="Số thứ tự của danh mục, chỉ nhập số">
				</div>
				<div class="clear"></div>
			</div>

		</div>  
		<div class="widget">


			<div class="formRow">
				<div class="formRight">
					<input type="hidden" name="type" id="id_this_type" value="<?=$_REQUEST['type']?>" />
					<input type="hidden" name="id" id="id_this_post" value="<?=@$item['id']?>" />
					<input type="submit" class="blueB" onclick="TreeFilterChanged2(); return false;" value="Hoàn tất" />
					<a href="index.php?com=tieude&act=man<?php if($_REQUEST['type']!='') echo'&type='. $_REQUEST['type'];?><?=$_REQUEST['id_parent']!=''?"&id_parent=".$_REQUEST['id_parent']:""?>" onClick="if(!confirm('Bạn có muốn thoát không ? ')) return false;" title="" class="button tipS" original-title="Thoát">Thoát</a>
				</div>
				<div class="clear"></div>
			</div>

		</div>
	</form>        
</div>
<script>
	$(document).ready(function() {
		$('.file_input').filer({
			showThumbs: true,
			templates: {
				box: '<ul class="jFiler-item-list"></ul>',
				item: '<li class="jFiler-item">\
				<div class="jFiler-item-container">\
				<div class="jFiler-item-inner">\
				<div class="jFiler-item-thumb">\
				<div class="jFiler-item-status"></div>\
				<div class="jFiler-item-info">\
				<span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
				</div>\
				{{fi-image}}\
				</div>\
				<div class="jFiler-item-assets jFiler-row">\
				<ul class="list-inline pull-left">\
				<li><span class="jFiler-item-others">{{fi-icon}} {{fi-size2}}</span></li>\
				</ul>\
				<ul class="list-inline pull-right">\
				<li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
				</ul>\
				</div>\<input type="text" name="stthinh[]" class="stthinh" placeholder="Nhập STT" />\
				</div>\
				</div>\
				</li>',
				itemAppend: '<li class="jFiler-item">\
				<div class="jFiler-item-container">\
				<div class="jFiler-item-inner">\
				<div class="jFiler-item-thumb">\
				<div class="jFiler-item-status"></div>\
				<div class="jFiler-item-info">\
				<span class="jFiler-item-title"><b title="{{fi-name}}">{{fi-name | limitTo: 25}}</b></span>\
				</div>\
				{{fi-image}}\
				</div>\
				<div class="jFiler-item-assets jFiler-row">\
				<ul class="list-inline pull-left">\
				<span class="jFiler-item-others">{{fi-icon}} {{fi-size2}}</span>\
				</ul>\
				<ul class="list-inline pull-right">\
				<li><a class="icon-jfi-trash jFiler-item-trash-action"></a></li>\
				</ul>\
				</div>\<input type="text" name="stthinh[]" class="stthinh" placeholder="Nhập STT" />\
				</div>\
				</div>\
				</li>',
				progressBar: '<div class="bar"></div>',
				itemAppendToEnd: true,
				removeConfirmation: true,
				_selectors: {
					list: '.jFiler-item-list',
					item: '.jFiler-item',
					progressBar: '.bar',
					remove: '.jFiler-item-trash-action',
				}
			},
			addMore: true
		});
	});
</script>