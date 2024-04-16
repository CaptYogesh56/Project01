@extends('layouts.main')
@push('title')
<title>Irrigation</title>
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
        <div class="table-responsive d-flex justify-content-center">
    <table class="table-bordered text-center"> 
        <tbody>
            <colgroup>
                <col span=2></col>
            </colgroup>
            <tr>
                <th>No.</th>
                <th>Program Seq.</th>
                <th>Program Name</th>
                <th>Values</th>
                <th>Motor</th>
                <th>Fertigation On/Off</th>
                <th>Fertigation On</th>
                <th>Fertigation Type</th>
                <th>PH On/Off</th>
                <th>Total Area</th>
                <th>irrigation Type</th>
                <th>Required Water</th>
                <th>Total Water/Time</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <tr>
                <td>1</td>
                <td>2</td>
                <td>V1</td>
                <td>1</td>
                <td>1</td>
                <td><input type="checkbox"></td>
                <td>1</td>
                <td>Quantity</td>
                <td><input type="checkbox"></td>
                <td>4000</td>
                <td>Time (01) Voltmeter</td>
                <td>0</td>
                <td>0:4</td>
                <td><i class="fas fa-edit"></i></td>
                <td><i class="fa-solid fa-trash"></i></td>
            </tr>
        </tbody>
    </table>
</div>
<div class="d-flex flex-row justify-content-center align-items-center mt-5 align-center">
<button class="btn_orange ms-2"><a href="{{route('add-irrigation')}}" class="text-white">Add</a></button>
<button class="btn_orange ms-2">Save</button>
<button class="btn_orange ms-2">Delete</button>
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
