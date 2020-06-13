<div class="container">
    <!-- Nested Row within Card Body -->
    <div class="row">
      <div class="col-sm-12">
          <form name="doCreate" action="<?php echo base_url('/Kategori/doCreate')?>" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
              <hr><h5 class="text-center">Input Kategori</h5><hr>
                    <div class="form-row">
                      <div class="col-md-4 mb-3">
                        <label for="propinsi">Referensi</label>
                        <select class="custom-select" name="id_referensi">
                            <option selected disabled value="">Pilih</option>
                            <?php 
                                foreach($refensi as $value) {
                            ?>
                              <option value="<?php echo $value->id; ?>"><?php echo $value->deskripsi; ?></option>
                            <?php } ?>
                        </select>
                            <div class="valid-feedback">
                            ✓
                            </div>
                            <div class="invalid-feedback">
                            Harap di isi.
                            </div>
                      </div>
                      <!-- <div class="col-md-4 mb-3">
                        <label for="propinsi">Turunan dari Kategori</label>
                        <select class="custom-select" name="id_kategori_parent">
                            <option selected disabled value="">Pilih</option>
                            <?php 
                                foreach($kategori_parent as $value) {
                            ?>
                              <option value="<?php echo $value->id; ?>"><?php echo $value->nama; ?></option>
                            <?php } ?>
                        </select>
                            <div class="valid-feedback">
                            ✓
                            </div>
                            <div class="invalid-feedback">
                            Harap di isi.
                            </div>
                      </div> -->
                      <div class="col-md-4 mb-3">
                        <label for="propinsi">Ruang</label>
                        <select class="custom-select" name="id_ruang">
                            <option selected disabled value="">Pilih</option>
                            <?php 
                                foreach($ruang as $value) {
                            ?>
                              <option value="<?php echo $value->id; ?>"><?php echo $value->nama; ?></option>
                            <?php } ?>
                        </select>
                            <div class="valid-feedback">
                            ✓
                            </div>
                            <div class="invalid-feedback">
                            Harap di isi.
                            </div>
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="col-md-4 mb-3">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" required>
                        <div class="valid-feedback">
                            ✓
                        </div>
                        <div class="invalid-feedback">
                            Harap di isi.
                        </div>
                      </div>
                      <!-- <div class="col-md-4 mb-3">
                        <label for="propinsi">Kategori</label>
                        <select class="custom-select" name="kategori_untuk">
                            <option selected disabled value="">Pilih</option>
                            <?php 
                                foreach($kategori_untuk as $value) {
                            ?>
                              <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
                            <?php } ?>
                        </select>
                            <div class="valid-feedback">
                            ✓
                            </div>
                            <div class="invalid-feedback">
                            Harap di isi.
                            </div>
                      </div> -->
                    </div>

                    <!-- <div class="form-row">
                      <div class="col-md-4 mb-3">
                          <label for="foto">Unggah Data Keseluruhan</label><br>
                          <input type="file" class="btn btn-success" name="dokumen" accept=".jpg">
                          <small>*Unggah Foto, Sertifikat dengan ekstensi .zip*</small>
                          <small>*Maksimal ukuran dokumen 10 mb*</small>
                        <div class="valid-feedback">
                            ✓
                        </div>
                        <div class="invalid-feedback">
                            Harap di isi.
                        </div>
                      </div>
                    </div> -->
                  <hr>
              <div class="form-row text-center">
                  <div class="col-md-12 mb-3">
                      <button class="btn btn-primary" type="submit">Simpan</button>
                      <a href="<?php echo base_url('/Kategori'); ?>" class="btn btn-danger">Batal</a>
                  </div>
              </div>
          </form>
      </div>
    </div>
</div>