@extends('layouts.main')
@push('title')
<title>Add Crops</title>
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
        padding: 10px;
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
            @if(Session::has('Success'))
            <div class="alert alert-success">{{Session::get('Success')}}</div>
            @endif
            @if(Session::has('fail'))
            <div class="alert alert-danger">{{Session::get('fail')}}</div>
            @endif
        <div class="col-lg-7">
            <form action="{{ route('crops.store') }}" method="POST">
                @csrf
                <div class="m-3 d-flex">
                    <label for="s_no" class="col-lg-2 form-label float-end">S. No.</label>
                    <input type="number" name="s_no" class="form-control">
                </div>
                <div class="m-3 d-flex">
                    <label for="crop_name" class="col-lg-2 form-label">Crop Name</label>
                    <input type="text" name="crop_name" class="form-control">
                </div>
                <div class="m-3 d-flex">
                    <label for="crop_stage" class="col-lg-2 form-label">Crop Stage</label>
                    <input type="text" name="crop_stage" class="form-control">
                </div>
                <div class="m-3 d-flex">
                    <label for="ca" class="col-lg-2 form-label">Ca</label>
                    <input type="text" name="ca" class="form-control">
                </div>
                <div class="m-3 d-flex">
                    <label for="k" class="col-lg-2 form-label">K</label>
                    <input type="text" name="k" class="form-control">
                </div>
                <div class="m-3 d-flex">
                    <label for="mg" class="col-lg-2 form-label">Mg</label>
                    <input type="text" name="mg" class="form-control">
                </div>
                <div class="m-3 d-flex">
                    <label for="n" class="col-lg-2 form-label">N</label>
                    <input type="text" name="n" class="form-control">
                </div>
                <div class="m-3 d-flex">
                    <label for="p" class="col-lg-2 form-label">P</label>
                    <input type="text" name="p" class="form-control">
                </div>
                <div class="m-3 d-flex">
                    <button type="submit" class="btn_orange ms-2">Save</button>
                </div>
            </form>
            

</div>
</div>
<div class="d-flex flex-row justify-content-center align-items-center mt-5 align-center">
<button class="btn_orange ms-2">Create</button>
<button class="btn_orange ms-2">Update</button>
<button class="btn_orange ms-2"><a href="{{route('crops')}}" class="text-white">Cancel</a></button>
</div>
    </section>


        </div> <!-- Col-lg-9 close -->




    </div>
    
    

</div> <!-- End of Container-Fluid -->
    
@push('js')
<script>
    document.getElementById("crops").className += "active" ;
</script>    
@endpush

@endsection
