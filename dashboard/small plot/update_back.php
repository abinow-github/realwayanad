<?php
include("../root/db.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $imageId = mysqli_real_escape_string($mysqli, $_POST['image_id']);

    // Get other form data
    $pname = mysqli_real_escape_string($mysqli, $_POST["pname"]);
    $name = mysqli_real_escape_string($mysqli, $_POST["name"]);
    $price = mysqli_real_escape_string($mysqli, $_POST["price"]);
    $mail = mysqli_real_escape_string($mysqli, $_POST["mail"]);
    $place = mysqli_real_escape_string($mysqli, $_POST["place"]);
    $url = mysqli_real_escape_string($mysqli, $_POST["url"]);
    $phone = mysqli_real_escape_string($mysqli, $_POST["phone"]);
    $txt = mysqli_real_escape_string($mysqli, $_POST["txt"]);

    // Check product name not empty
    if (empty($pname)) {
        $_SESSION['error_name'] = "Please enter property Name!";
        header("Location:update.php?sa=$imageId");
        exit();
    }
    if (empty($url)) {
        $url=$name;
    }
    $url = preg_replace('/[^a-zA-Z0-9\-]/', '', $url);
    $url = str_replace(' ', '-', $url);
    if (empty($phone)) {
        $phone='+971507611980';
    }

    $updateCaptionQuery = "UPDATE small_plot SET
    pname = '$pname',
    name = '$name',
    price = '$price',
    mail = '$mail',
    place = '$place',
    url = '$url',
    phone = '$phone',
    txt = '$txt'
     WHERE id = '$imageId'";
    if (!mysqli_query($mysqli, $updateCaptionQuery)) {
        die('Error updating caption: ' . mysqli_error($mysqli));
    }

    // Check if new images are provided
    if (!empty($_FILES['new_images']['tmp_name'][0])) {
        // Fetch old image filenames from the database
        $fetchImageQuery = "SELECT images FROM small_plot WHERE id = '$imageId'";
        $result = $mysqli->query($fetchImageQuery);

        if ($result->num_rows > 0) {
            $oldImageFilenames = explode(',', $result->fetch_assoc()['images']);

            // Delete old image files
            foreach ($oldImageFilenames as $oldImage) {
                unlink("../gallery/small_plot/" . trim($oldImage));
            }

            // Clear the array of old filenames
            $oldImageFilenames = array();

            // Loop through each file
            foreach ($_FILES['new_images']['tmp_name'] as $key => $tmp_name) {
                // Your existing image upload and update logic here

                // Example:
                $maxFileSize = 1 * 1024 * 1024; // 1MB in bytes
                $fileSize = $_FILES['new_images']['size'][$key];

                if ($fileSize > $maxFileSize) {
                    $_SESSION['upload_error'] = "Error: File size exceeds the maximum allowed size (1MB).";
                    header("Location: update.php");
                    exit();
                }

                $temp1 = explode(".", $_FILES["new_images"]["name"][$key]);
                $newfilename1 = rand() . "_" . date('m-d-Y_hia') . '.' . end($temp1);
                move_uploaded_file($_FILES['new_images']['tmp_name'][$key], "../gallery/small_plot/" . $newfilename1);

                // Add the new filename to the array of old filenames
                $oldImageFilenames[] = $newfilename1;
            }

            // Update images in the database
            $newImageFilenames = implode(',', $oldImageFilenames);
            $updateImageQuery = "UPDATE small_plot SET images = '$newImageFilenames' WHERE id = '$imageId'";
            if (!mysqli_query($mysqli, $updateImageQuery)) {
                die('Error updating images: ' . mysqli_error($mysqli));
            }
        }
    }

    // Redirect back to the edit page
    header("Location: index.php");
    exit();
}

// If form is not submitted, redirect to the index page or any other desired location
header("Location: index.php");
exit();
?>
