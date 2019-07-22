 
<footer class="footer-area footer-background">
    <div class="container footer-widgets">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="widget">
                    <img alt="image" src="assets/images/logo.png">
                    <p>Travelers are always discoverers, especially those who travel by air. There are no signposts in the sky to show a man has passed that way before. There are no channels marked. The flier breaks each second into new uncharted seas.</p>
                </div>
            </div>


            <!-- fourth block -->
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="widget">
                    <h4>Quick Links</h4>

                    <ul class="footer-addres ">
                        <li>
                            <a href="index.php">Home</a>
                        </li>
                        <li>
                            <a href="about.php">About Us</a>
                        </li>
                        <li>
                            <a href="service.php">Service</a>
                        </li>
                        <li>
                            <a href="things-to-do.php">Things to do</a>
                        </li> 

                        <li>
                            <a href="destinations.php">Destination</a>
                        </li>
                        <li>
                            <a href="gallery.php">Gallery</a>
                        </li>
                        <li>
                            <a href="contact.php">Contact us</a>
                        </li>

                    </ul>

                </div>
            </div>
            <!-- fourth block -->
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="widget">
                    <h4>Info</h4>
                    <div class="vertical-space-40"></div>
                    <div class="vertical-space-10"></div>
                    <ul class="footer-address">
                        <li>
                            <i class="fa fa-map-marker" aria-hidden="true"></i> No 34, Galle Road, Mathara
                        </li>
                        <li>
                            <i class="fa fa-phone" aria-hidden="true"></i>(+94) 77 256 8596
                        </li>
                        <li>
                            <i class="fa fa-envelope-o" aria-hidden="true"></i>
                            <a href="#">info@toursite.com<br/>
                                www.toursite.com</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- third block -->
            <div class="col-xs-12 col-sm-6 col-md-3">
                <div class="widget">
                    <h4>Gallery</h4> 
                    <ul class="instagram-list"> 
                        <?php
                        $ALBUM_PHOTO = new AlbumPhoto(NULL);
                        foreach ($ALBUM_PHOTO->getAlbumPhotosById(1) as $key => $album_photo) {
                            if ($key < 12) {
                                ?>
                                <li class="gallery  ">

                                    <a href="upload/photo-album/gallery/<?php echo $album_photo['image_name'] ?>" class="big"><img src="upload/photo-album/gallery/thumb/<?php echo $album_photo['image_name'] ?>" alt="<?php echo $album_photo['caption'] ?>" title="<?php echo $album_photo['caption'] ?>" /></a>


                                </li>
                            <?php }
                        }
                        ?> 
                    </ul> 
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="footer-text left-align">
                        <h6>copyright &copy; Tour 2019. all rights Reserved</h6>
                    </div>
                </div>
                <div class="col-md-6 right-align">
                    <div class="footer-text  ">
                        <h6>Design By: Synotec </h6> 
                    </div>

                </div>
            </div>
        </div>
    </div>
</footer>

 


<script type="text/javascript">
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE, autoDisplay: false}, 'google_translate_element');
    }
</script>        
<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit" type="text/javascript"></script>

<script type="text/javascript">
$('.translation-links a').click(function () {
var lang = $(this).data('lang');
var $frame = $('.goog-te-menu-frame:first');
if (!$frame.size()) {
    alert("Error: Could not find Google translate frame.");
    return false;
}
$frame.contents().find('.goog-te-menu2-item span.text:contains(' + lang + ')').get(0).click();
return false;
});
</script>