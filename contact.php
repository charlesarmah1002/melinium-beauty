<?php include('includes/header.php') ?>
<main onclick="menuShut()">
    <section class="contact location">
        <div class="map-container">
            <div class="map">
                <div class="mapouter">
                    <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=600&amp;hl=en&amp;q=darkuman&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://connectionsgame.org/">Connections Puzzle</a></div>
                    <style>
                        .mapouter {
                            position: relative;
                            text-align: right;
                            width: 100%;
                            height: 100%;
                        }

                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            width: 100%;
                            height: 100%;
                        }

                        .gmap_iframe {
                            height: 100% !important;
                        }
                    </style>
                </div>
            </div>
        </div>
    </section>
    <section class="contact details">
        <ul>
            <li><a href=""><i class="ri-map-pin-2-line"></i><span>Darkuman - Accra</span></a></li>
            <li><a href="tel:+233530644335"><i class="ri-phone-line"></i><span>+233 (0) 53 064 4335</span></a></li>
            <li><a href="mailto:westkhay1982@gmail.com"><i class="ri-mail-line"></i><span>Melinium Beauty</span></a></li>
            <li><a href=""><i class="ri-instagram-line"></i><span>melinium.beauty</span></a></li>
            <li><a href=""><i class="ri-facebook-fill"></i><span>melinium.beauty</span></a></li>
        </ul>
    </section>
    <section id="feedback">
        <div class="form">
            <h4>Give us your feedback</h4>
            <form action="">
                <div class="field">
                    <input type="text" name="name" id="name" placeholder="Fullname">
                </div>
                <div class="field">
                    <input type="text" name="email" id="email" placeholder="Email">
                </div>
                <div class="field textarea">
                    <textarea name="feedback" id="feedback" placeholder="Your message here"></textarea>
                </div>
                <div class="field">
                    <span class="btn"><i class="ri-send-plane-fill"></i><span>Submit</span></span>
                </div>
            </form>
        </div>
    </section>
</main>
<?php include('includes/footer.php') ?>