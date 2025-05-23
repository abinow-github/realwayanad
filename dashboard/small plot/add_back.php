<?php
session_start();

// Include the file with the database connection
include("../root/db.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Check if at least one image is uploaded
    if (empty($_FILES["images"]["name"][0])) {
        $_SESSION['upload_error'] = "Please upload at least one image.";
        header("Location: index.php"); // Redirect back to index page
        exit();
    }

    // Get other form data
    $pname = mysqli_real_escape_string($mysqli, $_POST["pname"]);
    $name = mysqli_real_escape_string($mysqli, $_POST["name"]);
    $price = mysqli_real_escape_string($mysqli, $_POST["price"]);
    $mail = mysqli_real_escape_string($mysqli, $_POST["mail"]);
    $place = mysqli_real_escape_string($mysqli, $_POST["place"]);
    $url = mysqli_real_escape_string($mysqli, $_POST["url"]);
    $phone = mysqli_real_escape_string($mysqli, $_POST["phone"]);
    $txt = mysqli_real_escape_string($mysqli, $_POST["txt"]);

    // Check property name not empty
    if (empty($pname)) {
        $_SESSION['upload_error'] = "Please enter property Name!";
        header("Location: index.php");
        exit();
    }
    if (empty($url)) {
        $url = $pname;
    }
    $url = preg_replace('/[^a-zA-Z0-9\-]/', '', $url);
    $url = str_replace(' ', '-', $url);
    if (empty($phone)) {
        $phone = '+971507611980';
    }

    // Check if the URL already exists in the database
    $originalUrl = $url;
    $counter = 1;
    while (true) {
        $urlQuery = "SELECT COUNT(*) as count FROM small_plot WHERE url = '$url'";
        $result = $mysqli->query($urlQuery);
        $row = $result->fetch_assoc();

        if ($row['count'] == 0) {
            break;
        } else {
            $url = $originalUrl . '-' . $counter;
            $counter++;
        }
    }

    $uploadDirectory = "../gallery/small_plot/";
    // Handle multiple file uploads
    $uploadedFiles = [];

    foreach ($_FILES["images"]["tmp_name"] as $key => $tmp_name) {
        $fileName = $_FILES["images"]["name"][$key];
        $fileSize = $_FILES["images"]["size"][$key];
        $fileType = $_FILES["images"]["type"][$key];
        $fileTmpName = $_FILES["images"]["tmp_name"][$key];

        // Check file size (1MB limit)
        $maxFileSize = 1 * 1024 * 1024; // 1MB in bytes
        if ($fileSize > $maxFileSize) { 
            $_SESSION['upload_error'] = " File '{$fileName}' exceeds the maximum allowed size (1MB).";
            header("Location: index.php"); // Redirect back to index page
            exit();
        }

        // Generate a unique name for the file
        $uniqueFileName = generateUniqueFileName($uploadDirectory, $fileName);

        $targetFilePath = $uploadDirectory . $uniqueFileName;

        // Move the file to the upload directory
        if (move_uploaded_file($fileTmpName, $targetFilePath)) {
            $uploadedFiles[] = $uniqueFileName;
        } else {
            echo "Error uploading file {$fileName}. Please try again.";
        }
    }

    // Combine the image paths into a comma-separated string
    $imagePaths = implode(',', $uploadedFiles);

    // Insert data into the news table
    $insertQuery = "INSERT INTO small_plot (images, pname, name, price, mail, place, url, phone, txt)
                      VALUES ('$imagePaths','$pname', '$name', '$price', '$mail', '$place','$url' , '$phone','$txt')";
    $result = $mysqli->query($insertQuery);

    if ($result) {
        // Redirect or display success message
        header("Location: index.php");
        exit();
    } else {
        echo "Error inserting data into the news table: " . $mysqli->error;
    }
}

// Function to generate a unique file name
function generateUniqueFileName($directory, $originalFileName) {
    $extension = pathinfo($originalFileName, PATHINFO_EXTENSION);
    $uniqueFileName = md5(uniqid()) . '.' . $extension;
    return $uniqueFileName;
}
?>
