<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php';?>
<body class="scrollbar" id="style-1">
    <?php include 'includes/header.php';?>

    <Section class="landing-page text-shadow-smoke inner-shadow">
        <?php include "config.php";?>
        <div class="card" 
            style="display: flex;
            padding: 10px;
            width: clamp(200px, 32%, 50%); 
            justify-content: space-around; 
            border-radius: 50px; margin:50px;"
        >
            <a href="addfile.php"  class="tooltip">
                <i class="far fa-plus-square"></i>
                <span class="tooltiptext">Upload image</span>
            </a>

            <a href="#gallery" class="tooltip">
                <i class="far fa-images"></i>
                <span class="tooltiptext">Show images</span>
            </a>

            <a href="#delete-images" class="tooltip">
                <i class="fas fa-trash-alt"></i>
                <span class="tooltiptext">Delete image</span>
            </a>
        </div>

        <section 
            style="width: 80%; min-height: 500px; z-index: 1; position: static; margin: 10px;"
            class="card hidden" 
        >
        <?php echo "<form action='' method='post' style='position:relative;'>"; ?>
            <button type='submit' style='position:fixed; bottom:0;left:50%; z-index:1; width:fit-content; display:none;'>Delete</button>

            <?php 
                $path = getcwd() . "\uploads";
                $files = array_diff(scandir($path), array('.', '..'));
                // var_dump($files);
                // echo $files[2];
                
            ?>

            <div class="masonry">
                <?php 
                    $imageExtentions = [".JPEG", ".JPG", ".GIF", ".PNG", ".TIFF", ".PSD", ".PDF", ".EPS", ".AI", ".INDD", ".RAW"];
                    $image_index = 2;
                    $dir = getcwd();
                    foreach($files as $file){
                        
                        if(isset($_POST["checkbox-num-$image_index"])){
                            echo $files[$image_index];
                            unlink("$dir/uploads/$file");
                            // array_values($files[$image_index]);
                            echo "test";
                        } else{
                            echo $files[$image_index];
                            echo "<div class='item relative'>";
                            echo "<input type='checkbox' name='checkbox-num-$image_index' style='display:none;'>";
                            echo "<img class='big' src='uploads/$file'>";
                            $file_name = str_replace($imageExtentions,"",$file);
                            echo "<h4 class='centerer'>$file_name $image_index</h4>";
                            echo "</div>";
                            $image_index++;
                        }
                    }
                    echo $image_index;
                        
                    // unlink("uploads/$files[2]");
                ?>
            </div>
        <?php echo "</form>";?>
        </section>
    </Section>
    <!-- <Section class="gallery-container">
        
    </Section> -->
</body>
<script>
    const galleryContainer = document.querySelector('section[class="card hidden"]');
    const showGallery = document.querySelector('a[href="#gallery"]');
    const deleteIcon = document.querySelector('a[href="#delete-images"]');
    const xButton = document.querySelectorAll("input[type='checkbox']");
    const deleteButton = document.querySelector('button[type="submit"]');

    showGallery.onclick = () => {
        // alert(galleryContainer.classList.contains("hidden"))
        if(galleryContainer.classList.contains("hidden")){
            galleryContainer.classList.remove("hidden");
        } else {
            galleryContainer.classList.add("hidden");
        }
    };
    
    deleteIcon.onclick = () => {
        xButton.forEach( button => {
            if(button.style.display === 'none'){
                button.style.display = 'block';
                deleteButton.style.display = "block";
                // button.onclick = () => {
                //     button.closest('.item').remove();
                // }
            } else {
                button.style.display = 'none';
                deleteButton.style.display = "none";
            }
        });
    }

</script>
</html>