<?php include 'app/views/inc/header.php'; ?>




<h1>MY BLOG</h1>
<hr />

<article class="postcontent">
    <?php 
        foreach($getcat as $key => $value){
    
    ?>
    <div>

    <div class="title">
            <h2> <?= $value['title']?> </h2>
                <p>Category:<?= $value['name']?> </p> 
        </div>

   
        <p>  <?= $value['content']; ?> </p>
        <div class="readmore"> </div> </div> <div>

               
        <?php } ?>    
    </article>
         
    
   



<?php include 'app/views/inc/footer.php'; ?> 