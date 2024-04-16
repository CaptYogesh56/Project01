<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Automation Mode 4 </title>
    <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" 
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

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
<button class="btn_orange ms-2">Previous</button>
<button class="btn_orange ms-2">Next</button>
<button class="btn_orange ms-2">Cancel</button>
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
