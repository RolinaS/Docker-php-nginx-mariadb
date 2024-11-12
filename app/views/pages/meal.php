<div class="meal">
    <?php
    $meals = [
        ["name" => "Petit Déjeuner", "image" => "petit_dejeuner.jpg", "link" => "breakfast.php"],
        ["name" => "Déjeuner", "image" => "dejeuner.jpg", "link" => "lunch.php"],
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
