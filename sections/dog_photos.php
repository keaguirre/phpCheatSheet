<?php
define('DOG_IMAGE_APIURL', 'https://place.dog/500/500'); // Define the API_URL constant
$imgResult = file_get_contents(DOG_IMAGE_APIURL); //get simple para data, no imgs
?>
<center>
    <div class="md:5/12 lg:w-1/2">
        <img class="rounded-3xl" src="<?php echo DOG_IMAGE_APIURL; ?>" alt="image" loading="lazy"/>
    </div>
</center>