<?php require __DIR__ . '/_header.php' ?>
<?php 
	extract($dates[1]);
?>
<div class="news">
	<h3><?php echo $title; ?></h3>
	<p>
		<?php echo $content;?>
	</p>
	<div>
	<img src="images/pic06.jpg" width="600" height="350" alt="" />
	</div>
	<br/>
	<div class="button">
	<button><a href="/">Перейти к списку новостей</a></button>
	</div>
	
	<br/>
	
</div>

<?php require __DIR__ . '/_footer.php' ?>