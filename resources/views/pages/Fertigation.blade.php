@extends('layouts.main')
@push('title')
<title>Fertigation</title>
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
            <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Name</th>
                        <th>State Name</th>
                        <th>State Days</th>
                        <th>Tanks</th>
                        <th>Pre PH</th>
                        <th>Post PH</th>
                        <th>Ferti PH</th>
                        <th>Base Quantity</th>
                        <th>Ca</th>
                        <th>K</th>
                        <th>Mg</th>
                        <th>N</th>
                        <th>P</th>
                        <th>Cost/Kg</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($fertigation as $index => $fertigation)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $fertigation->program_name }}</td>
                            <td>{{ $fertigation->select_valves }}</td>
                            <td>{{ $fertigation->total_area }}</td>
                            <td>{{ $fertigation->required_water }}</td>
                            <td>{{ $fertigation->pre_water_ph }}</td>
                            <td>{{ $fertigation->post_water_ph }}</td>
                            <td>{{ $fertigation->fertigation_water_ph }}</td>
                            <td>{{ $fertigation->tank_a }}</td>
                            <td>{{ $fertigation->tank_b }}</td>
                            <td>{{ $fertigation->tank_c }}</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td>0</td>
                            <td><a href="{{-- route('fertigation.edit', $fertigation->id) --}}"><i class="fas fa-edit"></i></a></td>
                            <td>
                                <form action="{{-- route('fertigation.delete', $fertigation->id) --}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-link p-0"><i class="fa-solid fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
</div>
<div class="d-flex flex-row justify-content-center align-items-center mt-5 align-center">
<button class="btn_orange ms-2"><a href="{{route('add-fertigation1')}}" class="text-white">Add</a></button>
<button class="btn_orange ms-2">Save</button>
<button class="btn_orange ms-2">Delete</button>
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
