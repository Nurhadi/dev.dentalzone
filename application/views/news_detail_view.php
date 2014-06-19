<?php $this->load->view('header_view'); ?>

    <div class="main-container">
      <div class="container">
        <div class="row">
          <div class="col-sm-8">
            <div class="def-panels mar-top-4">
              <div class="offset-img mar-btm-2">
                <img src="<?php echo base_url($news->thumbnail); ?>">
              </div>
              <div class="news-body">
                <h2 class="news-title">
                  <?php echo $news->title; ?>
                </h2>
                <div class="news-detail-info">
                  <div class="news-date">
                    <i class="fa fa-calendar"></i>
                    <?php echo date("d M Y", strtotime($news->created_at)); ?>
                  </div>
                  <div class="news-author">
                    <i class="fa fa-user"></i>
                    <?php echo $news->firstname.' '.$news->lastname; ?>
                  </div>
                </div>
                <div class="news-article">
                  <?php echo $news->content; ?>
                </div>
              </div>
            </div>
            <div class="row article-nav">
              <div class="col-xs-6">
                <a class="pull-left disabled" href="#"><i class="fa fa-angle-left"></i>Previous Article</a>
              </div>
              <div class="col-xs-6">
                <a class="pull-right" href="#">Next Article<i class="fa fa-angle-right"></i></a>
              </div>
            </div>
          </div>
          <div class="col-sm-4">
            <?php $this->load->view('archive_view'); ?>
            <?php $this->load->view('promo_view'); ?>
          </div>
        </div>
      </div>
    </div>

<?php $this->load->view('footer_view'); ?>