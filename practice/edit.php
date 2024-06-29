<?php
include('method.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
     
    
        $pid = $_GET['pid'];
        $res=  getdatabyid($pid);
        $data = mysqli_fetch_assoc($res);
    ?>
    <h1>Update Product Data</h1>
    <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="pid" value="<?php echo $data['pid']?>">
     Enter Name :
      <input type="text" name="name" id="name" value="<?php echo $data['name']?>"><br>
     Enter gender :
      <input type="text" name="gender" id="gender" value="<?php echo $data['gender']?>"><br>
   
  
     <img src="<?php echo $data['image']?>" style="width:20%" id="preview"> <br>
     Select image to upload:
    <input type="file" name="image" id="image" onchange="previewImage(event)"><br>
    <input type="submit" value="Update Data" name="submit">
    </form>
    <br>
    <?php
        if(isset($_POST['submit']))
        {
            $response = updatepro($_POST);
           header('location:show.php');
        }
    ?>

    
    <script type="text/javascript">
      function previewImage(event) 
      {
         var input = event.target;
         var image = document.getElementById('preview');
         if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
               image.src = e.target.result;
            }
            reader.readAsDataURL(input.files[0]);
         }
      }
   </script>
    

</body>
</html>