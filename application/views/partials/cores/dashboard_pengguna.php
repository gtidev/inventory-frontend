<div class="table-responsive">
    <a href="<?php echo base_url('/Pengguna/create')?>">
        <button class="btn btn-success btn-user btn-sm-4 ml-4"> <i class="fa fa-edit"></i> Create </button>
    </a>
  <table class="table table-striped table-bordered dt-responsive" id="isiPekerja" width="100%" cellspacing="0">
    <thead>
        <tr class="text-center">
        <th>No.</th>
        <th>Username</th>
        <th>ID Pekerja</th>
        <th>Status Persetujuan</th>
        <th>Status Aktif</th>
        <th>Tanggal Input</th>
        <th>Tanggal Rubah</th>
        <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
      <?php 
        $no = 1;
        foreach($pengguna as $value) {
      ?>
      <input type="hidden" name="id" class="form-control" value="<?php echo $value->id;  ?>">
      <th scope="row"><?php echo $no++; ?></th>
      
      <td><?php echo $value->username;?></td>
      <td><?php echo $value->id_pekerja;?></td>
      <td><?php echo $value->status_persetujuan;?></td>
      <td><?php echo $value->status_aktif;?></td>
      <td><?php echo $value->tanggal_input;?></td>
      <td><?php echo $value->tanggal_rubah;?></td>
      <td>
        <a href="<?php echo base_url('/Pengguna/edit/'.$value->id); ?>" class="btn btn-primary btn-user btn-block"> Edit</a>
        <a href="<?php echo base_url('/Pengguna/doDelete/'.$value->id); ?>" class="btn btn-danger btn-user btn-block">Hapus</a>
        <?php 
          if ($value->status_persetujuan == 'pending') {
        ?>
        <a href="<?php echo base_url('/Pengguna/doAccept/'.$value->id); ?>" class="btn btn-success btn-user btn-block">Setuju</a>
        <a href="<?php echo base_url('/Pengguna/doDecline/'.$value->id); ?>" class="btn btn-danger btn-user btn-block">Tolak</a>
        <?php 
          } 
        ?>
        <?php 
          if ($value->status_persetujuan == 'disetujui') {
        ?>
          <a href="<?php echo base_url('/Pengguna/doActivate/'.$value->id); ?>" class="btn btn-success btn-user btn-block">Aktifkan</a>
          <a href="<?php echo base_url('/Pengguna/doDeactive/'.$value->id); ?>" class="btn btn-danger btn-user btn-block">Matikan</a>
        <?php 
          } 
        ?>
      </td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>

<!--Script Javascript-->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap4.min.js"></script>

<script>
  $(document).ready(function() {
      var table = $('#isiPekerja').DataTable( {
          lengthChange: false,
          buttons: [ 'copy', 'excel', 'csv', 'colvis' ]
      } );

      table.buttons().container()
          .appendTo( '#example_wrapper .col-md-6:eq(0)' );
  } );
</script>