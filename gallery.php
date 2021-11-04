<!DOCTYPE html>
<html lang="en">
<?php include 'includes/head.php';?>
<body class="scrollbar" id="style-1">
    <?php include 'includes/header.php';?>

    <Section class="landing-page text-shadow-smoke inner-shadow">
        <?php include "config.php";?>
        <div class="card" 
            style="display: flex; padding: 10px; width: clamp(200px, 32%, 50%); justify-content: space-around; border-radius: 50px;"
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
        <?php 
            $path = getcwd() . "\uploads";
            $files = array_diff(scandir($path), array('.', '..'));
        ?>

        <div class="masonry">
            <?php 
                foreach($files as $file){
                    echo "<div class='item'><img class='big' src='uploads/$file'></div>";
                }
            ?>
        </div>
    </section>
    </Section>
    <!-- <Section class="gallery-container">
        
    </Section> -->
</body>
<script>
    const galleryContainer = document.querySelector('section[class="card hidden"]');
    const showGallery = document.querySelector('a[href="#gallery"]');
    showGallery.onclick = () => {
        // alert(galleryContainer.classList.contains("hidden"))
        if(galleryContainer.classList.contains("hidden")){
            galleryContainer.classList.remove("hidden");
        } else {
            galleryContainer.classList.add("hidden");
        }
    };
    
</script>
</html>