
  <?php

  include("../databases/connect.php");


  $id_user = $_POST['id_user'];
  $id_shop = $_POST['id_shop'];
  $name = $_POST['name'];
  $img = $_POST['img'];
  $comment = $_POST['comment'];
  $date_comment = $_POST['date_comment'];
  $sql = "INSERT INTO comment(id_user,id_shop,name,img,comment,date_comment) 
            VALUES('$id_user','$id_shop', '$name','$img' ,'$comment','$date_comment')";

  $result = mysqli_query($conn, $sql);

  if ($conn->query($sql)) {
    $id = $conn->insert_id;
    echo "
    <div class='be-comment'  uid='{$id}'>
      <div class='be-comment-content'>
        <span class='be-comment-name'>
           <img src='./img/user/{$img}' style='width: 35px; border-radius: 50%; height:35px;margin-right: 10px;' class='d-inline-block align-text-top' /></a>
           <a href='blog-detail-2.html'>{$name}</a>
        </span>
        <span class='be-comment-time'>
            <i class='fa fa-clock-o'></i>
            {$date_comment}
        </span>
            <p class='be-comment-text'>
            {$comment}
            </p>
        </div>
      </div>
                                
";
  } else {
  }
