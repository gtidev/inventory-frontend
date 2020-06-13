<!DOCTYPE html>
<html lang="en">

<?php echo isset($header) ? $header : ''; ?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

  <?php echo isset($sidebar) ? $sidebar : ''; ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

      <?php echo isset($topbar) ? $topbar : ''; ?>

      <?php echo isset($body) ? $body : ''; ?>

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- === Logout Modal Here === -->

  <?php echo isset($footer) ? $footer : ''; ?>
</body>

</html>
