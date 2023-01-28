<?php

// $con = MySQLi_connect("localhost", "root", "", "eeresources");
$con = MySQLi_connect("sql100.epizy.com", "epiz_33172625", "uDjIYA7KgvC2x", "epiz_33172625_eeresources");

if (MySQLi_connect_errno()) {
    echo "Failed to connect to MySQL: " . MySQLi_connect_error();
}
if (isset($_POST["search"])) {

    $Name = $_POST["search"];
    $sub = $_POST["subject"];
    $resType = $_POST["restype"];

    $Query = "SELECT * FROM resourcesmaster_01 WHERE `Subject` LIKE '%$sub%' AND `TopicName` LIKE '%$Name%' AND `Resource Type` LIKE '%$resType%' LIMIT 10";
    // echo "Query Used (for nerds):<code>".$Query."</code>";

    $ExecQuery = MySQLi_query($con, $Query);

    while ($Result = MySQLi_fetch_array($ExecQuery)) { ?>
          <div class="divider"></div>

        <?php
        echo "<h2><strong>" .
            $Result["TopicName"] .
            "</strong></h2> <h3>Conceptual Rating: ";
        for ($i = 0; $i < $Result["ConceptualRating"]; $i++) { ?>
            <i class="material-icons">star</i>
        <?php } ?>

        </h3>
        <?php
        echo "<p class='ytlink'><a href=' " .
            $Result["Resources"] .
            "'>" .
            $Result["Resources"] .
            "</a></p>";
        $youtube_link = str_replace(
            "https://youtu.be/",
            "https://www.youtube.com/watch?v=",
            $Result["Resources"]
        );
        $parts = parse_url($youtube_link);
        if (isset($parts["host"]) && $parts["host"] == "www.youtube.com") {
            parse_str($parts["query"], $query);
            $video_id = substr($query["v"], 0, 11);
            $filename = $video_id . ".jpg";
            $path = "./thumbnailcache/images/" . $filename;
            if (file_exists($path)) {
                echo '<center><a href="' .
                    $youtube_link .
                    ' "><img class="gradient-border" src="' .
                    $path .
                    '"> </a></center>';
            } else {
                $image_data = file_get_contents(
                    "https://img.youtube.com/vi/" . $video_id . "/hqdefault.jpg"
                );
                file_put_contents($path, $image_data);
                echo '<center> <a href="' .
                    $youtube_link .
                    ' "><img class="gradient-border" src="' .
                    $path .
                    '"> </a></center>';
            }
        } else {
        }

        if (!empty($Result["Notes"])) { ?>
        <p class="notes">Notes: <?php echo $Result["Notes"] . "</p>";}
        }
}
?>
</body>
</html>