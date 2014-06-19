<?php $this->load->view('header_view'); ?>

    <div class="carousel slide home-carousel" data-ride="carousel" id="carousel-home">
      <ol class="carousel-indicators">
        <?php
          if($sliders->num_rows() > 0){
            $active_counter = "active";
            for($counter = 0; $counter <= $sliders->num_rows() - 1; $counter++){
              ?>
                <li class="<?php echo $active_counter; ?>" data-slide-to="<?php echo $counter; ?>" data-target="#carousel-home"></li>
              <?php
              $active_counter = "";
            }
          }
        ?>
      </ol>
      <div class="carousel-inner">
        <?php
          if($sliders->num_rows() > 0){
            $active = "active";
            foreach($sliders->result() as $slider){
              ?>
                <div class="item <?php echo $active;?>">
                  <img alt="<?php echo $slider->slider_name; ?>" class="carousel-img" src="<?php echo base_url($slider->slider_path); ?>">
                </div>
              <?php
              $active = "";
            }
          }
        ?>
      </div>
      <div class="carousel-overlay">
        <!-- <h1> -->
          <img src="<?php echo base_url('assets/images/dental-zone-text.png'); ?>" width="200">
        <!-- </h1> -->
        <div class="subtitle">
          <!-- Pilihan terbaik untuk konsultasi dan perawatan gigi sehat Anda -->
          <?php echo $homepage->slider_description; ?>
        </div>
      </div>
    </div>
    <div class="main-container">
      <div class="container">
        <div class="def-panels-2 row">
          <div class="col-sm-8 col-sm-offset-2">
            <div class="text-center">
              <h2>
                <!-- Klinik Gigi Bandung -->
                <?php echo $homepage->title; ?>
              </h2>
              <p class="subtitle">
                <!-- Wafer macaroon I love. Jelly beans applicake cheesecake topping ice cream. Cookie I love apple pie croissant caramels. -->
                <?php echo $homepage->content; ?>
              </p>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="row">
              <div class="row">
                <hr>
                <br>
              </div>
            </div>
          </div>
          <div class="col-sm-10 col-sm-offset-1">
            <!-- <h2 class="text-center">
              Dental Zone
            </h2> -->
            <div class="blue-panels">
              <div class="row">
                <div class="col-sm-6">
                  <div class="panel-image">
                    <!-- <img src="<?php echo base_url('assets/images/slider-example-1.jpg');?>"> -->
                    <img src="<?php echo base_url($homepage->image_address);?>">
                  </div>
                </div>
                <div class="col-sm-6">
                  <h4 class="text-bold">
                    Alamat :
                  </h4>
                  <p>
                    <!-- Candy canes biscuit caramels topping gingerbread fruitcake apple pie icing. Powder jelly beans sugar plum halvah fruitcake. I love carrot cake brownie biscuit carrot cake. Chupa chups ice cream pastry soufflé caramels. -->
                    <?php echo $homepage->address; ?>
                  </p>
                  <h4 class="text-bold">
                    Telepon :
                  </h4>
                  <p 022="">
                    <!-- 123456 - (022) 321654 -->
                    <?php echo $homepage->phone; ?>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="def-panels-2 row">
          <div class="col-sm-8 col-sm-offset-2">
            <div class="text-center">
              <h2>
                Our Founder
              </h2>
            </div>
          </div>
          <div class="col-sm-12">
            <div class="row">
              <div class="row">
                <hr>
              </div>
            </div>
          </div>
          <div class="founder pos-btm">
            <a class="img-link" href="<?php echo site_url('profile/dentist/0000001/nurhadi-maulana'); ?>">
              <img class="img-circle" src="<?php echo base_url($homepage->image_founder_1); ?>">
            </a>
            <div>
              <a class="doctor-name" href="<?php echo site_url('profile/dentist/0000001/nurhadi-maulana'); ?>">
                Nurhadi Maulana
              </a>
              <p>
                Candy canes biscuit caramels topping gingerbread fruitcake cupcake apple pie icing. Powder jelly beans sugar plum halvah fruitcake.
              </p>
            </div>
          </div>
          <div class="founder pos-btm">
            <a class="img-link" href="<?php echo site_url('profile/dentist/0000002/sastiani-gita-prasastie'); ?>">
              <img class="img-circle" src="<?php echo base_url($homepage->image_founder_2); ?>">
            </a>
            <div>
              <a class="doctor-name" href="<?php echo site_url('profile/dentist/0000002/sastiani-gita-prasastie'); ?>">
                Sastiani Gita Prasastie
              </a>
              <p>
                Candy canes biscuit caramels topping gingerbread fruitcake cupcake apple pie icing. Powder jelly beans sugar plum halvah fruitcake.
              </p>
            </div>
          </div>
        </div>
        <div class="news">
          <h2 class="text-center">
            <a href="<?php echo site_url('news'); ?>" style="text-decoration:none; color:#000;">
              Berita Terbaru
            </a>
          </h2>
          <div class="row">
            <?php
              if($news->num_rows() > 0){
                foreach($news->result() as $n){
                  ?>
                    <div class="news-item">
                      <a class="news-item-img" href="<?php echo site_url('news/detail/'.$n->news_id.'/'.strtolower(url_title($n->title))); ?>">
                        <img src="<?php echo base_url($n->thumbnail); ?>">
                      </a>
                      <a class="news-item-title" href="<?php echo site_url('news/detail/'.$n->news_id.'/'.strtolower(url_title($n->title))); ?>">
                        <?php echo $n->title; ?>
                      </a>
                      <p class="news-item-intro-text">
                        <?php echo $n->content; ?>
                      </p>
                    </div>
                  <?php
                }
              }
            ?>
          </div>
        </div>
      </div>
    </div>

<?php $this->load->view('footer_view'); ?>