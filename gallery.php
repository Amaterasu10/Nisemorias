<!DOCTYPE html>
<html lang="en">
<?php 
    include 'includes/variables.php';
    include 'includes/head.php';
?>
<body class="scrollbar" id="style-1">
    <?php include 'includes/header.php';?>

    <Section class="landing-page text-shadow-smoke inner-shadow">
        <?php include "config.php";?>
        <a href="addfile.php">upload file</a>
    </Section>
    <Section class="gallery-container">
        <?php 
            $path = getcwd() . "\uploads";
            $files = array_diff(scandir($path), array('.', '..'));
        ?>

        <div class="gallery">
            <?php 
                foreach($files as $file){
                    echo "<img src='uploads/$file'>";
                }
            ?>
        </div>
    </Section>
</body>
</html>