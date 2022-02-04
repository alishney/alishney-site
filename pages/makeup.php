<?php

$makeup = [
    [
        "name"        => "Помада",
        "img"         => "./images/4.png",
        "description" => "Помада раз два три Помада раз два три Помада раз два три",
        "rating"      => 0,
        "price"       => "2",
    ],
    [
        "name"        => "Помада",
        "img"         => "./images/4.png",
        "description" => "Помада раз два три Помада раз два три Помада раз два три",
        "rating"      => 5,
        "price"       => "2",
    ],
    [
        "name"        => "Помада",
        "img"         => "./images/4.png",
        "description" => "Помада раз два три Помада раз два три Помада раз два три",
        "rating"      => 2,
        "price"       => "2",
    ],
    [
        "name"        => "Помада",
        "img"         => "./images/4.png",
        "description" => "Помада раз два три Помада раз два три Помада раз два три",
        "rating"      => 2,
        "price"       => "2",
    ],
    [
        "name"        => "Помада",
        "img"         => "./images/4.png",
        "description" => "Помада раз два три Помада раз два три Помада раз два три",
        "rating"      => 2,
        "price"       => "2",
    ],
    [
        "name"        => "Помада",
        "img"         => "./images/4.png",
        "description" => "Помада раз два три Помада раз два три Помада раз два три",
        "rating"      => 2,
        "price"       => "2",
    ],
    [
        "name"        => "Помада",
        "img"         => "./images/4.png",
        "description" => "Помада раз два три Помада раз два три Помада раз два три",
        "rating"      => 2,
        "price"       => "2",
    ],
]; ?>

<div class="makeup-cards">

    <?php foreach ($makeup  as $item) { ?>
    <div class="makeup-item-card">
        <div class="makeup-item-card-img">
            <img src="<?= $item["img"] ?>" alt="<?= $item["name"] ?>">
        </div>
        <div class="makeup-item-card-content">
            <p class="makeup-item-card-name"><?= $item["name"] ?></p>
            <p class="makeup-item-card-description"><?= $item["description"] ?></p>
            <p class="makeup-item-card-rating" title="Рейтинг продукта">
                <?php
                    for ($i = 1; $i <= 5; $i++) {
                        $class = $i <= $item['rating'] ? 'fas fa-star' : 'far fa-star';
                        echo "<i class='{$class}'></i>";
                    }
                ?>
            </p>
            <p class="makeup-item-card-price"><?= $item["price"] ?> &#8381;</p>
            <a class="makeup-item-card-buy-button" href="#">В корзину</a>
        </div>
    </div>
    <?php } ?>

</div>

