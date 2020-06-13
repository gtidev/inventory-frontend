<?php
    foreach($pengguna as $dataPengguna) {
?>
<div class="container">
    <!-- Nested Row within Card Body -->
    <div class="row">
      <div class="col-sm-12">
          <form name="doEdit" action="<?php echo base_url('/Pengguna/doEdit/'.$dataPengguna->id); ?>" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
              <hr><h5 class="text-center">Input Kategori</h5><hr>
                    <div class="form-row">
                      <div class="col-md-4 mb-3">
                        <label for="nama">Username</label>
                        <input type="text" class="form-control" name="nama" value="<?php echo $dataPengguna->username; ?>" required>
                        <div class="valid-feedback">
                            ✓
                        </div>
                        <div class="invalid-feedback">
                            Harap di isi.
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <label for="nama">Password</label>
                        <input type="password" class="form-control" name="password">
                        <div class="valid-feedback">
                            ✓
                        </div>
                        <div class="invalid-feedback">
                            Harap di isi.
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <input type="text" class="form-control" name="hash" value="<?php echo $dataPengguna->hash; ?>" hidden>
                      </div>
                      <div class="col-md-4 mb-3">
                        <label for="propinsi">Pekerja</label>
                        <select class="custom-select" name="id_pekerja">
                            <option selected disabled value="">Pilih</option>
                            <?php 
                                foreach($pekerja as $value) {
                                    $selected = '';
                                    if($value->id == $dataPengguna->id_pekerja) $selected = 'selected'; 
                            ?>
                              <option value="<?php echo $value->id; ?>" <?php echo $selected; ?>><?php echo $value->nama; ?></option>
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
                      <a href="<?php echo base_url('/Pengguna'); ?>" class="btn btn-danger">Batal</a>
                  </div>
              </div>
          </form>
      </div>
    </div>
</div>
<?php
    }
?>