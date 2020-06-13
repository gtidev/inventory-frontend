<script>
  $('.datepicker').datepicker({
    format: 'mm/dd/yyyy',
    startDate: '-3d'
  });
</script>

<div class="container">
    <!-- Nested Row within Card Body -->
    <div class="row">
      <div class="col-sm-12">
          <form name="doCreate" action="<?php echo base_url('/Perusahaan/doCreate')?>" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
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
                      <div class="col-md-4 mb-3">
                        <label for="propinsi">Kategori</label>
                        <select class="custom-select" name="id_kategori">
                            <option selected disabled value="">Pilih</option>
                            <?php 
                                foreach($kategori as $value) {
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
                      <div class="col-md-4 mb-3">
                        <label for="prestasi">Alamat</label>
                        <textarea rows="4" cols="50" class="form-control" name="alamat"></textarea>
                        <div class="valid-feedback">
                            ✓
                        </div>
                        <div class="invalid-feedback">
                            Harap di isi.
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <label for="nama">No. Telp</label>
                        <input type="text" class="form-control" name="no_telefon">
                        <div class="valid-feedback">
                            ✓
                        </div>
                        <div class="invalid-feedback">
                            Harap di isi.
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <label for="nama">Email</label>
                        <input type="email" class="form-control" name="email">
                        <div class="valid-feedback">
                            ✓
                        </div>
                        <div class="invalid-feedback">
                            Harap di isi.
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <label for="nama">Kedudukan Perusahaan</label>
                        <input type="text" class="form-control" name="kedudukan_perusahaan">
                        <div class="valid-feedback">
                            ✓
                        </div>
                        <div class="invalid-feedback">
                            Harap di isi.
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <label for="nama">Tipe Perusahaan</label>
                        <input type="text" class="form-control" name="tipe_perusahaan">
                        <div class="valid-feedback">
                            ✓
                        </div>
                        <div class="invalid-feedback">
                            Harap di isi.
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <label for="prestasi">Deskripsi</label>
                        <textarea rows="4" cols="50" class="form-control" name="deskripsi"></textarea>
                        <div class="valid-feedback">
                            ✓
                        </div>
                        <div class="invalid-feedback">
                            Harap di isi.
                        </div>
                      </div>
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
                      <a href="<?php echo base_url('/Perusahaan'); ?>" class="btn btn-danger">Batal</a>
                  </div>
              </div>
          </form>
      </div>
    </div>
</div>