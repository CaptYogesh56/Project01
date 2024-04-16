<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
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
            <form action="" class="d-flex flex-row justify-content-center align-itens-center m-3">
                <div class="ms-3">
                <label for="">From</label>
                <input type="date" value="Select Date" class="rounded-2">
                </div>
                <div class="ms-3">
                    <label for="">To</label>
                    <input type="date" value="Select Date" class="rounded-2">
                </div>
            </form>
        <section class="table_content">
        <div class="table-responsive">
    <table class="table-bordered text-center"> 
        <tbody>
            <colgroup>
                <col span=2></col>
            </colgroup>
            <tr>
                <th rowspan="2">Date
                    <input type="date" class="rounded-2">
                </th>
                <th rowspan="2">Sequence No.</th>
                <th rowspan="2">Sequence Start Time</th>
                <th rowspan="2">Sequence End Time</th>
                <th rowspan="2">Program No.</th>
                <th rowspan="2">Mode
                    <select class="rounded-2">
                        <option value="">Select Mode</option>
                    </select>
                </th>
                <th rowspan="2">Status Code
                <select class="rounded-2">
                        <option value="">Select Mode</option>
                    </select>
                </th>
                <th rowspan="2">Alarm Code </th>
                <th rowspan="2">Total Motors</th>
                <th rowspan="2">Total Valves</th>
                <th rowspan="2">Program Start Time
                    <input type="time" class="rounded-2">
                </th>
                <th rowspan="2">Program End Time
                <input type="time" class="rounded-2">
                </th>
                <th rowspan="2">Total Water</th>
                <th rowspan="2">Fertigation Water</th>
                <th rowspan="2">Acid Tank Delivery Quantity</th>
                <th scope="col" colspan="2">Tank Delivered Quantity</th>
                <th scope="col" colspan="6">Delivered Nutrients Total (in kg)</th>
            </tr>
            <tr>
                <th>Tank</th>
                <th>Lit</th>
                <th>Ca</th>
                <th>K</th>
                <th>Mg</th>
                <th>N</th>
                <th>P</th>
                <th>Cost</th>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>
<div class="d-flex flex-row justify-content-center align-items-center mt-5 align-center">
<button class="btn_orange ms-2">Show</button>
<button class="btn_orange ms-2">Reset</button>
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
