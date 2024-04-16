@extends('layouts.main')
@push('title')
<title>Add Irrigation</title>
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
    .cust_Switch{
        font-size: 25px;
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
<form action="" class="row">
    <div class="col-lg-3 m-3">
        <label for="" class="form-label">Program No.</label>
        <input type="number" class="form-control">
    </div>
    <div class="col-lg-3 m-3">
        <label for="" class="form-label">Program Name</label>
        <input type="text" class="form-control">
    </div>
    <div class="m-3 col-lg-3">
        <label for="" class="form-label">Select Valves</label>
        <input type="text" class="form-control">
    </div>
    <div class="m-3 col-lg-3">
        <label for="" class="form-label">Select Motors</label>
        <input type="text" class="form-control">
    </div>
    <div class="m-3 col-lg-3">
        <label for="" class="form-label">Irrigation Type</label>
        <input type="text" class="form-control">
    </div>
    <div class="m-3 col-lg-3">
        <label for="" class="form-label">Total Area (sqm)</label>
        <input type="text" class="form-control">
    </div>
    <div class="m-3 col-lg-3">
        <label for="" class="form-label">Required water (lit/sqm)</label>
        <input type="text" class="form-control">
    </div>
    <div class="m-3 col-lg-3">
        <label for="" class="form-label">Total Water (Ltr)</label>
        <input type="text" class="form-control">
    </div>
    <div class="m-3 col-lg-3">
        <label for="" class="form-label">Fertigation Reciept No.</label>
        <input type="text" class="form-control">
    </div>
            <div class="col-lg-3 d-flex flex-column m-3 form-check form-switch ">
            <label class="form-check-label" for="flexSwitchCheckDefault">Fertigation Type</label>
    <input class="form-check-input" type="checkbox" role="switch"  class="cust_Switch" id="flexSwitchCheckDefault">
  
    </div>
    <div class="col-lg-3 d-flex flex-column m-3 form-check form-switch">
            <label class="form-check-label" for="flexSwitchCheckDefault">Injector Control</label>
    <input class="form-check-input" type="checkbox" role="switch" class="cust_Switch" id="flexSwitchCheckDefault">
  
    </div>
    <div class="col-lg-3 m-3 col-lg-3">
        <label for="" class="form-label">Fertigation EC</label>
        <input type="text" class="form-control">
    </div>
    <div>
    <div class="m-3 col-lg-3">
        <label for="" class="form-label">Pre Water</label>
        <input type="text" class="form-control">
        <input type="text" class="form-control">
    </div>
    <div class="m-3 col-lg-3">
        <label for="" class="form-label">Post Water</label>
        <input type="text" class="form-control">
        <input type="text" class="form-control">
    </div>
    <div class="m-3 col-lg-3">
        <label for="" class="form-label">Fertigation Water</label>
        <input type="text" class="form-control">
        <input type="text" class="form-control">
    </div>
    </div>
</form>

</div>
</div>

<div class="d-flex flex-row justify-content-center align-items-center mt-5 align-center">
<button class="btn_orange ms-2">Create</button>
<button class="btn_orange ms-2">Update</button>
<button class="btn_orange ms-2"><a href="{{route('irrigation')}}" class="text-white">Cancel</a></button>
</div>
    </section>


        </div> <!-- Col-lg-9 close -->




    </div>
    
    

</div> <!-- End of Container-Fluid -->
    
@push('js')
<script>
    document.getElementById("irrigation").className += "active" ;
</script>    
@endpush

@endsection
