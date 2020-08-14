<?php
 include 'includes/blog-api.php';
 include 'includes/BlogFromApi.Class.php';
 global $title;
 $title = 'PHP API Example';
 include 'templates/header.php';
 ?>


   <h1><?php echo $title; ?></h1>
   <?php include 'templates/navigation.php'; ?>

   <h2>API Results from DATA/data.json</h2>

   <?php if ( $blogsRec = retrieveBlogs ( )  ) : 
     
     ?>
  
  <ol>
      <?php foreach ( $blogsRec as $blogInd ) : ?>
        <?php $currentBlog = new BlogFromApi( $blogInd->id,$blogInd->title,$blogInd->content); 
        ?>
       
          <?php   $currentBlog->output();
           ?>
     
      <?php endforeach; ?>
    </ol>
   <?php endif; ?> 

<?php include 'templates/footer.php';