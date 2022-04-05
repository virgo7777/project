<?php
$q = $_GET['q'];
include("condb.php");
$sql = "SELECT * FROM tbl_product as p
INNER JOIN tbl_type  as t ON p.type_id=t.type_id
ORDER BY p.p_id DESC";  //เรียกข้อมูลมาแสดงทั้งหมด
$result = mysqli_query($con, $sql);
while($row_prd = mysqli_fetch_array($result)){
?>
<!-- search -->

<!-- product -->
<div class="col-sm-3" align="center">
    <div class="card border-Light mb-1" style="width: 16.5rem; margin-top: 10px;">
        <br>
        <img class="card-img-top" >
        <a href=""> <?php echo"<img src='p_img/".$row_prd['p_img']."'width='200' height='200'>";?></a>
        <div class="card-body">
            <a href="prd.php?id=<?php echo $row_prd[0]; ?>"><b> <?php echo $row_prd["p_name"];?></b> </a>
            <br>
            ราคา <font color=""> <?php echo $row_prd["p_price"];?></font> บาท
            <br>
            
            คงเหลือ <?php echo $row_prd["p_qty"];?> <?php echo $row_prd["p_unit"];?>
            <br><button type="button" class= "btn btn-info btn-sm">
                <a href="prd.php?id=<?php echo $row_prd[0]; ?>" style="color: #fff">รายละเอียด</a>
            </button>

        </div>
        <br>
    </div>
</div>
<?php } ?>