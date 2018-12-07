 	
<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('admin/category/create'); ?>
	<div class="form-group">
    	<label for="name">Categories Name</label>
    	<input type="text" name="name" class="form-control" id="name" placeholder="Categories Name">
  	</div>
	<button type="submit" class="btn btn-default pull-left" name="submit">Submit</button>
</form>

<?php echo anchor('admin', 'go home', 'class="btn btn-primary"'); ?>