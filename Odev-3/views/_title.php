<?php
    $data=getData();
    $activeMoviesCount=0;
    foreach ($data["movies"] as $movie) {
        if ($movie["is-active"])
            $activeMoviesCount++;
    }
    $ozet = count($data["categories"]).' kategoride '. $activeMoviesCount .'  film listelenmiştir';
    const baslik = "Popüler Filmler";
?>
    
<h1 class="mb-4"><?php echo baslik?></h1>
<p class="text-muted">
    <?php echo $ozet?>
</p>