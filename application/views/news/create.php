<div class="row">
	<?php echo validation_errors(); ?>
	<div class="">
		<form action="<?php echo site_url('news/create'); ?>" method="post">
			<label>Title</label>
			<input type="text" name="title">
			<br>
			<label>Text</label>
			<textarea name="text"></textarea>
			<br>
			<input type="submit" name="submit" value="Add News">
			<br>
		</form>
	</div>
</div>