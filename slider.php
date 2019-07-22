 

<div id="mu-slider">
    <div class="mu-slide">
        <?php
        $SLIDER = new Slider(NULL);
        foreach ($SLIDER->all() as $key => $slider) {
            ?>
            <!-- Start single slide  -->
            <div class="mu-single-slide">
                <img src="upload/slider/<?php echo $slider['image_name'] ?>" alt="slider img">
                <div class="mu-single-slide-content-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mu-single-slide-content" style="margin-top: 290px;">
                                    <h1 style="text-shadow: 0 2px 5px rgba(0, 0, 0, .5)"><?php echo $slider['title'] ?></h1>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis,</p>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End single slide  -->
        <?php } ?>
    </div>
</div>