<h1><?=$title; ?></h1>

<ul class="nav nav-pills">
	<?php foreach ($category as $key): ?>
  <li role="presentation"><a href="<?php echo base_url(); ?>admin/category/product/<?php echo $key['id']; ?>"><?php echo $key['name']; ?></a></li>
  <?php endforeach; ?>
</ul>
