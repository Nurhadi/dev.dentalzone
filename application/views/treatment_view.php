<?php $this->load->view('header_view'); ?>

    <div class="main-container">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2 text-center">
            <h2>
              <?php echo $page->title; ?>
            </h2>
            <p>
              <?php echo $page->content; ?>
            </p>
          </div>
        </div>
        <?php
          if($treatments->num_rows() > 0){
            foreach ($treatments->result() as $treatment){
              ?>
                <div class="row" style="margin-bottom:20px;">
                  <div class="col-sm-10 col-sm-offset-1">
                    <h3 class="text-center"><?php echo $treatment->title; ?></h3>
                    <img src="<?php echo base_url($treatment->big_image); ?>">
                    <div class="row" style="margin-top:20px;">
                      <div class="col-sm-3">
                        <img src="<?php echo base_url($treatment->small_image_1); ?>">
                      </div>
                      <div class="col-sm-3">
                        <img src="<?php echo base_url($treatment->small_image_2); ?>">
                      </div>
                      <div class="col-sm-3">
                        <img src="<?php echo base_url($treatment->small_image_3); ?>">
                      </div>
                      <div class="col-sm-3">
                        <img src="<?php echo base_url($treatment->small_image_4); ?>">
                      </div>
                    </div>
                  </div>
                </div>
              <?php
            }
          }
        ?>
      </div>
    </div>

<?php $this->load->view('footer_view'); ?>