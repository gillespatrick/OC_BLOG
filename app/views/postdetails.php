<?php include 'app/views/inc/header.php'; ?>




<h1>Post Detail</h1>
<hr />

<article class="postcontent">

<?php

    foreach ($postbyid as $key => $value) {
        

?>


    <div class = "details">
        <div class="title">
            <h2> <?= $value['title']?> </h2>
                <p>Category: <a href="#"><?= $value['name']?></a> </p> 
        </div>

        <div class="description">
            <p> <?= $value['content']?> </p>
        </div>


    </div>

    <?php } ?> 
  
</article>
         
    
    



<?php include 'app/views/inc/footer.php'; ?> 