<?php $title = 'Wallace-renting - Listings'; ?>

<?php ob_start(); ?>

<section>
    <div class="container">
        <h1>
            All the listings
        </h1>

        <div class="row">
            <?php foreach ($posts as $data) { ?>
            <div class="card col-sm-12 col-md-4 m-2 p-2" style="width: 18rem;">
                <img class="card-img-top" src="public/img/<?= $data[
                    'pic1'
                ] ?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title text-center fw-bold">
                        <?= $data['name'] ?>
                    </h5>
                    <p class="card-text text-center">
                        <?php echo substr($data['description'], 0, 50); ?> ...
                    </p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Price: $ <?= number_format(
                        $data['price'],
                        0,
                        '',
                        ','
                    ) ?></li>
                    <li class="list-group-item">Location: <?= $data[
                        'location'
                    ] ?></li>
                    <li class="list-group-item">Rooms: <?= $data[
                        'rooms'
                    ] ?> </li>
                    <li class="list-group-item">Bathrooms: <?= $data[
                        'bathrooms'
                    ] ?></li>
                </ul>
                <div class="card-body text-center">
                    <a href="index.php?action=ad&id=<?= $data[
                        'id'
                    ] ?>" class="card-link btn btn-primary mx-auto text-center">See</a>
                </div>
            </div>
            <?php } ?>

        </div>
    </div>
</section>


<?php $content = ob_get_clean(); ?>

<?php require './src/view/layout.php'; ?>