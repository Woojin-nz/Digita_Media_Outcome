<div class = "box main">
        <h2> Insect Gallery </h2>

<p>
    These insects images are a selection from Wikimedia commons featured pages on <a href="https://commons.wikimedia.org/wiki/Commons:Featured_pictures/Animals/Arthropods">Arthropods</a>
</p>

<?php
    
    $dirname = "images/insects/";
    $images = glob($dirname."*.jpg");

    foreach($images as $images) {

        $exif = exif_read_data($images, 0, true);

        foreach ($exif as $key => $section) {
            foreach ($section as $name => $val) {

                if($key == 'IFDO' and $name == "Title") {

                    $val = preg_replace('/[^A-Za-z0-9\- ()]/', '', $val);

                    $title = $val;
                }
            }
        }

        ?>
        
    <div class="responsive-gallery">

    <div class="gallery">

    <a href="<?php echo $images; ?>" class="big">
        <img src ="<?php echo $images; ?>" alt="<?php echo $title; ?>" title="<?php echo $title; ?>" />
    </a>

</div>

</div>

        <?php   


    }

?>




</div>