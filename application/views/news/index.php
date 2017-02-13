<div class="row">
	<div class="col-md-8 col-md-offset-1">
		<table class="table-border" border="2">
			<tr>
				<th> Title </th>
				<th> Text </th>
				<th> Actions </th>
			</tr>
			<?php foreach($news as $news_data ){ ?>
			<tr>
				<td><?php echo $news_data['title']; ?></td>
				<td><?php echo $news_data['text']; ?></td>
				<td>
					<a href="<?php echo site_url('news/'.$news_data['id']) ?>"><button> View </button></a> | <a href="<?php echo site_url('news/edit/'.$news_data['id']) ?>"><button> Edit </button></a> | <a href="<?php echo site_url('news/delete/'.$news_data['id']) ?>" onClick="return confirm('Do you want to delete this ???')"><button> Delete </button></a>
				</td>
			</tr>
			<?php } ?>
		</table>
	</div>
</div>