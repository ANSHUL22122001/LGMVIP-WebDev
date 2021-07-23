<head>
        <meta charset="utf-8">
        <title>Sidebar Dashboard Template With Sub Menu</title>
        <!-- <link rel="stylesheet" href="./css/style.css"> -->
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
        <style>
    *{
        margin: 0;
        padding: 0;
        list-style: none;
        text-decoration: none;
        box-sizing: border-box;
        font-family: "Roboto", sans-serif;
    }
    
    body{
        background: #fff;
        background-color: #bbb;
    }
    
    .wrapper .header{
        z-index: 1;
        background: black;
        position: fixed;
        width: calc(100% - 0%);
        height: 70px;
        display: flex;
        top: 0;
        border-bottom: 1px solid #bbb;
    }
    
    .wrapper .header .header-menu{
        width: calc(100% - 0%);
        height: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 20px;
    }
    
    .wrapper .header .header-menu .title{
        color: #fff;
        font-size: 25px;
        text-transform: uppercase;
        font-weight: 900;
        flex: 1;
        text-align: center;
    }
    
    .wrapper .header .header-menu .title span{
        color: #4CCEE8;
    }
    
    .wrapper .header .header-menu .sidebar-btn{
        color: #fff;
        /* position: absolute; */
        /* margin-left: 10px; */
        border: 1px solid white;
        padding: 5px 10px;
        font-size: 22px;
        font-weight: 900;
        cursor: pointer;
        transition: 1s;
        transition-property:all;
    }
    
    .wrapper .header .header-menu .sidebar-btn:hover{
        background-color: #4CCEE8;
    }
    
    .wrapper .header .header-menu ul{
        display: flex;
    }
    
    .wrapper .header .header-menu ul li a{
        background: #fff;
        color: #000;
        display: block;
        margin: 0 10px;
        font-size: 18px;
        width: 34px;
        height: 34px;
        line-height: 35px;
        text-align: center;
        border-radius: 50%;
        transition: 0.3s;
        transition-property: background, color;
    }
    
    .wrapper .header .header-menu ul li a:hover{
        background: #4CCEE8;
        color: #fff;
    }
    
    .wrapper .sidebar{
        z-index: 1;
        background: black;
        position: fixed;
        top: 70px;
        width: 250px;
        height: calc(100% - 9%);
        transition: 0.3s;
        transition-property: width;
        overflow-y: auto;
        border-right: 1px solid #bbb;
    }
    
    .wrapper .sidebar .sidebar-menu{
        overflow: hidden;
    }
    
    .wrapper .sidebar .sidebar-menu .profile img{
        margin: 20px 0;
        width: 100px;
        height: 100px;
        border-radius: 50%;
        margin-bottom: 10px;
    }
    
    .wrapper .sidebar .sidebar-menu .profile p{
        color: #bbb;
        font-weight: 700;
    }
    .wrapper .sidebar .sidebar-menu .profile span{
        color:#3498DB;
        font-weight: 700;
        font-size:12px;
        margin-bottom: 10px;
    }
    
    .wrapper .sidebar .sidebar-menu .item{
        width: 250px;
        overflow: hidden;
    }
    
    .wrapper .sidebar .sidebar-menu .item .menu-btn{
        display: block;
        position: relative;
        color: #fff;
        padding: 25px 20px;
        transition: 0.3s;
        transition-property: color;
    }
    .wrapper .sidebar .sidebar-menu .item:hover .menu-btn{
        background-color: #bbb;
        color: black;
    }
    .wrapper .sidebar .sidebar-menu .active{
        background-color: #bbb;
        color: black;
    }
/*             
    .wrapper .sidebar .sidebar-menu .item .menu-btn:hover{
        color: #4CCEE8;
    } */
    
    .wrapper .sidebar .sidebar-menu .item .menu-btn i{
        margin-right: 20px;
    }
    
    /* .wrapper .sidebar .sidebar-menu .item .menu-btn .drop-down{
        float: right;
        font-size: 12px;
        margin-top: 3px;
    } */
    
    /* .wrapper .sidebar .sidebar-menu .item .sub-menu{
        background: #3498DB;
        overflow: hidden;
        max-height: 0;
        transition: 0.3s;
        transition-property: background, max-height;
    } */
/*             
    .wrapper .sidebar .sidebar-menu .item .sub-menu a{
        display: block;
        position: relative;
        color: #fff;
        white-space: nowrap;
        font-size: 15px;
        padding: 20px;
        transition: 0.3s;
        transition-property: background;
    } */
    
    .wrapper .sidebar .sidebar-menu .item .sub-menu a:hover{
        background: #55B1F0;
    }
    
    .wrapper .sidebar .sidebar-menu .item .sub-menu a:not(last-child){
        border-bottom: 1px solid #8FC5E9;
    }
    
    .wrapper .sidebar .sidebar-menu .item .sub-menu i{
        padding-right: 20px;
        font-size: 10px;
    }
    
    .wrapper .sidebar .sidebar-menu .item:target .sub-menu{
        max-height: 500px;
    }
    
    .wrapper .main-container{
        width: (100% - 250px);
        margin-top: 70px;
        margin-left: 250px;
        padding: 15px;
        background: url(background.jpg)no-repeat;
        background-size: cover;
        height: 100vh;
        transition: 0.3s;
    }
    
    .wrapper.collapse .sidebar{
        width: 70px;
    }
    
    .wrapper.collapse .sidebar .profile img,
    .wrapper.collapse .sidebar .profile span,
    .wrapper.collapse .sidebar .profile p,
    .wrapper.collapse .sidebar a span{
        display: none;
    }
    
    .wrapper.collapse .sidebar .sidebar-menu .item .menu-btn{
        font-size: 23px;
    }
    
    .wrapper.collapse .sidebar .sidebar-menu .item .sub-menu i{
        font-size: 18px;
        padding-left: 3px;
    }
    
    .wrapper.collapse .main-container{
        width: calc(100% - 70px);
        margin-left: 70px;
    }
    
    .wrapper .main-container .card{
        padding: 15px;
        margin-bottom: 10px;
        font-size: 14px;
        display: flex;
        flex-direction: column;
    }
    .wrapper .main-container .card .card-content{
        margin-bottom: 50px;
        height: 100px;
        background-color: black;
        border-radius: 5px;
    }
    .wrapper .main-container .card .card-content .card-text{
        height: 100%;
        width: 100%;
        border-radius: 5px;
        background-color: white;
        margin-left: 4px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 2px 30px;
    }
    .wrapper .main-container .card .card-content .card-text .card-title{
        font-size: 20px;       
    }
    .wrapper .main-container .card .card-content .card-text .card-title h3{   
        font-size: 20px;   
        color: #3498DB; 
        font-weight: 800;   
    }
    .wrapper .main-container .card .card-content .card-text .card-title p{
        margin: 5px 10px;  
        font-weight: 800;      
    }
    .wrapper .main-container .card .card-content .card-text .card-icon{
        font-size: 60px;
    }

    #wrapper {
        display: block;
        width: 100%;
        background: #fff;
        margin: 0 auto;
        padding: 10px 17px;
    }

    #wrapper .top{
        display: flex;
        justify-content:space-between;
        align-items: center;
        margin: 30px 0px;
    }
    #wrapper .top h1{
        display: inline-block;
    }
    #wrapper .top button{
        border-radius:50%;
        cursor: pointer;
        font-size: 18px;
        width: 34px;
        border: 2px solid black;
        height: 34px;
        background-color: green;
        color:white;
        float: right;
    }
    #keywords {
        width: 100%;
        font-size: 15px;
        margin-bottom: 15px;
    }


    #keywords thead {
        cursor: pointer;
        background: #c9dff0;
    }
    #keywords thead tr th { 
        font-weight: 800;
        padding: 12px 8px;
        text-align: left;
    }

    #keywords tbody tr { 
        color: #555;
    }
    #keywords tbody tr td {
        padding: 15px 10px;
    }
    #keywords tbody tr td .action-icon {
        display: flex;
        flex-direction: column;
    }
    #keywords tbody tr td .action-icon button{
        border-radius:50%;
        display: block;
        margin: 2px auto;
        cursor: pointer;
        font-size: 12px;
        width: 24px;
        height: 24px;
        text-align: center;
    }
    #keywords tbody tr td .action-icon .btn1{
        background-color: yellow;
        color: black;
    }
    #keywords tbody tr td .action-icon .btn2{
        background-color: red;
        color: white;
    }
    .enable-btn{
        color:white;
        background-color: blue;
        border-radius: 2px;
        cursor: pointer;
        width: 100%;
        padding: 2px 5px;
    }
    .enable-btn1{
        color:white;
        background-color: blue;
        border-radius: 2px;
        cursor: pointer;
        /* width: 100%; */
        padding: 2px 5px;
        /* margin: 2px 10px; */
    }
    .enable-btn3{
        color:white;
        background-color: blue;
        border-radius: 2px;
        cursor: pointer;
        /* width: 100%; */
        padding: 2px 5px;
        margin: 2px auto ;
    }
    .disable-btn{
        color:white;
        cursor: pointer;
        border-radius: 2px;
        padding: 2px 5px;
        width: 100%;
        background-color:red;
    }
    #profile{
        display: block;
        width: 100%;
        background: #fff;
        margin: 0 auto;
        padding: 10px 17px;
    }
    #profile form h1{
        display: inline-block;
    }
    #profile form button{
        cursor: pointer;
        font-size: 15px;
        font-family: 'Courier New', Courier, monospace;
        padding: 5px 5px;
        display: flex;
        justify-content: space-between;
        border: 1px solid black;
        outline: none;
        border: none;
        background-color: blue;
        font-weight: bold;
        float: right;
        color:white;
    }
    #profile form button:hover{
        background-color: rgb(117, 117, 214);
    }
    
    #profile form label{
        font-weight: 700;
    }
    #profile form input{
        margin: 15px 20px;
        margin-top: 5px;
        font-size: 15px;
        padding: 5px 10px;
        outline: none;
        width: 60%;
    }
    /* The Modal (background) */
#myModal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content/Box */
#myModal .modal-content {
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button */
#myModal .close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

#myModal .close:hover,
#myModal .close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}
#myModel form {
    width: 100%;
}
#myModal form label{
    font-weight: 800;
}
#myModal form input{
    font-size:20px;
    width: 100%;
    margin: 10px 10px;
    padding: 5px 10px;
}
#myModal form select{
    font-size:20px;
    width: 100%;
    margin: 10px 10px;
    padding: 5px 10px;
}
#myModal form button{
    font-size:20px;
    width: 100%;
    margin: 10px 10px;
    background-color: rgb(66, 66, 255);
    padding: 5px 10px;
    font-weight: 800;
    cursor: pointer;
}
#myModal form button:hover{
    background-color: rgb(144, 144, 255);
}
</style>
    </head>