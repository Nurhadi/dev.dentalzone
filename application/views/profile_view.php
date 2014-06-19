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
        <div class="profile-row">
          <?php
            if($profiles->num_rows() > 0){
              foreach ($profiles->result() as $profile) {
                ?>
                <div class="col-sm-4 col-md-3">
                  <div class="profile-panels">
                    <a class="profile-panels-img" href="<?php echo site_url('profile/dentist/'.$profile->profile_id.'/'.strtolower(url_title($profile->fullname))); ?>">
                      <div class="hover-layer">
                        <i class="glyphicon glyphicon-search"></i>
                      </div>
                      <img src="<?php echo base_url($profile->photo); ?>">
                    </a>
                    <a class="doctor-name" href="<?php echo site_url('profile/detail'); ?>">
                      <?php echo $profile->fullname; ?>
                    </a>
                    <div class="profile-panels-position">
                      <?php echo $profile->position; ?>
                    </div>
                  </div>
                </div>
                <?php
              }
            }
          ?>
        </div>
      </div>
    </div>

<?php $this->load->view('footer_view'); ?>