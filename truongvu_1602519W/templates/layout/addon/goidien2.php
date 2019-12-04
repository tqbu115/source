<style>
	.toolbar{
	  background: #111111;
	  display: inline-block;
	  width: 100%;
	  padding: 1.8vw;
      left: 0;
	  bottom: 0;
	  position: fixed;
	  z-index: 9999999;
	  height: auto;
	  display: none;
	   box-shadow: 0 -1px 2px 1px #00000038;
	}
	.toolbar ul{
		list-style: none;
	  	padding: 0;
	}
	.toolbar ul li{
	  text-align: center;
	  float: left;
	  width: calc(100% / 5);
	  line-height: 1;
	}
	.toolbar ul li a{
	  display: inline-block;
	  width: 100%;
	}
	.toolbar ul li a span {
		font-family: 'Roboto',sans-serif;
		font-weight: 400;
		color: #ffffff;
		font-size: 14px;
		display: block;
	}
	.toolbar ul li a img {
		height: 15px;
		width: auto;
		margin-bottom: 5px;
	}
	@media(max-width: 920px){
		.toolbar{display: block;}
	}
</style>
<div class="toolbar">
	<ul>
		<li>
			<a  target="_blank"  id="goidien" href="tel:<?=str_replace(" ","",$row_setting['hotline'])?>" title="title">
				<img src="images/i1.png" alt="images">
				<span>Gọi điện</span>
			</a>
		</li>
		<li>
			<a target="_blank"  id="sms" href="sms:<?=str_replace(" ","",$row_setting['hotline'])?>" title="title">
				<img src="images/i2.png" alt="images">
				<span>SMS</span>
			</a>
		</li>
		<li>
			<a target="_blank"  id="chatzalo" href="https://zalo.me/<?=str_replace(" ","",$row_setting['oaid'])?>" title="title">
				<img src="images/i3.png" alt="images">
				<span>zalo</span>
			</a>
		</li>
		<li>
			<a target="_blank" id="chatfb" href="<?=$row_setting['googleplus']?>" title="title">
				<img src="images/i4.png" alt="images">
				<span>facebook</span>
			</a>
		</li>
		<li>
			<a target="_blank" id="chiduong" href="https://google.com/maps/dir//<?=$row_setting['toado']?>" title="title">
				<img src="images/i5.png" alt="images">
				<span>Chỉ đường</span>
			</a>
		</li>
	</ul>
</div>