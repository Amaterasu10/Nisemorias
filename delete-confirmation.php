<!DOCTYPE html>
<html lang="en">
<?php include   'includes/head.php';?>
<body>
    <section class="landing-page text-shadow-smoke inner-shadow">
        <h1>Your images has been successfully deleted</h1>
        <a href="gallery.php">go back</a>
        <?php 
        $path = getcwd() . "\uploads";
        $files = array_diff(scandir($path), array('.', '..'));

        foreach($files as $file){
            if(isset($_POST["checkbox-num-$image_index"])){
                unlink("uploads/$files[$image_index]");
                echo "test";
                print_r($files);
                unset($files[$image_index]);
                array_values($files);
            }
        }
            echo $image_index;
        ?>
    </section>
</body>
</html>