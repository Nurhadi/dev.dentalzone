            <div class="def-panels widget">
              <div class="widget-title">
                Promo
              </div>
              <div class="widget-body">
                <?php
                  if($promo->num_rows() > 0){
                    foreach($promo->result() as $p){
                      ?>
                        <a class="promo-img" href="<?php echo site_url('promo/detail/'.$p->news_id.'/'.strtolower(url_title($p->title))); ?>">
                          <img src="<?php echo base_url($p->thumbnail); ?>">
                        </a>
                      <?php
                    }
                  }
                ?>
              </div>
            </div>