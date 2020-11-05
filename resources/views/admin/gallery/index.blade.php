@extends('admin.layout.app')

@section('breadcrumb')
    <section class="content-header">
       
                <div class="page-title">
                   
                        <button class="btn btn-primary mt-6" data-toggle="modal" data-target="#addslider"><i class="fa fa-plus"> </i> Add Photo</button>
                
                </div>
          
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Gallery</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
@endsection

@section('content')



<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box box-success">
                <div class="box-header">
                    <h3 class="box-title"><i class="fa fa-list"></i> Gallery</h3>
                </div>
            <!-- /.box-header -->
                <div class="box-body">
                    <table id="example1" class="text-center table table-striped table-bordered">
                        <thead class="bg-success">
                        <tr>
                            <th>SL No</th>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php $i=1;?>

                            @foreach($galleries as $gallery)
                            <tr>
                                 <td>{{$i++}}</td>
                                 <td>{{$gallery->title}}</td>
                                 <td class="avatar">
                                    <div class="round-img">
                                        <img src="{{asset('storage/'.$gallery->image)}}" style=" height: 50px;width: 60px;">
                                    </div>
                                </td>
                                <td style="width: 100px;">
                                    <a class="btn btn-sm btn-success text-white" title="Edit"
                                    data-edit="{{json_encode($gallery)}}" href="#editslider" data-toggle="modal"><i class="fa fa-edit"></i></a>
                                    {{-- <a href="/experience//edit" class="btn btn-success btn-sm" title="Edit"><i class="fa fa-edit"></i></a> --}}
                                    {{-- <a class="btn btn-danger btn-sm deleteRecord" data-id="{{ $gallery->id }}" title="Delete"><i class="fa fa-trash"></i></a> --}}

                                    <a class="btn btn-sm btn-danger text-white" title="Delete"
                                    onclick="confirmDelete('{{$gallery->id}}','{{route('delete.gallery',$gallery->id)}}')"><i
                                            class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                    
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>

<div class="clearfix"></div>

<div class="modal fade" id="addslider" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modalLabel">Add Photo</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{url('admin/gallery')}}" enctype="multipart/form-data" method="post" id="addPhotoSliderForm">
                    @csrf
                    <div class="form-group">
                        <label>Title</label>
                        <input class="form-control" placeholder="Image title" name="title" id="title">
                    </div>
                   
                    <div class="form-group">
                        <label class="text-black">Image</label>
                        <br/>
                        <input type="file" name="image" onchange="displayImage(this)" class="form-control"
                               id="image" >
                               </br>
                        <img src="{{asset('frontend/images/preview.png')}}" id="sliderDisplay" style="width:200px;height:120px;">
                        
                    </div>
                   
                    <button type="submit" class="btn btn-success btn-block">Save</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn-sm btn-danger btn-lg" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<!--- For Update -->

<div class="modal fade" id="editslider" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="photoSliderModalLabel">Update Image</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('update.gallery',':id')}}" id="sliderUpdateForm" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Title</label>
                        <input class="form-control" autocomplete="off" placeholder="Image title" name="title" id="title" value="">
                    </div>
                  
                    <div class="form-group">
                        <label class="text-black">Image</label>
                        <br/>
                        <input type="file" name="image" onchange="displayImage(this)" class="form-control"
                               id="image" >
                               </br>
                        <img src="{{asset('frontend/images/preview.png')}}" id="sliderDisplay" style="width:200px;height:120px;">
                        
                    </div>
                 
                    <button type="submit" class="btn btn-success btn-block">Update</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn-sm btn-danger btn-lg" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



   <!-- jQuery 3 -->
<script>

    ////Image Add Here

   $('#addPhotoSliderForm').on('submit', function (event) {
    event.preventDefault();

    const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    let formData = new FormData($(this)[0]);
    console.log(formData);

    $.ajax({
    headers: {'X-CSRF-TOKEN': CSRF_TOKEN},
    url: $(this).attr('action'),
    method: "POST",
    data: formData,
    cache: false,
    contentType: false,
    processData: false,
    beforeSend: function () {
    $('.preloader').show();
    },
    success: function (resp) {

    if (resp.success == "OK") {

    $('.preloader').hide();
    $("#addslider").modal('hide');

    setTimeout(() => {
        location.reload();   
    }, 2000);

   Swal.fire({
    type: 'success',
    title: '<P style="color: green;">Success!<p>',
        text: 'Image Added Successfully!',
        footer: '<b> Thanks </b>'
        })

    } else {

    console.log(resp);
    $('.preloader').hide();
    Swal.fire({
    type: 'error',
    title: '<P style="color: red;">Oops...<p>',
        text: resp.errors,
        footer: '<b> Something Wrong</b>'
        })
        }

        },
        error: function (e) {
        console.log(e);
        $('.preloader').hide();
        alert("Some thing wrong");
        }
        });
        });


        //Image Update

    $('#sliderUpdateForm').on('submit', function (event) {
           event.preventDefault();
    
                const CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                let formData = new FormData($(this)[0]);
                console.log(formData);
    
                $.ajax({
                    headers: {'X-CSRF-TOKEN': CSRF_TOKEN},
                    url: $(this).attr('action'),
                    method: "POST",
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function () {
                        $('.preloader').show();
                    },
                    success: function (resp) {
    
                        if (resp.success == "OK") {
    
                            $('.preloader').hide();
                            $("#editslider").modal('hide');
                            //location.reload();
    
                            setTimeout(() => {
                                    location.reload();   
                                }, 2000);
    
                            Swal.fire({
                                type: 'success',
                                title: '<P style="color: green;">Success!<p>',
                                    text: 'Image Update Successfully',
                                    footer: '<b> Thanks </b>'
                                    })
    
                        } else {
                            console.log(resp);
                            $('.preloader').hide();
                            Swal.fire({
                                type: 'error',
                                title: '<P style="color: red;">Oops...<p>',
                                text: resp.errors,
                                footer: '<b> Something Wrong</b>'
    
                            })
                        }
    
                    },
                    error: function (e) {
                        console.log(e);
                        $('.preloader').hide();
                        alert("Some thing wrong");
                    }
    
                });
    
    
       });
    
       $('#editslider').on('show.bs.modal', function (event) {
           let button = $(event.relatedTarget);
           let edit = button.data('edit');
        //   console.log(edit);
           let modal = $(this);
           modal.find('#photoSliderModalLabel').text('Edit Image :' + edit.title);
          // $('#modal').find('#image_title').val(edit.image_title);
           modal.find('[name="title"]').val(edit.title);
          let $action = "{{route('update.gallery',':id')}}";
    
           let $baselink = "{{asset('storage')}}/";
           modal.find('#sliderDisplay').attr('src',$baselink+edit.image);
    
           modal.find('#sliderUpdateForm').attr('action', $action.replace(':id',edit.id));
    
       });
    
    </script>
    

@endsection



      



