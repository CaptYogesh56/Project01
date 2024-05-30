@extends('layouts.main')
@push('title')
<title>Fertigation Nutrients</title>
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
            
        <div class="d-flex justify-content-center">
            <h6 class="head_h6">Fertigation Nutrients</h6>
            <input type="text" name="" id="" class="ms-3 rounded">
        </div>

        <section class="table_content mt-5">
        <div class="table-responsive d-flex justify-content-center">
            <table class="table-bordered text-center">
                <thead>
                    <tr>
                        <th>S. No.</th>
                        <th>Name</th>
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
                    @foreach($nutrients as $nutrient)
                    <tr>
                        <td>{{ $nutrient->s_no }}</td>
                        <td>{{ $nutrient->name }}</td>
                        <td>{{ $nutrient->ca }}</td>
                        <td>{{ $nutrient->k }}</td>
                        <td>{{ $nutrient->mg }}</td>
                        <td>{{ $nutrient->n }}</td>
                        <td>{{ $nutrient->p }}</td>
                        <td>{{ $nutrient->cost_per_kg }}</td>
                        <td><a href="{{-- route('edit.fertigation_nutrient', $nutrient->id) --}}"><i class="fas fa-edit"></i></a></td>
                        <td>
                            <form action="{{-- route('delete.fertigation_nutrient', $nutrient->id) --}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
</div>
<div class="d-flex flex-row justify-content-center align-items-center mt-5 align-center">
<button class="btn_orange ms-2"><a href="{{route('add-fertigation-nutrients')}}" class="text-white">Add</a></button>
<button class="btn_orange ms-2">Save</button>
<button class="btn_orange ms-2">Cancel</button>
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
