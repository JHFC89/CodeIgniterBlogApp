<h2 class="text-info"><?php echo $post['title']; ?></h2>
<small class="post-date">Posted on: <?php echo $post['created_at']; ?></small>
<div class="container w-50">
    <img src="<?php echo site_url();?>assets/images/posts/<?php echo $post['post_image']; ?>" class="img-fluid">
</div>
<div class="post-body">
    <?php echo $post['body']; ?>
</div>
<hr>
<a href= "<?php echo base_url(); ?>posts/edit/<?php echo $post['slug']; ?>" class="btn btn-warning float-left">Edit</a>

<?php echo form_open('/posts/delete/'.$post['id']); ?>
    <input type="submit" value="Delete" class="btn btn-danger">
</form>