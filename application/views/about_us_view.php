<?php $this->load->view('header_view'); ?>


    <div class="main-container">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2 text-center">
            <h2>
              Klinik Gigi Dental Zone
            </h2>
            <p>
              Candy canes biscuit caramels topping gingerbread fruitcake apple pie icing. Powder jelly beans sugar plum halvah fruitcake. I love carrot cake brownie biscuit carrot cake. Chupa chups ice cream pastry soufflé caramels.
            </p>
          </div>
        </div>
        <div class="profile-row">
          <div class="col-sm-10 col-sm-offset-1">
            <div class="def-panels-2" style="margin-bottom:0px; padding-top:10px;">
              <h2 class="text-center">Our Location</h2>
              <div id="map-canvas"></div>
            </div>
          </div>
        </div>
        <div class="profile-row">
          <div class="col-sm-10 col-sm-offset-1">
            <div class="def-panels-2" style="margin-bottom:0px; padding-top:10px;">
              <h2 class="text-center">Contact Us</h2>
              <h4 class="text-center">Jika Anda memiliki pertanyaan, Anda dapat melakukannya dengan cara mengisi form dibawah ini</h4>
              <hr/>
              <!-- no role form -->
              <?php echo form_open('about_us/send_message'); ?>
                <div class="form-group">
                  <label for="form-nama-lengkap">Nama Lengkap (*)</label>
                  <input type="text" class="form-control" id="form-nama-lengkap" placeholder="Masukkan Nama Anda" style="width:50%;" name="fullname">
                </div>
                <div class="form-group">
                  <label for="form-alamat-email">Alamat Email (*)</label>
                  <input type="email" class="form-control" id="form-alamat-email" placeholder="Masukkan Alamat Email Anda" style="width:50%;" name="email">
                </div>
                <div class="form-group">
                  <label for="form-subject">Subject</label>
                  <input type="text" class="form-control" id="form-judul-subject" placeholder="Masukkan Subject" style="width:50%;" name="subject">
                </div>
                <div class="form-group">
                  <label for="form-pesan-pertanyaan">Isi Pesan atau Pertanyaan (*)</label>
                  <textarea class="form-control" id="form-pesan-pertanyaan" rows="3" name="message"></textarea>
                </div>
                <button type="submit" class="btn btn-info">SUBMIT</button><br><br>
                <div style="font-size:0.9em; color:red; font-style:italic;">
                  <span>(*) Wajib diisi</span><br>
                  <span>(**) Pesan atau pertanyaan akan ditanggapi melalui email</span>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

<script type="text/javascript" src="<?php echo base_url('assets/scripts/about_us.js') ;?>"></script>
<?php $this->load->view('footer_view'); ?>