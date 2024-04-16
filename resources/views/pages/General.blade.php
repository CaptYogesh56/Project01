<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>General</title>
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" 
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

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

</head>
<body>
    <div class="container-fluid">
        <!-- <div class="top_line"></div> -->
    <div class="row mt-5">
        <div class="col-lg-2">
        <!-- <h2>Sidebar</h2> -->
        <?php include "new-sidebar.php";?>
        </div>


        <div class="col-lg-10 mt-lg-5 mt-3">
        <section class="table_content">

        <div>
           
        </div>

        <div class="row">
        <div class="col-lg-7">
        <form action="">
           
            <div class="heading_main">Bubble Motor</div>
        <div class="m-3 float-end">
            <label for="">Bubble Motor Start Before (in Ltr)</label>
            <input type="text" class="rounded-2">
        </div>
        <div class="m-3 float-end">
            <label for="">Bubble Motor Start Before (in min)</label>
            <input type="text" class="rounded-2">
        </div>
        <div class="m-3 float-end">
            <label for="">Bubble Motor Start Before</label>
            <input type="text" class="rounded-2">
        </div>
        <div class="m-3 float-end">
            <label for="">Bubble Motor Start Duration</label>
            <input type="text" class="rounded-2">
        </div>
        <div class="m-3 float-end">
            <label for="">Bubble Motor Start Interval</label>
            <input type="text" class="rounded-2">
        </div>
        
        </form>
        </div>
</div>

        <div class="row mt-3">
        <div class="col-lg-7">
        <form action="">
           
            <div class="heading_main">Filteration</div>
        <div class="m-3 float-end">
            <label for="">Filter Start After (kg/cm)</label>
            <input type="text" class="rounded-2">
        </div>
        <div class="m-3 float-end">
            <label for="">Filter Start After differential Pressure (in min)</label>
            <input type="text" class="rounded-2">
        </div>
        <div class="m-3 float-end">
            <label for="">Filter on time duration</label>
            <input type="text" class="rounded-2">
        </div>
        <div class="m-3 float-end">
            <label for="">Filter Duration Time Interval</label>
            <input type="text" class="rounded-2">
        </div>
        <div class="m-3 float-end">
            <label for="">After start filter stop field valve</label>
            <input type="text" class="rounded-2">
        </div>
        
        </form>
        </div>
</div>

<div class="row mt-3">
        <div class="col-lg-7">
        <form action="">
           
            <div class="heading_main">Pressure Settings</div>
        <div class="m-3 float-end">
            <label for="">High Pressure (in kg/cm)</label>
            <input type="text" class="rounded-2">
        </div>
        <div class="m-3 float-end">
            <label for="">Low Pressure (in kg/cm)</label>
            <input type="text" class="rounded-2">
        </div>
        <div class="m-3 float-end">
            <label for="">Low Pressure wait (in mins)</label>
            <input type="text" class="rounded-2">
        </div>
        
        </form>
        </div>
</div>
 
<div class="row mb-5">
<div class="d-flex flex-row justify-content-center align-items-center mt-5 align-center">
<!-- <button class="btn_orange ms-2">Add</button> -->
<button class="btn_orange ms-2">Save</button>
<!-- <button class="btn_orange ms-2">Cancel</button> -->
</div>
</div>
    </section>


        </div> <!-- Col-lg-9 close -->




    </div>
    
    

</div> <!-- End of Container-Fluid -->
    
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Page Specific JS -->
<script src="assets/js/app.js"></script> 

<!-- Javascript -->          
<script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script> 

</body>
</html>
