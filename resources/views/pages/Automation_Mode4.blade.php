@extends('layouts.main')
@push('title')
<title>Automation Mode 4</title>
@endpush

@section('main-section') 

@push('style')
<style>
    label{
        color: #fb6b49;
        font-weight: 500;
    }
    .top_line{
        width: 100%;
        height:50px;
        background-color:#fb6b49;
        margin: 10px 0px 10px 0px; 
        border-radius: 10px;
    }
    .btn_orange{
        width:100px;
        border-radius: 50px;
        padding : 10px;
        background-color:#fb6b49; 
        border: none;
        color: white; 
    }
    table th{
        color:#3371dc; 
        font-weight: 500;
    }
    .head_Bold{
        background: #fb6b49;
        color: #fff;
        font-size: 20px;
        font-weight: 700;
    }
    .card_Border{
        border: 1px solid #fb6b49;
        border-radius: 5px;
    }
    /* .form-switch .form-check-input:checked {
        color: #fb6bfb;
    } */
    .form-check-input:checked {
        background-color: #fb6b49;
    border-color: #fb6b49;
    }
</style>
@endpush

<body>
    <div class="container-fluid">
        <!-- <div class="top_line"></div> -->
    <div class="row mt-5">
        <div class="col-lg-2">
        <!-- <h2>Sidebar</h2> -->
        @include('layouts.sidebar');
        </div>


        <div class="col-lg-10 mt-lg-5 mt-3">
        <section class="table_content">
        

        <div class="row">
        <div class="">
        <div class=" mx-lg-5 mx-auto p-3 head_Bold rounded-1">
        Schedule
    </div>
<form action="" class="p-3 row card_Border mx-lg-5 mx-auto">
    
    <div class="col-lg-3 m-3">
        <label for="" class="form-label">Start Date</label>
        <input type="text" class="form-control">
    </div>
    <div class="col-lg-3 m-3">
        <label for="" class="form-label">Start Time</label>
        <input type="text" class="form-control">
    </div>
    <div class="col-lg-3 m-3">
        <label for="" class="form-label">Cycle</label>
        <input type="text" class="form-control">
    </div>
    <div class="col-lg-3 m-3">
        <label for="" class="form-label">Timer</label>
        <input type="text" class="form-control">
    </div>
    <div class="col-lg-3 m-3">
        <label for="" class="form-label">Interval</label>
        <input type="text" class="form-control">
    </div>
</form>

</div>
</div>


<div class="row mt-5">
        <div class="col-lg-12">
        <div class=" mx-lg-5 mx-auto p-3 head_Bold rounded-1">
        Climate Controllers
    </div>
<form action="" class="p-3 row card_Border mx-lg-5 mx-auto">
    
    <div class="d-flex felx-row m-3">
        <label for="" class="col-lg-2 form-label">S. No.</label>
        <input type="text" class="form-control">
    </div>
    <div class="d-flex felx-row m-3">
        <label for="" class="col-lg-2 form-label">Name</label>
        <input type="text" class="form-control">
    </div>
    <div class="d-flex felx-row m-3">
        <label for="" class="col-lg-2 form-label">Type</label>
        <input type="text" class="form-control">
    </div>
    <div class="d-flex felx-row m-3">
        <label for="" class="col-lg-2 form-label">Start Time</label>
        <input type="text" class="form-control">
    </div>
    <div class="d-flex felx-row m-3">
        <label for="" class="col-lg-2 form-label">End Time</label>
        <input type="text" class="form-control">
    </div>
    <div class="d-flex felx-row m-3">
        <label for="" class="col-lg-2 form-label">On Time (in mins)</label>
        <input type="text" class="form-control">
    </div>
    <div class="d-flex felx-row m-3">
        <label for="" class="col-lg-2 form-label">Off Time (in mins)</label>
        <input type="text" class="form-control">
    </div>
</form>

</div>
</div>



<div class="d-flex flex-row justify-content-center align-items-center mt-5 mb-5 align-center">
    <button class="btn_orange ms-2"><a href="{{route('automation3')}}" class="text-white">Previous</a></button>
    <button class="btn_orange ms-2"><a href="{{route('automation1')}}" class="text-white">Cancel</a></button>
    <br>
    <button class="btn_orange ms-2"><a href="{{route('add-automation')}}" class="text-white">Save</a></button>
</div>
    </section>


        </div> <!-- Col-lg-9 close -->




    </div>
    
    

</div> <!-- End of Container-Fluid -->
    
@push('js')
<script>
    document.getElementById("automation").className += "active" ;
</script>    
@endpush

@endsection
