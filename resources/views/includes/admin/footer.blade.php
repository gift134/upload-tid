  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2017 <a href="{{ url('admin/dashboard') }}">TV Internet Deals</a>.</strong> All rights
    reserved.

  </footer>

<!-- Control Sidebar -->

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

  <script type="text/javascript" charset="utf-8" async defer>
    $(function() {
        $('.grid-refresh').on('click', function() {
              $.pjax.reload('#pjax-container');
              toastr.success('Refresh succeeded !');
        });

        $('.form-history-back').on('click', function (event) {
            event.preventDefault();
            history.back(1);
        });

        $('#site_phone').mask(' 1-000-000-0000');


     });
  </script>

<script type="text/javascript">
    CKEDITOR.replace('body', {
        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>

  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-136087943-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-136087943-1');
</script>
