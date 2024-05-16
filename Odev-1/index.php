<?php

    $kategori = array("Macera","Dram","Komedi","Korku");

    array_push($kategori,"Fantastik");
    sort($kategori);

    $filmler = array(
        "1" => array(
            "baslik" => "Paper Lives",
            "aciklama" => "kağıt Toplayarak geçinen ve sağlığı giderek kötüleşen Mehmet terk edilmiş bir çocuk bulur. Birden hayatına giren küçük Ali, onu kendi çocukluğuyla yüzleştirecektir. (18 yaş ve üzeri için uygundur)",
            "resim" => "1.jpeg",
            "yorumSayisi" => "Yorum: 55",
            "begeniSayisi" => "Beğeni: 85",
            "vizyon" => "Viyonda: Evet"
        ),
        "2" => array(
            "baslik" => "Walking Dead",
            "aciklama" => "zombi Kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.",
            "resim" => "2.jpeg",
            "yorumSayisi" => "Yorum: 55",
            "begeniSayisi" => "Beğeni: 85",
            "vizyon" => "Viyonda: Evet"
        )
        );

    $yeni_film = array(
        "baslik" => "Lucifer",
            "aciklama" => "zombi Kıyametinin ardından hayatta kalanlar, birlikte verdikleri ölüm kalım mücadelesinde insanlığa karşı duydukları umuda tutunur.",
            "resim" => "3.jpeg",
            "yorumSayisi" => "Yorum: 55",
            "begeniSayisi" => "Beğeni: 85",
            "vizyon" => "Viyonda: Evet"
    );
    
    $filmler["0"] = $yeni_film;
    // 1- Film açıklamasındaki baş harf hariç tüm harfleri küçük harfe çeviriniz.
    $filmler["0"]["aciklama"] =  ucfirst(strtolower($filmler["0"]["aciklama"]));
    $filmler["1"]["aciklama"] =  ucfirst(strtolower($filmler["1"]["aciklama"]));
    $filmler["2"]["aciklama"] =  ucfirst(strtolower($filmler["2"]["aciklama"]));

    // 2- Film açıklaması içindeki ilk 50 karakteri alarak sonuna "..." ekleyiniz. (substr) 
    $filmler["0"]["aciklama"] = substr($filmler["0"]["aciklama"],0,50) . "...";
    $filmler["1"]["aciklama"] = substr($filmler["1"]["aciklama"],0,50) . "...";
    $filmler["2"]["aciklama"] = substr($filmler["2"]["aciklama"],0,50) . "...";

    // 3- Her bir film için url bilgisini film başlığına göre oluşturunuz. 77-80, 101-104, 125-128 satırlarında img ile gömülmüştür.    
    $url_0=strtolower(str_replace(" ", "-",$filmler["0"]["baslik"]));
    $url_1=strtolower(str_replace(" ", "-",$filmler["1"]["baslik"]));
    $url_2=strtolower(str_replace(" ", "-",$filmler["2"]["baslik"]));
    // 4- "baslik" isminde bir sabit oluşturarak sayfanın h1 etiketinde kullanınız. 64. satırda kullanılmıştır. 
    define("baslik", "En cok izlenen filmler")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h1>" . baslik . "</h1>"
    ?>
    <div class="container my-3">
        <div class="row">
            <div class="col-3">
                <ul class="list-group">
                    <li class="list-group-item"><?php echo $kategori[0]?></li>
                    <li class="list-group-item"><?php echo $kategori[1]?></li>
                    <li class="list-group-item"><?php echo $kategori[2]?></li>
                    <li class="list-group-item"><?php echo $kategori[3]?></li>
                    <li class="list-group-item"><?php echo $kategori[4]?></li>
                </ul>
            </div>
            <div class="col-9">
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-3">
                            <?php echo
                            "<a href= {$url_1}>
                            <img class=\"img-fluid\" src=\"img/{$filmler["1"]["resim"]}\">
                            </a>"?>
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $filmler["1"]["baslik"]?></h5>
                                <p class="card-text">
                                <?php echo $filmler["1"]["aciklama"]?>
                                </p>
                                <div>
                                    <span class="badge bg-success">Yapım Tarihi: 03.12.2021</span>
                                    <span class="badge bg-success"><?php echo $filmler["1"]["yorumSayisi"]?></span>
                                    <span class="badge bg-success"><?php echo $filmler["1"]["begeniSayisi"]?></span>
                                    <span class="badge bg-success"><?php echo $filmler["1"]["vizyon"]?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-3">
                        <?php echo
                            "<a href= {$url_2}>
                            <img class=\"img-fluid\" src=\"img/{$filmler["2"]["resim"]}\">
                            </a>" ?>
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $filmler["2"]["baslik"]?></h5>
                                <p class="card-text">
                                <?php echo $filmler["2"]["aciklama"]?>
                                </p>
                                <div>
                                    <span class="badge bg-success">Yapım Tarihi: 03.12.2021</span>
                                    <span class="badge bg-success"><?php echo $filmler["2"]["yorumSayisi"]?></span>
                                    <span class="badge bg-success"><?php echo $filmler["2"]["begeniSayisi"]?></span>
                                    <span class="badge bg-success"><?php echo $filmler["2"]["vizyon"]?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-3">
                        <?php echo
                            "<a href= {$url_0}>
                            <img class=\"img-fluid\" src=\"img/{$filmler["0"]["resim"]}\">
                            </a>" ?>
                        </div>
                        <div class="col-9">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $filmler["0"]["baslik"]?></h5>
                                <p class="card-text">
                                <?php echo $filmler["0"]["aciklama"]?>
                                </p>
                                <div>
                                    <span class="badge bg-success">Yapım Tarihi: 03.12.2021</span>
                                    <span class="badge bg-success"><?php echo $filmler["0"]["yorumSayisi"]?></span>
                                    <span class="badge bg-success"><?php echo $filmler["0"]["begeniSayisi"]?></span>
                                    <span class="badge bg-success"><?php echo $filmler["0"]["vizyon"]?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>