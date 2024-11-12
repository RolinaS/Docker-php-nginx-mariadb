<?php
<div class="breakfast">
    <?php
    $meals = [
        ["name" => "oeuf, jambon, pain", "image" => "oeuf_jambon.jpg", "link" => "oeuf_jambon.php"],
        ["name" => "musli choco banane", "image" => "musli_choco_banane.jpg", "link" => "musli_choco_banane.php"],
        ["name" => "Collations", "image" => "collation.jpg", "link" => "brunch.php"]
    ];

    foreach ($meals as $meal) {
        echo '<div class="meal-box">';
        echo '<a href="'.$meal['link'].'">';
        echo '<img src="./assets/images/'.$meal['image'].'">';
        echo '<h3>'.$meal['name'].'</h3>';
        echo '</a>';
        echo '</div>';
    }
    ?>
</div>
