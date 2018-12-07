 	
<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('admin/product/update'); ?>
	<input type="hidden" name="id" value="<?php echo $product_item['id']; ?>">
	<div class="form-group">
    	<label for="title">Title</label>
    	<input type="text" name="title" class="form-control" id="title" placeholder="Product Title" value="<?php echo $product_item['title']; ?>">
  	</div>
  	<div class="form-group">
    	<label for="categories">Select Categories</label>
    	<select name="categories" class="form-control" id="categories">
    		<?php foreach ($categories as $key): ?>

    		<option value="<?php echo $key['id']; ?>"><?php echo $key['name']; ?></option>

    		<?php endforeach; ?>
    	</select>
  	</div>
  	<div class="form-group">
    	<label for="desc">Description</label>
    	<textarea name="desc" class="form-control" id="desc" placeholder="Product Description"><?php echo $product_item['description']; ?></textarea>
  	</div>
	<div class="form-group">
	    <label for="pic">File input</label>
	    <input type="user_file" id="pic">
	    <p class="help-block">Example block-level help text here.</p>
	</div>
	<!-- <div class="checkbox">
	    <label>
	    	<input type="checkbox"> Check me out
	    </label>
	</div> -->
	<button type="submit" class="btn btn-success pull-left" name="submit">Submit</button>
	<!-- <input type="submit" name="submit" class="btn btn-default" value="Create"> -->
</form>

<?php 
echo anchor('admin/product/'.$product_item['slug'], 'go back', 'class="btn btn-default"'); 
echo anchor('admin', 'go home', 'class="btn btn-primary"'); 
?>