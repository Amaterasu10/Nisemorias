<!DOCTYPE html>
<html>
<?php include 'includes/head.php';?>
<body>
    <?php include 'includes/header.php';?>
    <Section class="landing-page text-shadow-smoke inner-shadow">
    
        <form action="upload.php" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit" disabled>
        </form>
    </Section>
    

</body>
 <script>
    //  const body = on
    const inputFile = document.querySelector("input[type='file']");
    const submitButton = document.querySelector("input[type='submit']");
    // alert(inputFile.value === "");
    
    inputFile.onchange = () => {
        if(inputFile.value !== ""){
            submitButton.removeAttribute('disabled');
        }
    }
    
 </script>
</html>