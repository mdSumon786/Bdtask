<?php include 'header.php'; ?>
    <div id="main-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <!-- post-container -->
                    <div class="post-container">
                        <?php 
                        include "config.php";
                        $limit=3;
                        if(isset( $_GET['page'])){
                        $page = $_GET['page'];
                        }else{
                        $page= 1;
                        }
                        $offset = ($page - 1) *$limit;
                            $sql = "SELECT * FROM post left join category on post.category = category.category_id
                                    left join user on post.author = user.user_id
                                    order by post.post_id desc LIMIT {$offset},{$limit}";
                             $result = mysqli_query($conn,$sql) or die("Query faild");
                             if(mysqli_num_rows($result)>0){
                                while($row = mysqli_fetch_assoc($result)){
                        ?>
                        <div class="post-content">
                            <div class="row">
                                <div class="col-md-4">
                                    <a class="post-img" href="single.php?id=<?php echo $row['post_id']; ?>"><img src="admin/upload/<?php echo $row['post_img']; ?>" alt=""/></a>
                                </div>
                                <div class="col-md-8">
                                    <div class="inner-content clearfix">
                                        <h3><a href='single.php?id=<?php echo $row['post_id']; ?>'><?php echo $row['title']; ?></a></h3>
                                        <div class="post-information">
                                            <span>
                                                <i class="fa fa-tags" aria-hidden="true"></i>
                                                <a href='category.php?cid=<?php echo $row['category']; ?>'><?php echo $row['category_name']; ?></a>
                                            </span>
                                            <span>
                                                <i class="fa fa-user" aria-hidden="true"></i>
                                                <a href='author.php?aid=<?php echo $row['author']; ?>'><?php echo $row['username']; ?></a>
                                            </span>
                                            <span>
                                                <i class="fa fa-calendar" aria-hidden="true"></i>
                                                <?php echo $row['category_name']; ?>
                                            </span>
                                        </div>
                                        <p class="description">
                                        <?php echo substr($row['description'],0,100)."..."; ?>
                                        </p>
                                        <a class='read-more pull-right' href='single.php?id=<?php echo $row['post_id']; ?>'>read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                            <?php 
                            }
                        }else{
                            echo "<h2>No Record Found</h2>";
                        }
                        ?>
                    </div>
                    <?php  
                  $sql1 = "SELECT * FROM `post`";
                  $result1 = mysqli_query($conn,$sql1) or die("Query faild");;
                  if(mysqli_num_rows($result1)){
                    $total_records=mysqli_num_rows($result1);
                    $total_page=ceil($total_records/$limit);
                    echo"<ul class='pagination admin-pagination'>";
                    if($page>1){
                      echo '<li><a href="index.php?page='.($page - 1).'">Pervious</a></li>';
                    }
                    for($i= 1; $i<=$total_page;$i++){
                      if($i==$page){
                        $active="active";
                      }else{
                        $active="";
                      }
                      echo'<li class=" '.$active.'"><a href="index.php?page='.$i.'">'.$i.'</a></li>';
                    }
                    if($total_page > $page){
                      echo '<li><a href="index.php?page='.($page + 1).'">Next</a></li>';
                    }
                  echo"</ul>";
                   
                  }?>
                </div><!-- /post-container -->
                <?php include 'sidebar.php'; ?>
            </div>
        </div>
    </div>
<?php include 'footer.php'; ?>
