<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner bg-faded text-center rounded">
                    <h2 class="section-heading mb-5">
                        <span class="section-heading-upper">Planing</span>
                        <span class="section-heading-lower">Jeu Libre</span>
                    </h2>
                    <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
                        <?php foreach ($array as $key => $value) :
                            if ($key == $jour[date('w')]) {
                                echo '<li class="list-unstyled-item list-hours-item d-flex today">' . $key . '
                                <span class="ms-auto">' . $value . '</span>
                            </li>';
                            } else {
                                echo '<li class="list-unstyled-item list-hours-item d-flex">' . $key . '
                                <span class="ms-auto">' . $value . '</span>
                            </li>';
                            }
                        endforeach ?>
                    </ul>
                    <p class="address mb-5">
                        <em>
                            <strong>Gymnase Jean Mermoz</strong>
                            <br />
                            717 Av. Jean Mermoz, 34000 Montpellier
                        </em>
                    </p>
                    <iframe class="mb-5" src="https://maps.google.com/maps?q=717%20Av.%20Jean%20Mermoz,%2034000%20Montpellier&t=&z=15&ie=UTF8&iwloc=&output=embed" width="500" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                    <p class="mb-0">
                        <small><em>Contact</em></small>
                        <br />
                        (+33) 6.45.78.32.45
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include 'equipe_content.php';
?>
<!-- <section class="page-section about-heading">
    <div class="container">
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="assets/img/about.jpg" alt="..." />
        <div class="about-heading-content">
            <div class="row">
                <div class="col-xl-9 col-lg-10 mx-auto">
                    <div class="bg-faded rounded p-5">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">Strong Coffee, Strong Roots</span>
                            <span class="section-heading-lower">About Our Cafe</span>
                        </h2>
                        <p>Founded in 1987 by the Hernandez brothers, our establishment has been serving up rich coffee sourced from artisan farmers in various regions of South and Central America. We are dedicated to travelling the world, finding the best coffee, and bringing back to you here in our cafe.</p>
                        <p class="mb-0">
                            We guarantee that you will fall in
                            <em>lust</em>
                            with our decadent blends the moment you walk inside until you finish your last sip. Join us for your daily routine, an outing with friends, or simply just to enjoy some alone time.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->