<?php
session_start();
if (isset($_SESSION['error_name'])) {
    echo '<script>alert("' . $_SESSION['error_name'] . '");</script>';
    unset($_SESSION['error_name']);
  }
if (isset($_SESSION['id']) && isset($_SESSION['username'])) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.2/classic/ckeditor.js"></script>
    <title>Edit Image and Caption</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<style>
    input{
        border: 0;
        outline: 0;
        padding: 10px;
    }
    input:focus-visible{
        border: 0;
    }
    td{
        overflow-x: hidden;
    }
    table tr td:nth-child(1){
        font-weight: bold;
    }
</style>
<body>
   <?php
   include("../root/db.php");
   $id=$_GET['sa'];
   $sql="SELECT * FROM villa WHERE id='$id'";
   $result=$mysqli->query($sql);
   if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
?>
        <table width="100%" style="margin: auto;padding-top:20px" align="center" cellpadding="0" cellspacing="0">
            <tr>
                <td>
                    <form action="update_back.php" method="post" enctype="multipart/form-data" id="formID" class="formular">
                        <table width="100%" border="1" cellspacing="0" cellpadding="0">
                            <tr>
                                <td width="175" style="text-align: center;">ID</td>
                                <td width="419"><input type="text" name="image_id" value="<?php echo $row['id'];?>" readonly/></td>
                            </tr>
                            
                            <tr>
                                <td style="text-align: center;">Images</td>
                                <td>
                                <?php
                                  $imageFilenames = explode(',', $row['images']);
                                  $num = count($imageFilenames);

                                  for ($i = 0; $i < $num; $i++) {
                                    $firstImage = trim($imageFilenames[$i]);
                                    $imagePath = "../gallery/villa/" . $firstImage;
                                    ?>
                                      <img src="<?php echo $imagePath; ?>" alt="Current Image" style="max-width: 300px; max-height: 300px;">
                                      <?php
                                  }
                                  ?>
                                </td>
                            </tr>

                            <tr style="height: 50px;">
                                <td style="text-align: center;">Add New Images</td>
                                <td><input type="file" name="new_images[]" class="validate[required]" multiple /></td>
                            </tr>
                            
                            <tr>
                                <td style="text-align: center;">Property Name</td>
                                <td style="width: 90%;"><input style="width: 99%;height: 60px;" type="text" name="pname" value="<?php echo $row['pname'];?>"/></td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">Price</td>
                                <td style="width: 90%;"><input style="width: 99%;height: 60px;" type="text" name="price" value="<?php echo $row['price'];?>"/></td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">Place</td>
                                <td style="width: 90%;"><input style="width: 99%;height: 60px;" type="text" name="place" value="<?php echo $row['place'];?>"/></td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">URL</td>
                                <td style="width: 90%;"><input style="width: 99%;height: 60px;" type="text" name="url" value="<?php echo $row['url'];?>"/></td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">Content</td>
                                <td style="width: 90%;"><textarea name="txt" id="editor" style="width: 100%;"><?php echo $row['txt'];?></textarea></td>
                            </tr>
                            </table><br><br>
                            <tr>
                                <td style="height: 50px;border:0;padding-left:20px;letter-spacing:1px;font-size:20px;">Contact Informations</td>
                            </tr>
                            <table width="100%" border="1" cellspacing="0" cellpadding="0">
                            <tr>
                                <td style="text-align: center;">Name</td>
                                <td style="width: 90%;"><input style="width: 99%;height: 60px;" type="text" name="name" value="<?php echo $row['name'];?>"/></td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">Mail</td>
                                <td style="width: 90%;"><input style="width: 99%;height: 60px;" type="mail" name="mail" value="<?php echo $row['mail'];?>"/></td>
                            </tr>
                            <tr>
                                <td style="text-align: center;">Phone Number</td>
                                <td style="width: 90%;"><input style="width: 99%;height: 60px;" type="phone" name="phone" value="<?php echo $row['phone'];?>"/></td>
                            </tr>
                            
                         
                            
                        </table>
                        <br>
                        <input type="hidden" name="image_id" id="image_id" value="<?php echo $row['id']; ?>">
                        <div class="card">
                            <input type="submit" name="button" id="button" value="Submit" class="submit-btn"/>
                        </div>
                    </form>
                </td>
            </tr>
        </table>
<?php
        }
    }
?>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>
</body>
</html>
<?php 
} else {
    header("Location: ../login/index.php");
    exit();
}
?>
