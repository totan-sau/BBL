<!-- for extends all i.e. header,footer,sidebar -->

@extends('trainerlayouts.trainer_template')
@section('content')
<script>
// for shortin ,pagination,searching data using datatable concept
$(document).ready(function() { 
    $('#bootstrap-slot-data-table').DataTable({
        lengthMenu: [[10, 20, 50, -1], [10, 20, 50, "All"]],

// disable shorting from slno,image and action columns
"columnDefs": [ { "orderable": false, "targets": [0,5] } ],

});
} );

</script>

<style>
/* disable shorting arrow from slno,image and action columns*/
table.dataTable thead>tr>th[id='slno'].sorting_asc::before{display: none}
table.dataTable thead>tr>th[id='slno'].sorting_asc::after{display: none}
table.dataTable thead>tr>th[id='image'].sorting_asc::before{display: none}
table.dataTable thead>tr>th[id='image'].sorting_asc::after{display: none}
table.dataTable thead>tr>th[id='action'].sorting_asc::before{display: none}
table.dataTable thead>tr>th[id='action'].sorting_asc::after{display: none}

/*for delete buton*/
.button-primary {
    background: #d16879;
    color: #FFF;
    padding: 10px 20px;
    font-weight: bold;
    border:1px solid #FFC0CB;
}
</style>

<div class="breadcrumbs">
    <div class="col-sm-9">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>All Exercises</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="page-header float-left" style="padding-top: 2%;padding-left: 17%;">
            <a href="{{route('add_exercise_trainer')}}">
                <button type="button" class="btn btn-success"><i class="fa fa-plus"></i>&nbsp;Add New Exercise</button>
            </a>
        </div>
    </div>
</div>
<div class="content mt-3" style="margin-top: 0px !important;">
    <div class="animated fadeIn">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="padding-left: 0px;padding-right: 0px;padding-bottom: 0px;padding-top: 10px;">
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif
                        @if (session('delete'))
                            <div class="alert alert-danger">
                                {{ session('delete') }}
                            </div>
                        @endif
                    </div>
                    <div class="card-body">
                        <script type="text/javascript">
                            function delete_gym_type(id){ 
                                alertify.confirm("Are you sure you want to delete this exercise?", function (e) {
                                    if (e) {
                                        // alertify.success("You've clicked OK");
                                        window.location.href="{{url('trainer/gymdelete')}}/"+id;
                                    } else {
                                        // alertify.error("You've clicked Cancel");
                                    }                                       
                                });
                            }
                        </script>
                        <table id="bootstrap-slot-data-table" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th id="slno">Sl. No.</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th style="width: 67px;">Duration<br>
                                        <span style="font-weight: 400;">(in days)</span>
                                    </th>
                                    <th id="image" style="width: 220px;">Image</th>
                                    <th id="action" style="width: 70px;">Action</th>
                                </tr>
                            </thead>
                            <tbody> 
                             @if(count($data)>0)
                                @foreach($data as $key=>$mydata)
                                <tr>
                                    <td>{{++$key}}</td>
                                    <td>{{$mydata->title}}</td>
                                    <td>{{$mydata->description}}</td>
                                    <td>{{$mydata->duration}}</td>
                                    <td>
                                        @if(isset($mydata->video) && !empty($mydata->video))
                                            <iframe src="{{$mydata->video}}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                        @elseif(isset($mydata->image) && !empty($mydata->image))
                                            <img src="{{asset('backend/images')}}/{{$mydata->image}}" style="width: 100%;">
                                        @else
                                            N/A
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{url('trainer/editexercise')}}/{{$mydata->id}}" title="Edit Exercise"><button type="button" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></button></a>
                                        <button type="button" class="btn btn-danger btn-sm" onclick="delete_gym_type({!!$mydata->id!!})" style="width: 32px;" title="Delete Exercise"><i class="fa fa-trash-o"></i></button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div><!-- .animated -->
</div>
<!-- .content -->

<script src="{{asset('backend/assets/js/lib/data-table/datatables.min.js')}}"></script>
<script src="{{asset('backend/assets/js/lib/data-table/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('backend/assets/js/lib/data-table/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('backend/assets/js/lib/data-table/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('backend/assets/js/lib/data-table/jszip.min.js')}}"></script>
<script src="{{asset('backend/assets/js/lib/data-table/pdfmake.min.js')}}"></script>
<script src="{{asset('backend/assets/js/lib/data-table/vfs_fonts.js')}}"></script>
<script src="{{asset('backend/assets/js/lib/data-table/buttons.html5.min.js')}}"></script>
<script src="{{asset('backend/assets/js/lib/data-table/buttons.print.min.js')}}"></script>
<script src="{{asset('backend/assets/js/lib/data-table/buttons.colVis.min.js')}}"></script>
<script src="{{asset('backend/assets/js/lib/data-table/datatables-init.js')}}"></script>


<script type="text/javascript">
    $(document).ready(function() {
        $('#bootstrap-data-table-export').DataTable();
    } );
</script>



@endsection
