<?php $this->load->view('header_view'); ?>

    <div class="main-container">
      <div class="container">
        <div class="row">
          <div class="col-sm-8">
            <?php
              if($news->num_rows() > 0){
                foreach($news->result() as $n){
                  ?>
                  <div class="def-panels mar-top-4">
                    <div class="row">
                      <div class="col-sm-6">
                        <a class="panel-image" href="<?php echo site_url('news/detail/'.$n->news_id.'/'.strtolower(url_title($n->title))); ?>">
                          <img src="<?php echo base_url($n->thumbnail); ?>">
                        </a>
                      </div>
                      <div class="col-sm-6">
                        <a class="news-title" href="<?php echo site_url('news/detail/'.$n->news_id.'/'.strtolower(url_title($n->title))); ?>">
                          <?php echo $n->title; ?>
                        </a>
                        <div class="news-intro">
                          <p>
                            <?php echo $n->content; ?>
                          </p>
                        </div>
                        <div class="news-info">
                          <div class="news-date">
                            <i class="fa fa-calendar"></i>
                            <?php echo date("d M Y", strtotime($n->created_at)); ?>
                          </div>
                          <div class="news-author">
                            <i class="fa fa-user"></i>
                            <?php echo $n->firstname.' '.$n->lastname; ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php
                }
              }
              ?>
          </div>
          <div class="col-sm-4">
            <?php $this->load->view('archive_view'); ?>
            <?php $this->load->view('promo_view'); ?>
          </div>
        </div>
      </div>
    </div>

<?php $this->load->view('footer_view'); ?>