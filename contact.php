<html lang="en">
<head>
    <!-- requiring the headlinks -->
    <?php require 'includes/templates/headlinks.php'; ?>
    
    <title>Contact Page</title>
</head>
<body>

    <!-- requiring the header -->
    <?php require 'includes/templates/header.php'; ?>

    <div class="header">
        <div class="header-tp h-full">
            <!-- banner section -->
            <div id="banner">
                <div class="title text-center">
                    <h2>Contact Us</h2>
                    <span class="byline">24/7 customer service.</span>
                </div> 
            </div> 
            <!-- end of banner section -->
        </div>
    </div>

    <!-- second section -->
    <div id="contact_section" class="block">
        <!-- <div class="pushpin-demo-nav -mb-64" data-target="contact_section"> -->
            <div class="row">
                <!-- left section -->
                <div class="col s12">
                    <div class="bg-gray-100 h-full mx-24 shadow-2xl rounded-b-lg">
                        <h4 class="px-32 pt-24 pb-5 text-center text-gray-700 text-2xl font-semibold leading-normal uppercase bold">
                        We&apos;re here to satisfy you with the qulity support.
                        </h4>
                        <p class="px-32 mb-10 justify-start text-xl">
                        Sadia Furnitures is a division of Signature Contracting established 
                        to provide customers with high quality interior and exterior 
                        concrete products and custom woodworking. So feel free to contact us at anytime.
                        </p>

                        <div class="row mb-32">
                            <div class="mx-64 h-32 mb-32">
                                <div class="card">
                                    <div class="card-content">
                                        <form class="row">
                                            <div class="input-field col s12">
                                                <input placeholder="Enter Full name" id="full_name" type="text" class="validate">
                                                <label for="full_name">Full Name</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input placeholder="Enter phone OR email" id="phone OR email" type="text" class="validate">
                                                <label for="contact">Contact</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <textarea placeholder="Enter message" id="message" class="materialize-textarea"></textarea>
                                                <label for="message">Message</label>
                                            </div>
                                            <button class="btn waves-effect blue" type="submit" name="action">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                
            </div>
        <!-- </div> -->
    </div>
    <!-- end of section section -->

    <!-- requiring the footer-->
    <?php require 'includes/templates/footer.php'; ?>
    
</body>
    
    <!-- requiring the jsscripts-->
    <?php require 'includes/templates/jsscripts.php'; ?>
</html>