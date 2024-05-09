<?php
require_once '../consts.php';
?>
<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<h2 class="text-3xl font-bold text-gray-900 md:text-4xl">
    <?php get_data(DOG_FACTS_APIURL);?>
    <?php echo $result["facts"][0]; ?>
</h2>