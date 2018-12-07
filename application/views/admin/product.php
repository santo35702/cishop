<?php foreach ($products as $key): ?>
	<h3><?php echo $key['title']; ?></h3>
	<small>Posted on: <?php echo $key['created_at']; ?> For <strong><?php echo $key['name']; ?></strong></small>
	<div class="row">
		<div class="col-md-4">
			<img src="<?php echo base_url(); ?>uploads/products/<?php echo $key['images']; ?>" alt="" class="img img-responsive img-thumbnail">
		</div>
		<div class="col-md-8">
			<p><?php echo word_limiter($key['description'], 50); ?></p>
			<p><a href="<?php echo base_url('admin/product/'.$key['slug']); ?>" title="" class="btn btn-info">View</a></p>
		</div>
	</div>
	<!-- <div class="clearfix"> </div> -->
<?php endforeach; ?>