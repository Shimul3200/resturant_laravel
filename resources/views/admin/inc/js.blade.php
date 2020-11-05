

    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{asset('admin/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- Morris.js charts -->
    <script src="{{asset('admin/bower_components/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('admin/bower_components/morris.js/morris.min.js')}}"></script>
    <!-- Sparkline -->
    <script src="{{asset('admin/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
    <!-- jvectormap -->
    <script src="{{asset('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
    <script src="{{asset('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{asset('admin/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
    <!-- daterangepicker -->
    <script src="{{asset('admin/bower_components/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('admin/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <!-- datepicker -->
    <script src="{{asset('admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{asset('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
    <!-- Slimscroll -->
    <script src="{{asset('admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('admin/bower_components/fastclick/lib/fastclick.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('admin/dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{asset('admin/dist/js/pages/dashboard.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('admin/dist/js/demo.js')}}"></script>

    <link rel="stylesheet" href="{{ asset('admin/dist/css/custom.css') }}">
    <script src="{{ asset('admin/dist/js/sweetalert2.all.js') }}"></script>

    <script>
        //   $(".deleteRecord").click(function () {

        // var del = confirm('You want to delete this row!');

        // if (del === true) {
        //     var id = $(this).data("id");
        //     var token = $("meta[name='csrf-token']").attr("content");

        //     $.ajax({
        //         url: "gallery/" + id,
        //         type: 'DELETE',
        //         data: {

        //             "id": id,
        //             "_token": token
        //         },
        //         success: function (res) {
        //             location.reload();
        //         }
        //     });
        // }

        // });

                    //delete function
            async function confirmDelete(id, action) {


            const {value: confirm} = await Swal.fire({
            title: 'Are you sure delete this ?',
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: '#DD6B55',
            confirmButtonText: 'Yes, I am sure!',
            cancelButtonText: "No, cancel it!"
            })
            // if confirm
            if (confirm) {
            if (id > 0) {
            $.ajax({
                url: action,
                type: "GET",
                dataType: 'json',
                cache: false,
                success: function (resp) {
                    console.log(resp);
                    if (resp.success == "OK") {
                        Swal.fire({
                            text: resp.message,
                            type: 'success',
                        });
                        $('.table').find('#tr_' + id).remove();
                    } else {
                        Swal.fire({
                            type: 'error',
                            title: '<P style="color: red;">Oops...<p>',
                            text: resp.errors,
                            footer: '<b> Something Wrong</b>'
                        });
                    }
                },
                error: function (e) {

                    alert("some thing want wrong");
                }
            });
            }
            } else {
            Swal.fire({
            type: 'info',
            title: 'Good',
            text: 'This is Safe!',
            });
            }
            }

            </script>


<script>

function triggerClick() {
                document.querySelector('#sliderImage').click();
            }
            function displayImage(e) {
                if (e.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function (e) {
                        document.querySelector('#sliderDisplay').setAttribute('src', e.target.result);
                    }
                    reader.readAsDataURL(e.files[0]);
                }
            }

</script>


<script>
    $(function () {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': false,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    });
</script>