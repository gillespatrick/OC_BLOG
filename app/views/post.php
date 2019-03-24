<?php include 'app/views/inc/header.php'; ?>




<h1>MY BLOG</h1>
<hr />

<article class="postcontent">
    <?php 
        foreach($allpost as $key => $value){
    
    ?>
    <div>
        <h2><a href="http://localhost/OC_BLOG/index.php?url=Post/postDetail/<?= $value['id']; ?>"><?= $value['title']; ?> </a></h2>
        <p>  <?= $value['content']; ?> </p>
        <div class="readmore"><a href="http://localhost/OC_BLOG/index.php?url=Post/postDetail/<?= $value['id']; ?>" </a> Read More</div> </div> <div>

               
        <?php } ?>    
    </article>
         
    
    



<?php include 'app/views/inc/footer.php'; ?> 