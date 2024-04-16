<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @stack('title')
    {{-- <title>Create Climate Control</title>  --}}
    <!-- Latest compiled and minified CSS -->
    <link rel="icon" href="assets/images/profile.png">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" 
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">


    {{-- CSS fpr the Sidebar --}}

    
<!-- FontAwesome JS-->
<script src="assets/plugins/fontawesome/js/all.min.js"></script>

<!-- App CSS -->  
<link id="theme-style" rel="stylesheet" href="assets/css/portal.css">

<style>
	.app-nav .nav-item2 {
		margin-left: 2vh;
		/* border-bottom: 2px solid #fb6b49; */
    }
    .app-nav .nav-item {
        border: 1px solid #cacaca;
    border-radius: 20px;
    }
    .app-nav .nav-item a:hover {
        color: #fb6b49;
    }
    .app-nav .nav-item:active {
        background: #fb6b49;
    }
    .app-nav .nav-item:active a {
        color: #fff;
    }
    .app-nav .nav-item a .nav-link-text{
        font-weight: bold;
    }
    .app-header {
        background: #fb6b49;
    }
    .app-nav .submenu-link {
        color: #000;
        font-weight: bold;
		position: none;
    }
	.line {
    border-top: 2px solid #fb6b49;
    display: flex;
    list-style: none;
    padding: 0;
	width:70%;
	margin: auto;
    /* justify-content: space-between;
    align-items: stretch;
    align-content: stretch; */
}
.line:after{
    width:10px;
 height:10px;
 border-radius:50%;
 background: #b83b3b;
}

</style>

    {{-- End of css of sidebar --}}


@stack('style')

</head>