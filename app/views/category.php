
<?php include 'app/views/inc/header.php';?>




<div class = "content">

<h1>CATEGORY LIST</h1><HR/>

<?php

  foreach ($cat as $key => $value) {
    echo $value['title']."<br/>"; }

?>

</div>




<?php include 'app/views/inc/footer.php';?>