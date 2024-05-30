@extends('layouts.main')
@push('title')
<title>Add Fertigation Nutrients</title>
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
    .head_h6{
        color: #3371dc;
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
        <section class="table_content mt-5">
        <div class="row">
            @if(Session::has('Success'))
            <div class="alert alert-success">{{Session::get('Success')}}</div>
            @endif
            @if(Session::has('fail'))
            <div class="alert alert-danger">{{Session::get('fail')}}</div>
            @endif
        <div class="col-lg-7">
            <form action="{{ route('add.nutrients') }}" method="POST">
                @csrf
                <div class="m-3 d-flex">
                    <label for="s_no" class="col-lg-2 form-label float-end">S. No.</label>
                    <input type="number" id="s_no" name="s_no" class="form-control">
                </div>
                <div class="m-3 d-flex">
                    <label for="name" class="col-lg-2 form-label">Name</label>
                    <input type="text" id="name" name="name" class="form-control">
                </div>
                <div class="m-3 d-flex">
                    <label for="ca" class="col-lg-2 form-label">Ca</label>
                    <input type="text" id="ca" name="ca" class="form-control">
                </div>
                <div class="m-3 d-flex">
                    <label for="k" class="col-lg-2 form-label">K</label>
                    <input type="text" id="k" name="k" class="form-control">
                </div>
                <div class="m-3 d-flex">
                    <label for="mg" class="col-lg-2 form-label">Mg</label>
                    <input type="text" id="mg" name="mg" class="form-control">
                </div>
                <div class="m-3 d-flex">
                    <label for="n" class="col-lg-2 form-label">N</label>
                    <input type="text" id="n" name="n" class="form-control">
                </div>
                <div class="m-3 d-flex">
                    <label for="p" class="col-lg-2 form-label">P</label>
                    <input type="text" id="p" name="p" class="form-control">
                </div>
                <div class="m-3 d-flex">
                    <label for="cost_per_kg" class="col-lg-2 form-label">Cost/Kg</label>
                    <input type="text" id="cost_per_kg" name="cost_per_kg" class="form-control">
                </div>
                <div class="m-3 d-flex">
                    <button type="submit" class="btn_orange ms-2">Submit</button>
                </div>
            </form>
            

</div>
</div>


<div class="d-flex flex-row justify-content-center align-items-center mt-5 align-center">
<button class="btn_orange ms-2">Create</button>
<button class="btn_orange ms-2">Update</button>
<button class="btn_orange ms-2"><a href="{{route('fertigation-nutrients')}}" class="text-white">Cancel</a></button>
</div>
    </section>


        </div> <!-- Col-lg-9 close -->




    </div>
    
    

</div> <!-- End of Container-Fluid -->
    
@push('js')
<script>
    document.getElementById("nutrients").className += "active" ;
</script>    
@endpush

@endsection
