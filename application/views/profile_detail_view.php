<?php $this->load->view('header_view'); ?>

    <div class="main-container">
      <div class="container">
        <div class="row">
          <div class="col-sm-10 col-sm-offset-1">
            <div class="def-panels mar-top-4">
              <div class="row">
                <div class="col-sm-6">
                  <div class="panel-image" style="min-height:450px;">
                    <img src="<?php echo base_url($profile->photo); ?>">
                  </div>
                </div>
                <div class="col-sm-6">
                  <h3 class="profile-name">
                    <?php echo $profile->fullname; ?>
                  </h3>
                  <h4 class="profile-secondary-info">
                    <?php echo $profile->position; ?>
                  </h4>
                  <div class="mar-btm-2">
                    <?php echo $profile->description; ?>
                  </div>
                  <h4 class="profile-secondary-info" style="display:none;">
                    Jadwal Praktek
                  </h4>
                  <table class="table table-jadwal-praktek-profile" style="display:none;">
                    <thead>
                      <tr>
                        <th>
                          Senin
                        </th>
                        <th>
                          Kamis
                        </th>
                        <th>
                          Sabtu
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          Pagi<br>-
                        </td>
                        <td>
                          Pagi<br>Sore
                        </td>
                        <td>
                          -<br>Sore
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php $this->load->view('footer_view'); ?>