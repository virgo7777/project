<?php

$type_id = $_GET['type_id'];
//echo $type_id;
//exit();


$query_product_type = "SELECT * FROM tbl_product as p
INNER JOIN tbl_type as t
ON p.type_id = t.type_id
WHERE p.type_id = $type_id
ORDER BY p.p_id ASC";
$result_pro =mysqli_query($con, $query_product_type) or die ("Error in query: $query_product_type " . mysqli_error());

//echo($query_product_type);
//exit()
?>

<div class="row">

<?php foreach ($result_pro as $row_pro){ ?>
  
<div class="col-sm-3" align="center">
<div class="card" style="width: 16.5rem; margin-top: 10px; margin-left: 10px;">
<img src="p_img/<?php echo $row_pro['p_img']; ?>" class="card-img-top" height="200px" width="200px" alt="...">
<div class="card-body">
  <h6 class="card-title"><?php echo $row_pro['p_name']; ?></h6>
  <p class="card-text">
ประเภท: <?php echo $row_pro['type_name']; ?>
  </p>
  <a href="prd.php?id= <?php echo $row_pro['p_id'] ?>" class="btn btn-primary">รายละเอียด</a>
</div>
</div>
</div>
<?php } ?>


</div>