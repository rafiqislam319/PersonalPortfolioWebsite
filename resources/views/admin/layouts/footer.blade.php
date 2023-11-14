<!-- partial:partials/_footer.html -->
<footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Premium <a href="#" target="_blank">Rafiqul's admin template</a> from Rafiqul.</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Copyright © 2023. All rights reserved.</span>
    </div>
</footer>
<!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="{{ asset('admin') }}/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{ asset('admin') }}/vendors/chart.js/Chart.min.js"></script>
<script src="{{ asset('admin') }}/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="{{ asset('admin') }}/vendors/progressbar.js/progressbar.min.js"></script>

<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ asset('admin') }}/js/off-canvas.js"></script>
<script src="{{ asset('admin') }}/js/hoverable-collapse.js"></script>
<script src="{{ asset('admin') }}/js/template.js"></script>
<script src="{{ asset('admin') }}/js/settings.js"></script>
<script src="{{ asset('admin') }}/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{ asset('admin') }}/js/jquery.cookie.js" type="text/javascript"></script>
<script src="{{ asset('admin') }}/js/dashboard.js"></script>
<script src="{{ asset('admin') }}/js/Chart.roundedBarCharts.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/@tinymce/tinymce-jquery@1/dist/tinymce-jquery.min.js"></script>

<!-- End custom js for this page-->

<!-- //following is for tinymce editor -->
<script>
    $('#tinyEditor').tinymce({

        height: 200,

        menubar: false,

        plugins: [

            'a11ychecker', 'advlist', 'advcode', 'advtable', 'autolink', 'checklist', 'export',

            'lists', 'link', 'image', 'charmap', 'preview', 'anchor', 'searchreplace', 'visualblocks',

            'powerpaste', 'fullscreen', 'formatpainter', 'insertdatetime', 'media', 'table', 'help', 'wordcount'

        ],

        toolbar: 'undo redo | a11ycheck casechange blocks | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist checklist outdent indent | removeformat | code table help'

    });
</script>



</body>

</html>