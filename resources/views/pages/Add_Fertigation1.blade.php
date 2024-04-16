@extends('layouts.main')
@push('title')
<title>Add Fertigation 1</title>
@endpush

@section('main-section') 

@push('style')
<style>
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
        padding: 10px;
    }
    label{
        color: #fb6b49;
    }
    .heading_main{
        background-image: linear-gradient(to right, #fb6b49, #fb6b4900, #fb6b4900);
        color: #fff;
        border-radius: 10px;
        padding:5px;
        font-weight: 500;
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
        <section class="table_content mx-lg-3 mx-1">
        
        <div class="row">
        <div class="">
        <form action="" class="row">
           
            <div class="heading_main">Considering for 1 Acre/4000sqm</div>
        <div class="col-lg-3 m-3">
            <label for="" class="form-label">Program Name</label>
            <input type="text" class="form-control rounded-2">
        </div>
        <div class="col-lg-3 m-3">
            <label for="" class="form-label">Select Valves</label>
            <input type="text" class="form-control rounded-2">
        </div>
        <div class="col-lg-3 m-3">
            <label for="" class="form-label">Total Area (sqm)</label>
            <input type="text" class="form-control rounded-2">
        </div>
        <div class="col-lg-3 m-3">
            <label for="" class="form-label">Required Water (lit/sqm)</label>
            <input type="text" class="form-control rounded-2">
        </div>
        <div class="col-lg-3 m-3">
            <label for="" class="form-label">Per Water PH</label>
            <input type="text" class="form-control rounded-2">
        </div>
        <div class="col-lg-3 m-3" class="form-label">
            <label for="">Post Water PH</label>
            <input type="text" class="form-control rounded-2">
        </div>
        <div class="col-lg-3 m-3" class="form-label">
            <label for="">Ferti Water PH</label>
            <input type="text" class="form-control rounded-2">
        </div>
        
        </form>
        </div>
</div>

<div class="row">
        <div class="">
        <form action="" class="row">
           
            <div class="heading_main">Tank Squence</div>
            <div class="m-3 form-check form-switch">
    <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
  <label class="form-check-label" for="flexSwitchCheckDefault">ON</label>
    </div>
        
        </form>
        </div>
</div>


<div class="row">
        <div class="">
        <form action="" class="row">
           
            <div class="heading_main">Tanks (In Ltr)</div>
            <div class="col-lg-3 m-3" class="form-label">
            <label for="">Tank A</label>
            <input type="text" class="form-control rounded-2">
        </div>
        <div class="col-lg-3 m-3" class="form-label">
            <label for="">Tank B</label>
            <input type="text" class="form-control rounded-2">
        </div>
        <div class="col-lg-3 m-3" class="form-label">
            <label for="">Tank C</label>
            <input type="text" class="form-control rounded-2">
        </div>
        
        </form>
        </div>
</div>

<div class="d-flex flex-row justify-content-center align-items-center m-5 align-center">
<!-- <button class="btn_orange ms-2">Add</button> -->
<button class="btn_orange ms-2"><a href="{{route('add-fertigation2')}}" class="text-white">Next</a></button>
<button class="btn_orange ms-2">Cancel</button>
</div>
    </section>


        </div> <!-- Col-lg-9 close -->




    </div>
    
    

</div> <!-- End of Container-Fluid -->
    
@push('js')
<script>
    document.getElementById("fertigation").className += "active" ;
</script>    
@endpush

@endsection
