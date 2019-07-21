<?php
?>

<html lang="en">
<head>
    <!-- requiring the headlinks -->
    <?php require 'includes/templates/headlinks.php'; ?>
    
    <title>Homepage</title>
</head>
<body>

    <!-- requiring the header -->
    <?php require 'includes/templates/header.php'; ?>

    <div class="header">
        <div class="header-tp h-full">
            <!-- banner section -->
            <div id="banner">
                <div class="title text-center">
                    <h2>SADIA FURNITURES</h2>
                    <span class="byline">Your home and concrete experts serving Hamilton and surrounding area.</span>
                </div> 
            </div> 
            <!-- end of banner section -->
        </div>
    </div>

    <!-- second section -->
    <div id="second_section" class="block">
        <div class="pushpin-demo-nav" data-target="second_section">
            <div class="row">
                <!-- left section -->
                <div class="col s12 m7">
                    <div class="row white h-full">
                        <h4 class="px-32 pt-24 pb-5 text-gray-700 text-2xl font-semibold leading-normal uppercase bold">
                            SADIA FURNITURES SPECIALIZES IN CUSTOM WOOD PRODUCTS, CABINETRY, 
                            KITCHENS, LANDSCAPE CONSTRUCTION AS WELL AS CUSTOMIZED INTERIOR AND EXTERIOR CONCRETE PRODUCTS.
                        </h4>
                        <p class="px-32 pb-5 text-xl">Sadia Furnitures is a division of Signature Contracting that offers 
                            high quality concrete and woodworking for your entire home. 
                            We are pleased to be able to offer our customers customized 
                            interior and exterior concrete products as well as uniquely 
                            handcrafted wood products
                        </p>
                        <a href="about.php" class="px-32 no-uderliner text-blue-500 cursor-pointer text-xl">Learn More</a>
                    </div>
                </div>
                <!-- right section -->
                <div class="col s12 m5">
                    <div class="row bg-blue-700 h-full">
                        <h4 class="px-32 pt-24 pb-5 text-xl text-white">CONTACT US</h4>
                        <p class="px-32 text-xl text-white">+232 76 167566</p>
                        <p class="px-32 text-xl text-white">+232 76 167566</p>
                        <hr/>
                        <img src="static/images/logo_transparent.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of section section -->

    <!-- services banner -->
    <div class="row">
        <div class="col s9 grey darken-2 offset-s3 absolute h-32">
            <p class="p-10 text-3xl font-semibold text-white text-center">Services</p>
        </div>
    </div>
    

    <!-- third section -->
    <div id="third_section" class="block">
        <div class="pushpin-demo-nav bg-gray-400" data-target="third_section">
            <div class="row">
                <div class="col s12">
                    <div class="row my-48">
                        <!-- sh01 -->
                        <div class="col s12 m4">
                            <img src="static/images/sh01.jpg" alt="sh01" class="rounded" style="height: 250px; width: 400px">
                            <h4 class="text-center p-4 text-blue-500 text-2xl font-semibold">Interior Concrete</h4>
                            <p class="text-center p-4">Are you searching for a look in your home that 
                                will impress your guests, give a sleek, modern 
                                feel, as well as be practical and easy to maintain? 
                                Let our professionally trained staff show you all of 
                                the ways we can transform your home with customized 
                                concrete products.
                            </p>
                        </div>
                        <!-- sh02 -->
                        <div class="col s12 m4">
                            <img src="static/images/sh02.jpg" alt="sh02" class="rounded" style="height: 250px; width: 400px">
                            <h4 class="text-center p-4 text-blue-500 text-2xl font-semibold">Custom Cabinetry & Vanities</h4>
                            <p class="text-center p-4">Sadia Furniture is pleased to offer custom woodworking services. 
                                We can enhance your living space with custom-designed built-ins such as 
                                entertainment centres, wall units, storage solutions, custom support columns, 
                                wet bars, and reclaimed flooring.
                            </p>
                            

                        </div>
                        <!-- sh03 -->
                        <div class="col s12 m4">
                            <img src="static/images/sh03.jpg" alt="sh03" class="rounded" style="height: 250px; width: 400px">
                            <h4 class="text-center p-4 text-blue-500 text-2xl font-semibold">Home Renovations</h4>
                            <p class="text-center p-4">
                                Looking to custom design your kitchen to suit your taste and lifestyle? 
                                Sadia's Furniture staff will provide valuable insight and exceptional 
                                service no matter the scope of the project.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of third section -->

    
</body>
    <!-- requiring the footer-->
    <?php require 'includes/templates/footer.php'; ?>
    <!-- requiring the jsscripts-->
    <?php require 'includes/templates/jsscripts.php'; ?>
</html>