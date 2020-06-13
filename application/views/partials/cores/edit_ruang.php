<?php
    foreach($ruang as $dataRuang) {
?>
<div class="container">
    <!-- Nested Row within Card Body -->
    <div class="row">
      <div class="col-sm-12">
          <form name="doEdit" action="<?php echo base_url('/Ruang/doEdit/'.$dataRuang->id);?>" method="post" class="needs-validation" enctype="multipart/form-data" novalidate>
              <hr><h5 class="text-center">Input Ruang</h5><hr>
                    <div class="form-row">
                      <div class="col-md-4 mb-3">
                        <label for="propinsi">Kategori</label>
                        <select class="custom-select" name="id_kategori">
                            <option selected disabled value="">Pilih</option>
                            <?php 
                                foreach($kategori as $value) {
                                  $selected = '';
                                  if($value->id == $dataRuang->id_kategori) $selected = 'selected'; 
                            ?>
                              <option value="<?php echo $value->id; ?>" <?php echo $selected ?>><?php echo $value->nama; ?></option>
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
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" value="<?php echo $dataRuang->nama; ?>" required>
                        <div class="valid-feedback">
                            ✓
                        </div>
                        <div class="invalid-feedback">
                            Harap di isi.
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <label for="sku">Jenis</label>
                        <input type="text" class="form-control" name="jenis" value="<?php echo $dataRuang->jenis;?>">
                        <div class="valid-feedback">
                            ✓
                        </div>
                        <div class="invalid-feedback">
                            Harap di isi.
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <label for="nama">Luas</label>
                        <input type="text" class="form-control" name="luas" value="<?php echo $dataRuang->luas; ?>" >
                        <div class="valid-feedback">
                            ✓
                        </div>
                        <div class="invalid-feedback">
                            Harap di isi.
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <label for="nama">Volume</label>
                        <input type="text" class="form-control" name="volume" value="<?php echo $dataRuang->volume; ?>" >
                        <div class="valid-feedback">
                            ✓
                        </div>
                        <div class="invalid-feedback">
                            Harap di isi.
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <label for="nama">Panjang</label>
                        <input type="text" class="form-control" name="panjang" value="<?php echo $dataRuang->panjang; ?>" >
                        <div class="valid-feedback">
                            ✓
                        </div>
                        <div class="invalid-feedback">
                            Harap di isi.
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <label for="nama">Lebar</label>
                        <input type="text" class="form-control" name="lebar" value="<?php echo $dataRuang->lebar; ?>" >
                        <div class="valid-feedback">
                            ✓
                        </div>
                        <div class="invalid-feedback">
                            Harap di isi.
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <label for="nama">Tinggi</label>
                        <input type="text" class="form-control" name="tinggi" value="<?php echo $dataRuang->tinggi; ?>" >
                        <div class="valid-feedback">
                            ✓
                        </div>
                        <div class="invalid-feedback">
                            Harap di isi.
                        </div>
                      </div>
                      <div class="col-md-4 mb-3">
                        <label for="prestasi">Kondisi</label>
                        <textarea rows="4" cols="50" class="form-control" name="kondisi"><?php echo $dataRuang->kondisi; ?></textarea>
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
                      <a href="<?php echo base_url('/Ruang'); ?>" class="btn btn-danger">Batal</a>
                  </div>
              </div>
          </form>
      </div>
    </div>
</div>
<?php
    }
?>