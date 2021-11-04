<!DOCTYPE html>
<html>
<?php include 'includes/head.php';?>
<body>
    <?php include 'includes/header.php';?>
    <Section class="landing-page text-shadow-smoke inner-shadow">
    
        <form action="upload.php" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit">
        </form>
    </Section>
    

</body>

</html>