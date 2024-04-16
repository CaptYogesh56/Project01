<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Fertigation 2</title>
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
        color:#fb6b49; 
        font-weight: 500;
        padding: 10px;
    }
    label{
        color: #fb6b49;
    }
    .heading_main{
        background-image: linear-gradient(to right, #fb6b49, #fb6b4900);
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
        <section class="table_content mx-lg-3 mx-1">
        
        

<div class="row">
        <div class="">
        <form action="" class="col-lg-5 row">
           
            <div class="heading_main">Considering for 1 Acre/4000sqm</div>
            <div class="m-lg-3 m-1 row d-flex flex-row">
                <label for="" class="col-lg-3">Select Crop</label>
                <select class="form-select" aria-label="Default select example">
  <option value="1"></option>
  <option value="2"></option>
  <option value="3"></option>
</select>
            </div>
        
        </form>
        </div>
</div>


<div class="table-responsive mt-5">
    <table class="table-bordered text-center">
        <tr>
            <th>No.</th>
            <th>Fertigation Name</th>
            <th>Kg/1000 Ltr</th>
            <th>Tank</th>
            <th>Lit/Acre</th>
            <th>kg/Acre</th>
            <th>Ca</th>
            <th>K</th>
            <th>Mg</th>
            <th>N</th>
            <th>P</th>
            <th>Cost/Kg</th>
        </tr>
        
        <tr>
            <td>1</td>
            <td>DAP</td>
            <td><input type="number" placeholder="8"></td>
            <td><input type="number" placeholder="1"></td>
            <td>00.00</td>
            <td>00.00</td>
            <td>00.00</td>
            <td>00.00</td>
            <td>00.00</td>
            <td>00.00</td>
            <td>00.00</td>
            <td>00.00</td>
        </tr>
    </table>
</div>


<div class="table-responsive mt-5">
    <table class="table-bordered text-center">
        <tr>
            <th>Required</th>
            <th>Ca</th>
            <th>K</th>
            <th>Mg</th>
            <th>Na</th>
            <th>P</th>
            <th>Cost/Kg</th>
        </tr>
        
        <tr>
            <td>Perstage</td>
            <td>00.00</td>
            <td>00.00</td>
            <td>00.00</td>
            <td>00.00</td>
            <td>00.00</td>
            <td>00.00</td>
        </tr>
        <tr>
            <td>Total</td>
            <td>00.00</td>
            <td>00.00</td>
            <td>00.00</td>
            <td>00.00</td>
            <td>00.00</td>
            <td>00.00</td>
        </tr>
        <tr>
            <td>PerStage</td>
            <td>00.00</td>
            <td>00.00</td>
            <td>00.00</td>
            <td>00.00</td>
            <td>00.00</td>
            <td>00.00</td>
        </tr>
        <tr>
            <td>Radio</td>
            <td>00.00</td>
            <td>00.00</td>
            <td>00.00</td>
            <td>00.00</td>
            <td>00.00</td>
            <td>00.00</td>
        </tr>
    </table>
</div>




<div class="d-flex flex-row justify-content-center align-items-center m-5 align-center">
<button class="btn_orange ms-2">Previous</button>
<button class="btn_orange ms-2">Create</button>
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
