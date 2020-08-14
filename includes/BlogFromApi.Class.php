<?php
// Ensure that we aren't pulling Pokemon.Class in multiple times; pull it in if it hasn't run yet.
include_once 'Blog.Class.php';

class BlogFromApi extends Blogs {
  // Output!
  public function output () {
    ?>
      <dl>
        <dt>ID :</dt>
        <dd><?php echo $this->id; ?></dd>
        <dt>Title :</dt>
        <dd><?php echo $this->title; ?></dd>
        <dt>Content :</dt>
        <dd><?php echo $this->content; ?></dd>
      </dl>
    <?php
  }
}
