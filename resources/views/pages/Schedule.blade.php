<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule</title>
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
        <div class="table-responsive d-flex justify-content-center">
    <table class="table-bordered text-center"> 
        <tbody>
            <colgroup>
                <col span=2></col>
            </colgroup>
            <tr>
                <th>S. No.</th>
                <th>Sequence No.</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Cycle</th>
                <th>Interval (in mins)</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <tr>
                <td>1</td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td> </td>
                <td><i class="fas fa-edit"></i></td>
                <td><i class="fa-solid fa-trash"></i></td>
            </tr>
        </tbody>
    </table>
</div>
<div class="d-flex flex-row justify-content-center align-items-center mt-5 align-center">
<button class="btn_orange ms-2"><a href="Add_Schedule.php" class="text-white">Add</a></button>
<button class="btn_orange ms-2">Save</button>
<button class="btn_orange ms-2">Cancel</button>
</div>
    </section>


        </div> <!-- Col-lg-9 close -->




    </div>
    
    

</div> <!-- End of Container-Fluid -->
    
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Javascript -->          
<script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>  

    <!-- Charts JS -->
    <script src="assets/plugins/chart.js/chart.min.js"></script> 
    <script src="assets/js/index-charts.js"></script> 
    
    <!-- Page Specific JS -->
    <script src="assets/js/app.js"></script>

</body>
</html>
