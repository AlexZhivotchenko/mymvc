<?php require __DIR__ . '/_header.php' ?>
<div class="news">
   
<!--	extract($dates[0]);-->

	<?php 
	for ($i = 0; $i<count($dates); $i++){
	extract($dates[$i]);
	 ?>
	<h3><?php echo $title; ?></h3>
	<p>
		<?php echo $content; ?>
	</p>
	<div class="button">
	<button>
	
	<a href="/new<?php echo $id;?>">Перейти к  новости</a></button>
	</div>
	<br/>
	<?php
	
	}
   ?>
<!--
	<h3>Вторая новость</h3>
	<p>
		
	</p>
	<div class="button">
	<button><a href="/new1">Перейти к  новости</a></button>
	</div>
	<br/>
	<h3>Третья новость</h3>
	<p>
		
	</p>
	<div class="button">
	<button><a href="/new2">Перейти к  новости</a></button>
	</div>
	<br/>
-->
	
	
</div>
<?php require __DIR__ . '/_footer.php' ?>