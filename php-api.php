<?php
 include 'includes/blog-api.php';
 include 'includes/BlogFromApi.Class.php';
 global $title;
 $title = 'PHP API Example';
 include 'templates/header.php';
 ?>


   <h1><?php echo $title; ?></h1>
   <?php include 'templates/navigation.php'; ?>

   <h2>API Test</h2>

   <?php if ( $blogsRec = retrieveBlogs ( )  ) : 
     
     ?>
  
   <ol>
       <?php foreach ( $blogsRec as $blogInd ) :   ?>
      
        <dl>
        <dt>ID: </dt>
        <dd><?php echo $blogInd->id; ?></dd>
        </dl>
        <dl>
        <dt>Title: </dt>
        <dd><?php echo $blogInd->title; ?></dd>
        </dl>
        <dl>
        <dt>Content: </dt>
        <dd><?php echo $blogInd->content; ?></dd>
        </dl>


       <?php endforeach; ?>
     </ol>
   <?php endif; ?> 

<?php include 'templates/footer.php';