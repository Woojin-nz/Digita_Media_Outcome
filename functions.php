<?php

function make_gallery ($folder_name) {

    $dirname = "images/$folder_name/";
    $img = glob($dirname."*.jpg");

    foreach ($img as $img) {
        $exif_data = exif_read_data($img, 'IFD0');
        if (!empty($exif_data['ImageDescription'])) 
            $exif_description = $exif_data['ImageDescription'];
            
        ?>
        
    <div class="responsive-gallery">

    <div class="gallery">

    <a href="<?php echo $img; ?>" class="big">
        <img src ="<?php echo $img; ?>" alt="<?php echo $exif_description; ?>" title="<?php echo $exif_description; ?>" />
    </a>

</div>

</div>

        <?php   

    }


}

?>