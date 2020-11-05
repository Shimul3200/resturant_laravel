@extends('admin.layout.app')

@section('breadcrumb')
    <section class="content-header">
       
                <div class="page-title">
                   
                        <button class="btn btn-primary mt-6" data-toggle="modal" data-target="#additem"><i class="fa fa-plus"> </i> Add Item</button>
                
                </div>
          
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Item's</a></li>
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
                    <h3 class="box-title"><i class="fa fa-list"></i> Item's</h3>
                </div>
       <!-- /.box-header -->
       <div class="box-body">
        <table id="example1" class="text-center table table-striped table-bordered">
            <thead class="bg-success">
            <tr>
                <th>SL No</th>
                <th>Name</th>
                <th>Image</th>
                <th>Description</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>

            <?php $i=1;?>

                @foreach($items as $item)
                <tr>
                     <td>{{$i++}}</td>
                     <td>{{$item->name}}</td>
                     <td class="avatar">
                        <div class="round-img">
                            <img src="{{asset('storage/'.$item->image)}}" style=" height: 50px;width: 60px;">
                        </div>
                    </td>
                    <td>{!!($item->desc)!!}</td>
                    <td>      @if ($item->status==1)
                        <span class="badge badge-complete"
                              id="status_{{$item->id}}">Active</span>
                    @else
                        <span class="badge badge-pending"
                              id="status_{{$item->id}}">De-Active</span>

                    @endif
                   </td>
                   <td style="width: 150px;">
                   @if ($item->status==1)
                   <a class="btn btn-sm btn-warning text-white"
                      onclick="deactive('{{$item->id}}','{{route('deactive.item',$item->id)}}')"
                      id="class_{{$item->id}}"
                      title="Deactivate"><i class="fa fa-ban"
                                            id="icon_{{$item->id}}"></i></a>
                    @else
                   <a class="btn btn-sm btn-primary text-white"
                      id="class_{{$item->id}}"
                      onclick="active('{{$item->id}}','{{route('active.item',$item->id)}}')"

                      title="Active"><i
                           class="fa fa-check-circle" id="icon_{{$item->id}}"></i></a>
                    @endif
                  
                        <a class="btn btn-sm btn-success text-white" title="Edit"
                        data-edit="{{json_encode($item)}}" href="#edititem" data-toggle="modal"><i class="fa fa-edit"></i></a>
                        
                   <textarea class="form-control" style="display:none;" autocomplete="off" rows="4" placeholder="Description" name="descR" id="desc_{{$item->id}}" value="">{!!($item->desc)!!}</textarea>

                        <a class="btn btn-sm btn-danger text-white" title="Delete"
                        onclick="confirmDelete('{{$item->id}}','{{route('delete.item',$item->id)}}')"><i
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

<div class="modal fade" id="additem" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="modalLabel">Add Item</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{url('admin/item')}}" enctype="multipart/form-data" method="post" id="addItemForm">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" placeholder="Item Name" name="name" id="name">
                    </div>
               
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" type="text" placeholder="Item Description" rows="4" name="desc" id="desc_in"></textarea>
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

<div class="modal fade" id="edititem" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="itemModalLabel">Update Image</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{route('update.item',':id')}}" id="itemUpdateForm" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" autocomplete="off" placeholder="Item Name" name="name" id="name" value="">
                    </div>
                    <div class="form-group" id="desc_up">
                     
                    </div>

                    {{-- <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" type="text" placeholder="Item Description" rows="4" name="desc" id="desc"></textarea>
                    </div> --}}
                  
                    <div class="form-group">
                        <label class="text-black">Image</label>
                        <br/>
                        <input type="file" name="image" onchange="displayImage(this)" class="form-control"
                               id="sliderImage" >
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

<script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>

<script type="text/javascript">  
CKEDITOR.replace('desc_in');
CKEDITOR.replace('desc');
 </script> 
   <!-- jQuery 3 -->
   
<script>

    ////Image Add Here

   $('#addItemForm').on('submit', function (event) {
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
    $("#additem").modal('hide');

    setTimeout(() => {
        location.reload();   
    }, 2000);

   Swal.fire({
    type: 'success',
    title: '<P style="color: green;">Success!<p>',
        text: 'Item Added Successfully!',
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

</script>

<script>

        //Image Update

    $('#itemUpdateForm').on('submit', function (event) {
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
                            $("#edititem").modal('hide');
                            //location.reload();
    
                            setTimeout(() => {
                                    location.reload();   
                                }, 2000);
    
                            Swal.fire({
                                type: 'success',
                                title: '<P style="color: green;">Success!<p>',
                                    text: 'Item Update Successfully',
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
    
       $('#edititem').on('show.bs.modal', function (event) {
           let button = $(event.relatedTarget);
           let edit = button.data('edit');
           console.log(edit);
           let modal = $(this);
           modal.find('#itemModalLabel').text('Edit Item :' + edit.name);
          // $('#modal').find('#image_title').val(edit.image_title);
           modal.find('[name="name"]').val(edit.name);
        //    modal.find('[name="desc"]').val(edit.desc);
          // CKEDITOR.instances.editor1.setData(edit.desc);
let desc_box=document.getElementById('desc_'+edit.id);
console.log(desc_box)
let tempalate=`<label>Description</label> ${desc_box}`;
$("#desc_up").html(tempalate);
// let editor=document.getElementById('editor1');
// console.log(editor);

           let $action = "{{route('update.item',':id')}}";
    
           let $baselink = "{{asset('storage')}}/";
           modal.find('#sliderDisplay').attr('src',$baselink+edit.image);
    
           modal.find('#itemUpdateForm').attr('action', $action.replace(':id',edit.id));
    
       });
    

     // status deactivate function
     async function deactive(id, action) {

const {value: confirm} = await Swal.fire({
    title: 'Are you sure Deactivate this ?',
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

                    //change <a> tag class
                    $('.table').find('#class_' + id).removeClass('btn-warning');
                    $('.table').find('#class_' + id).addClass('btn-primary');


                    //change icon
                    $('.table').find('#icon_' + id).removeClass('fa-ban');
                    $('.table').find('#icon_' + id).addClass('fa-check-circle');

                    //change status badge class
                    $('.table').find('#status_' + id).removeClass('badge-complete').text("Deactive");
                    $('.table').find('#status_' + id).addClass('badge-pending');

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
        title: 'great',
        text: 'This is safe',
    });
}
}



// status active function
async function active(id, action) {

const {value: confirm} = await Swal.fire({
    title: 'Are you sure active this ?',
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

                    //change <a> tag class
                    $('.table').find('#class_' + id).removeClass('btn-primary');
                    $('.table').find('#class_' + id).addClass('btn-warning');


                    //change icon
                    $('.table').find('#icon_' + id).removeClass('fa-check-circle');
                    $('.table').find('#icon_' + id).addClass('fa-ban');



                    //change status badge class
                    $('.table').find('#status_' + id).removeClass('badge-pending').text("Active");
                    $('.table').find('#status_' + id).addClass('badge-complete');

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
        title: 'great',
        text: 'This is safe',
    });
}
}
    </script>
    

@endsection



      



