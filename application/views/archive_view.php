            <div class="def-panels widget mar-top-4">
              <div class="widget-title">
                Archive News
              </div>
              <div class="widget-body">
                <div id="archive-accordion">
                  <?php
                    if($archives2014->num_rows() > 0)
                    {
                      ?>
                      <div class="panel archive">
                        <h4 class="panel-title">
                          <a data-parent="#archive-accordion" data-toggle="collapse" href="#collapse-2014">
                            <i class="fa fa-caret-right"></i>2014 (<?php echo $archives2014->num_rows(); ?>)
                          </a>
                        </h4>
                        <div class="collapse in" id="collapse-2014">
                          <ul class="archive-links">
                            <?php
                              foreach ($archives2014->result() as $archive)
                              {
                                ?>
                                <li>
                                  <a href="<?php echo site_url('news/detail/'.$archive->news_id.'/'.strtolower(url_title($archive->title))); ?>">
                                    <?php echo $archive->title; ?>
                                  </a>
                                </li>
                                <?php
                              }
                            ?>
                          </ul>
                        </div>
                      </div>
                      <?php
                    }
                  ?>
                </div>
              </div>
            </div>