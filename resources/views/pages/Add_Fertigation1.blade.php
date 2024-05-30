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
            @if(Session::has('Success'))
        <div class="alert alert-success">{{Session::get('Success')}}</div>
        @endif
        @if(Session::has('fail'))
        <div class="alert alert-danger">{{Session::get('fail')}}</div>
        @endif
        <section class="table_content mx-lg-3 mx-1">
            <form action="{{ route('add.fertigation') }}" method="POST" class="row">
                @csrf
                <div class="heading_main col-12 mb-3">Considering for 1 Acre/4000sqm</div>
                <div class="col-lg-3 m-3">
                    <label for="program_name" class="form-label">Program Name</label>
                    <input type="text" name="program_name" class="form-control rounded-2" required>
                </div>
                <div class="col-lg-3 m-3">
                    <label for="select_valves" class="form-label">Select Valves</label>
                    <input type="text" name="select_valves" class="form-control rounded-2" required>
                </div>
                <div class="col-lg-3 m-3">
                    <label for="total_area" class="form-label">Total Area (sqm)</label>
                    <input type="text" name="total_area" class="form-control rounded-2" required>
                </div>
                <div class="col-lg-3 m-3">
                    <label for="required_water" class="form-label">Required Water (lit/sqm)</label>
                    <input type="text" name="required_water" class="form-control rounded-2" required>
                </div>
                <div class="col-lg-3 m-3">
                    <label for="pre_water_ph" class="form-label">Pre Water PH</label>
                    <input type="text" name="pre_water_ph" class="form-control rounded-2" required>
                </div>
                <div class="col-lg-3 m-3">
                    <label for="post_water_ph" class="form-label">Post Water PH</label>
                    <input type="text" name="post_water_ph" class="form-control rounded-2" required>
                </div>
                <div class="col-lg-3 m-3">
                    <label for="ferti_water_ph" class="form-label">Ferti Water PH</label>
                    <input type="text" name="fertigation_water_ph" class="form-control rounded-2" required>
                </div>
                <div class="heading_main col-12 mb-3">Tank Sequence</div>
                <div class="m-3 form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="tank_sequence" name="tank_sequence">
                    <label class="form-check-label" for="tank_sequence">ON</label>
                </div>
                <div class="heading_main col-12 mb-3">Tanks (In Ltr)</div>
                <div class="col-lg-3 m-3">
                    <label for="tank_a" class="form-label">Tank A</label>
                    <input type="text" name="tank_a" class="form-control rounded-2">
                </div>
                <div class="col-lg-3 m-3">
                    <label for="tank_b" class="form-label">Tank B</label>
                    <input type="text" name="tank_b" class="form-control rounded-2">
                </div>
                <div class="col-lg-3 m-3">
                    <label for="tank_c" class="form-label">Tank C</label>
                    <input type="text" name="tank_c" class="form-control rounded-2">
                </div>
                <div class="d-flex flex-row justify-content-center align-items-center mt-5">
                    <button type="submit" class="btn_orange ms-2">Create</button>
                    <button type="button" class="btn_orange ms-2">
                        <a href="{{ route('fertigation') }}" class="text-white text-decoration-none">Cancel</a>
                    </button>
                </div>
            </form>

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
