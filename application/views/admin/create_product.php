 	
<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('admin/product/create_product'); ?>
	<div class="form-group">
    	<label for="title">Title</label>
    	<input type="text" name="title" class="form-control" id="title" placeholder="Product Title">
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
    	<textarea name="desc" class="form-control" id="desc" placeholder="Product Description"></textarea>
  	</div>
	<div class="form-group">
	    <label for="userfile">Upload Image</label>
	    <input type="file" id="userfile" name="userfile" size="20">
	    <p class="help-block">Example block-level help text here.</p>
	</div>
	<!-- <div class="checkbox">
	    <label>
	    	<input type="checkbox"> Check me out
	    </label>
	</div> -->
	<button type="submit" class="btn btn-default pull-left" name="submit">Submit</button>
	<!-- <input type="submit" name="submit" class="btn btn-default" value="Create"> -->
</form>

<?php echo anchor('admin', 'go home', 'class="btn btn-primary"'); ?>