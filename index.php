<?php
require_once("../functions/header.php")
?>

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel" style="margin-top: 145px; z-index:1;">
        <style>
            .carousel-item img {
                max-height: 500px; /* Adjust the height as needed */
                object-fit: cover; /* Maintain aspect ratio */
                margin-top:0px;
                
            }
        </style>
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../images/child/image1.avif" class="d-block w-100" alt="baby 1">
                <div class="carousel-caption">
                    <h5>Monitor your baby growth</h5>
                    <p>Track your baby throughout the 9 months from time of conception</p>
                    <p><a href="pregnancy.php" class="btn btn-warning mt-3">Go there</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../images/child/cara2.avif" class="d-block w-100" alt="baby 5">
                <div class="carousel-caption">
                    <h5>Pregnancy practices</h5>
                    <p>Exercises that will help you and your baby.</p>
                    <p><a href="practices.php" class="btn btn-warning mt-3">Go there</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../images/child/cara1.avif" class="d-block w-100" alt="baby 8">
                <div class="carousel-caption">
                    <h5>Child care</h5>
                    <p>A full comprehensive guide to first-time parents on how best to care for their children.</p>
                    <p><a href="parenthood.php" class="btn btn-warning mt-3">Go there</a></p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>


        <!-- section about  -->
        <section id="about" class="about-section-padding">
            <div class="container" style="padding: 30px 0px; margin-top: 100px">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-12">
                        <div class="about-image text-center">
                            <img src="../images/child/image 4.jpg" alt="an image" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 ps-lg-5 mt-md-5">
                        <div class="about-text">
                            <h2 class="text-center">Briefly about <b class="text-primary">smartmum</b> </h2>
                            <p class="text-secondary mb-5 lead fs-4">Smart-Mum Uganda is located in the West Nile Region of Northern Uganda and is one of the thrilling innovations to establish an AI powered Application (Parenting Platform and Parenting media company in Uganda and the globe). We provide expert advice to pregnant women and new mothers while connecting these women to each other online and in person and also connect rural mothers through USSD Technology and Chatbots.</p>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <p class="special-p"><a href="#" class="btn btn-warning mt-3">Read More</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Baby product -->
        <section id="products" class="products section-padding">
            <div class="container" style="padding: 30px 0px bg">
                <div class="row">
                    <div class="cl-md-12">
                        <div class="section-header text-center pb-5">
                            <h2 class="text-primary">BABY PRODUCTS</h2>
                            <p class="text-secondary mb-5 text-center lead fs-5">The world of baby products can be overwhelming, but it can be broken down into essentials for <b>feeding, sleeping, diapering, bathing, and keeping your little one entertained</b>. Bottles, diapers, wipes, and comfy clothes are a must, while a crib, stroller, and car seat provide safe spaces for your baby to rest and travel. Don't forget about bath time essentials, soft blankets, and a few <b>stimulating toys</b> to keep them happy and curious!</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="card text-white text-center bg-dark pb-2">
                            <div class="card-body">
                                <i class="bi bi-cash-coin" style="font-size: 40px;"></i>
                                <h3 class="card-title text-warning">Best selling</h3>
                                <p class="lead">Wish you knew what products other parents swear by to keep their little ones happy and healthy? Look no further!. Discover the must-have baby products that are topping online sales charts and making parents' lives easier </p>
                                <button class="btn btn-warning text-light">See More</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="card text-white text-center bg-dark pb-2">
                            <div class="card-body">
                                <i class="bi bi-subtract" style="font-size: 40px;"></i>
                                <h3 class="card-title text-warning">Necessities</h3>
                                <p class="lead">Don't ever leave home without these necessities. they either smoothen your journey or make it harder depending on whether you carried or forgot them.come reade about the childrens' necesities</p>
                                <button class="btn btn-warning text-light">See More</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="card text-white text-center bg-dark pb-2">
                            <div class="card-body">
                                <i class="bi bi-wallet" style="font-size: 40px;"></i>
                                <h3 class="card-title text-warning">Cheapest sources</h3>
                                <p class="lead">Exhausted from researching overpriced baby gear?  Give your wallet a break and discover a treasure of affordable essentials and surprising steals that won't compromise your little one's well-being at early age.</p>
                                <button class="btn btn-warning text-light">See More</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Another section -->
        <section id="portfolio" class="portfolio section-padding"style="padding-top: 30px">
            <div class="container">
                <div class="row">
                    <div class="cl-md-12">
                        <div class="section-header text-center pb-5">
                            <h2 class="text-primary">ENGAGEMENTS</h2>
                            <p class="text-secondary mb-5 text-center lead fs-5">This baby product company goes beyond simply selling gear. They cultivate long-term customer relationships by offering informative workshops on baby care and parenting skills, building trust through their commitment to sustainable materials and practices, and providing ultimate convenience with curated subscription boxes tailored to each stage of a baby's development.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="margin: 2px;">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                            <div class="img-area mb-4">
                                <img src="../images/child/image3.jpg" alt="Image from forbes.com" class="img-fluid">
                            </div>
                            <h3 class="card-text">Engaging Workshops and Events</h3>
                            <p class="text-secondary mb-5 text-center lead fs-6">We Engage parents with informative online/in-person workshops on baby care, development, and your products. Partner with experts for credibility and incentivize attendance to build brand loyalty. We do it at smartmum 👌</p>
                            <button class="btn btn-warning text-dark">See More</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                            <div class="img-area mb-4">
                                <img src="../images/child/child_5.jpg" alt="Image from forbes.com" class="img-fluid">
                            </div>
                            <h3 class="card-text">Sustainable Baby Product Companies</h3>
                            <p class="text-secondary mb-5 text-center lead fs-6">Cultivate a reputation for eco-conscious baby products by highlighting sustainable materials like organic cotton, minimizing packaging waste, and partnering with environmental organizations to champion a healthier planet for your customers and their little ones.</p>
                            <button class="btn btn-warning text-dark">See More</button>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card text-light text-center bg-white pb-2">
                        <div class="card-body text-dark">
                            <div class="img-area mb-4">
                                <img src="../images/child/image2.jpg" alt="Image from forbes.com" class="img-fluid">
                            </div>
                            <h3 class="card-text">Subscription boxes</h3>
                            <p class="text-secondary mb-5 text-center lead fs-6">Delight parents and their little ones with convenience! Implement a subscription box service offering curated baby products specifically tailored to each stage of development. This not only provides parents with a steady stream of essential items but also introduces them to new and innovative products they might not have discovered.</p>
                            <button class="btn btn-warning text-dark">See More</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Team section -->
<section class="bg-light py-3 py-md-5 py-xl-8">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                <h2 class="text-primary text-center">OUR TEAM</h2>
                <p class="text-secondary mb-5 text-center lead fs-4">We are a group of innovative, experienced, and proficient teams. You will love to collaborate with us.</p>
            </div>
        </div>
    </div>

    <div class="container overflow-hidden">
        <div class="row gy-4 gy-lg-0 gx-xxl-5">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden">
                    <div class="card-body p-0">
                        <figure class="m-0 p-0">
                            <img class="img-fluid img-height" loading="lazy" src="../IMAGES/Teams2/Eyotre Geofrey.jpeg" alt="memmber_1">
                            <figcaption class="m-0 p-4">
                                <h4 class="mb-1">Eyotre Geofrey</h4>
                                <p class="text-secondary mb-0">Founder & Developer</p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden">
                    <div class="card-body p-0">
                        <figure class="m-0 p-0">
                            <img class="img-fluid img-height" loading="lazy" src="../IMAGES/Teams2/Letaa Godswill Samuel.jpeg" alt="memmber_2">
                            <figcaption class="m-0 p-4">
                                <h4 class="mb-1">Letaa Godswill S</h4>
                                <p class="text-secondary mb-0">Graphics Advisor/Developer</p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden">
                    <div class="card-body p-0">
                        <figure class="m-0 p-0">
                            <img class="img-fluid img-height" loading="lazy" src="../IMAGES/Teams2/Ava Jovia Ayikoru.jpeg" alt="memmber_1" alt="">
                            <figcaption class="m-0 p-4">
                                <h4 class="mb-1">Ava jovia Ayikoru</h4>
                                <p class="text-secondary mb-0">Senior Midwife/Editorial Team</p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="card border-0 border-bottom border-primary shadow-sm overflow-hidden">
                    <div class="card-body p-0">
                        <figure class="m-0 p-0">
                            <img class="img-fluid img-height" loading="lazy" src="../IMAGES/Teams2/Dada Perpetua.jpeg" alt="">
                            <figcaption class="m-0 p-4">
                                <h4 class="mb-1">Dada Perpetua</h4>
                                <p class="text-secondary mb-0">Team Lead</p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center">
                <p class="special-p"><a href="#" class="btn btn-warning mt-3">Read More</a></p>
            </div>
        </div>
    </div>
</section>

<style>
    .img-height {
        height: 300px;
        object-fit: cover; 
    }
</style>



<?php
require_once("../functions/footer.php")
?>