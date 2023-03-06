<?php $title = 'Wallace-listing - '; ?>

<?php ob_start(); ?>

<section>
    <div class="container">
        <div class="main">
            <div class="container mt-2 bg-light">
                <div class="row">
                    <?php foreach ($posts as $data) { ?>
                    <div class="car">
                        <a class="close" href="index.php?action=ads" class="text-right">
                            <i class="bi bi-x-lg text-right mr-0"></i>
                        </a>
                        <hr>
                        <div class="car__top">
                            <h1 class="title"></h1>

                            <div class="right text-center">
                                <h2 class="text-center  mx-auto">
                                    <?= $data['name'] ?>
                                </h2>

                            </div>
                        </div>

                        <div class="image">
                            <img src="public/img/<?= $data['pic1'] ?>">
                        </div>

                        <div class="car__infos row">
                            <div class="left col-md-12 col-lg-9">
                                <h3 class="text-bold text-left">
                                    DESCRIPTION:
                                </h3>
                                <p>
                                    <?= $data['description'] ?>
                                </p> <br>

                                <h3 class="text text-bold">
                                    DETAILS:
                                </h3>

                                <div class="details">
                                    <p>
                                        Price: <span>$ <?= number_format(
                                            $data['price'],
                                            0,
                                            ' ',
                                            ','
                                        ) ?> </span> <br>
                                        Category: <span> <?= $data[
                                            'action'
                                        ] ?></span><br>
                                        Rooms: <span> <?= $data[
                                            'rooms'
                                        ] ?></span><br>
                                        Bathrooms: <span> <?= $data[
                                            'bathrooms'
                                        ] ?> </span> <br>

                                        Size: <span> <?= number_format(
                                            $data['size'],
                                            '0',
                                            ',',
                                            ' '
                                        ) ?> sqft</span> <br>
                                        Adress: <span> <?= $data[
                                            'area'
                                        ] ?></span>
                                    </p>
                                </div>

                                <div class="images">
                                    <?php if ($data['pic4'] != '') { ?>
                                    <img src="public/img/<?= $data['pic4'] ?>">
                                    <?php } ?>

                                    <?php if ($data['pic2'] != '') { ?>
                                    <img src="public/img/<?= $data['pic2'] ?>">
                                    <?php } ?>

                                    <?php if ($data['pic3'] != '') { ?>
                                    <img src="public/img/<?= $data['pic3'] ?>">
                                    <?php } ?>
                                </div> <br>


                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>

</section>
</div>
</div>
</section>


<?php $content = ob_get_clean(); ?>

<?php require './src/view/layout.php'; ?>