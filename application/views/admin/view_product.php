<?php 
echo '<h2>'.$product_item['title'].'</h2>';
// echo '<small>Posted on: '.$product_item['created_at'].' For <strong>'.$product_item['name'].'</strong></small>';
echo '<p>'.$product_item['description'].'</p>';
echo anchor('admin/product/edit_product/'.$product_item['slug'], 'Edit', 'class="btn btn-success pull-left"');
echo form_open('admin/delete_product/'.$product_item['id'], 'class="pull-left"');
echo '<input type="submit" name="" value="delete" class="btn btn-danger">';
echo form_close();
echo anchor('admin/product', 'go back', 'class="btn btn-primary"');
 ?>
