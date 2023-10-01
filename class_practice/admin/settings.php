<?php include "header.php"; ?>
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="admin-heading">Website Setting</h1>
            </div>
            <div class="col-md-offset-3 col-md-6">
            <?php 
                include "config.php";
                $sql = "SELECT * FROM `setting`";
                        $result = mysqli_query($conn,$sql) or die("Query faild");
                        if(mysqli_num_rows($result)>0){
                            while($row = mysqli_fetch_assoc($result)){
            ?>
                <form action="save-setting.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="website_name">Website Name</label>
                        <input type="text" name="website_name" class="form-control" value="<?php echo $row['webname'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="website_name">Website Logo</label>
                        <input type="file" name="logo">
                        <img src="images/<?php echo $row['logo'] ?>">
                        <input type="hidden" name="old_logo" value="<?php echo $row['logo'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="website_name">Footer Descrition</label>
                        <textarea name="footer_desc" cols="30" rows="5" class="form-control" ><?php echo $row['web_desc'] ?></textarea>
                    </div>
                    <a href=""></a><input type="submit" name="submit" id="" class="btn btn-primary" value="Save">
                </form>
                <?php 
                    }
                }
                ?>
            </div>
        </div>
    </div>
</div>