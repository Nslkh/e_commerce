<footer class="sticky-footer bg-white">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>copyright &copy; <script> document.write(new Date().getFullYear()); </script> - customized by
          <b><a href="https://indrijunanda.gitlab.io/" target="_blank">Narzullo Salakhidinov</a></b>
        </span>
      </div>
    </div>
  </footer>

  <script src="{{ asset('admin/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
  <script src="{{ asset('admin/js/ruang-admin.min.js')}}"></script>
  <script src="{{ asset('admin/vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{ asset('admin/js/demo/chart-area-demo.js')}}"></script>  

  <script type="text/javascript">
    function confirmDelete(){
      return confitm('Are you sure you want to delete ?');
    }
  </script>
</body>

</html>