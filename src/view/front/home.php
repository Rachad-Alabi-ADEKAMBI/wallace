<?php $title = 'Wallace-Renting - Home'; ?>

<?php ob_start(); ?>

<section>
    <div class="container">
        <div class="row">
            <div class="hero">
                <div class="hero__content">
                    <h1>
                        Wallace-Renting
                    </h1>

                    <p class="text text-white">
                        Annonces de vente & location de voitures
                    </p>
                    <a href="/ads" class="btn btn-primary">
                        Listings
                    </a>
                </div>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-sm-12 col-md-8 p-2" id="about">
                <h2 class="subtitle">
                    About
                </h2>

                <p class="text text-justify">
                    We are a real estate agency website that specializes in property rentals. we
                    offers a wide range of rental properties, including apartments and houses with
                    detailed information on each listing, such as location, price, and property features. We also
                    provides users with tools to search for properties based on their preferences.
                    Additionally, you can contact us to assist you in finding the perfect rental
                    property and guide you through the rental process.
                </p>
            </div>

            <div class="col-sm-12 col-md-4">
                <img src="public/img/maison1.jpg" alt="" width="350" height="200" class="mx-auto">
            </div>
        </div>
    </div>

    <div class="container bg-light mt-3">
        <h2 class="subtitle">
            Latest
        </h2> <br>
        <div class="row">
            <?php foreach ($posts as $data) { ?>
            <div class="card col-sm-12 col-md-4 m-2 p-2 mx-auto" style="width: 18rem;">
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
                        ' ',
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


    <div class="container" id="support">
        <h2 class="subtitle">
            CONTACT
        </h2>
        <div class="row">
            <div class="col-sm-10 col-md-8 mx-auto">
                <form class="form" method='POST' action='./api/api.php?action=contact'>
                    <div class="form-group">
                        <label for="inputAddress">Email: </label> <span class="red">*</span>
                        <input type="Email" class="form-control" id="inputAddress" placeholder="Email" name='email'
                            required>
                    </div>
                    <div class="form-row mx-auto">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">First name: </label> <span class="red">*</span>
                            <input type="text" class="form-control" id="inputEmail4" placeholder="first name"
                                name='first_name' required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Last name:</label><span class="red">*</span>
                            <input type="text" class="form-control" id="inputPassword4" placeholder="last name" required
                                name='last_name'>
                        </div>
                    </div>

                    <div class="form-row mx-auto mt-2">

                        <div class="form-group  col-8">
                            <label for="inputPassword4">Phone number: </label> <span class="red">*</span>
                            <input type="text" class="form-control" id="inputPassword4" placeholder="phone number"
                                name='phone_number' onkeyup="if(this.value<0){this.value= this.value * -1}" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Message</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>
    </div>
</section>


<?php $content = ob_get_clean(); ?>

<?php require './src/view/layout.php'; ?>