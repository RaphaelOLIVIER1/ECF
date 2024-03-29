<?php

include_once "../navigation/header.php";
$sql = mysqli_query($conn, 'SELECT * FROM temoignage');
?>



<main class="">
    <section class="bg-dark text-light p-5 text-center text-sm-start ">
        <div class="container">
            <div class="d-sm-flex align-items-center justify-content-between">
                <div>
                    <h1>Vincent <span class="title">Parrot</span></h1>
                    <p class="lead my-4">
                        , fort de ses 15 années d'expérience dans la réparation automobile, a ouvert
                        son propre garage à Toulouse en 2021.
                    </p>
                </div>
                <img src="../img/Fotolia_80724273_L-e1492710016126-1900x1016-1.jpg" alt="#" class="img-fluid w-50 d-none d-sm-block rounded">
            </div>
        </div>
    </section>
    <div class="d-flex flex-column align-items-center">
        <section class="text-center text-sm-start d-flex flex-column justify-content-center align-items-center">
            <h1 class="justify-content-center">Tous nos service</h1>
            <div class="d-flex flex-column justify-content-center align-items-center">
                <article class="d-sm-flex align-items-center mb-3 justify-content-center w-50">
                    <a href="#" class="link-offset-2 link-underline link-underline-opacity-0 text-dark">
                        <h3>Boutique</h3>
                        <img class="img-fluid d-sm-block rounded" src="../img/AdobeStock_60693715-854x569.jpeg" alt="">
                    </a>
                </article>
                <article class="d-sm-flex align-items-center mb-3 justify-content-center w-50">
                    <a href="#" class="link-offset-2 link-underline link-underline-opacity-0 text-dark">
                        <h3>Contact</h3>
                        <img class="img-fluid d-sm-block rounded" src="../img/entretien_auto-a567e.jpeg" alt="">
                    </a>
                </article>
            </div>
        </section>
        <section class="d-flex-sm m-4 flex-column justify-content-center align-items-center text-center">
            <h3>Les témoignage</h3>
            <div class="bg-dark py-2 rounded d-flex-sm text-light">
                <div class="mx-2">
                    <?php
                    while ($row = mysqli_fetch_assoc($sql)) {
                        $lname = $row['lname'];
                        $fname = $row['fname'];
                        $temoignage = $row['temoignage'];
                        $note = $row['note'];
                    ?>
                        <article class="bg-secondary rounded d-sm-flex my-1 px-3 py-2">
                            <div class="bg-primary rounded " style="max-height: 40%;">
                                <p class="m-1 fs-2"><?php echo $note ?></p>
                            </div>
                            <div class="d-flex-sm align-items-center justify-content-center fw-bold rounded">
                                <h2 class=" m-1">
                                    <?php echo $lname ?>
                                </h2>
                                <h2 class="m-1"><?php echo $fname ?>:</h2>
                            </div>
                            <div class="bg-primary-subtle rounded text-dark py-2 px-5 d-flex align-items-center justify-content-center m-2">
                                <p class=""><?php echo $temoignage ?></p>
                            </div>

                        </article>
                    <?php
                    }
                    ?>
                </div>
                <a href="temoignage.php" class="btn btn-primary p-2 m-2">écrire</a>
            </div>
        </section>
    </div>
</main>

<?php
require_once "../navigation/footer.php";

?>