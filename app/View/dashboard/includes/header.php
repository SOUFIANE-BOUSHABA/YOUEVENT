<?php  include_once '../app/View/includes/head.php'  ?>
    <style>
        body {
            background-color: #f8f9fa; 
        }

        header {
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1); 
        }

        .container-fluid {
            height: 95vh; 
        }

        .aside {
            height: 95vh;
        }
       aside li a{
        text-decoration:none;
         color:white
       }
       aside li{ 
        padding:10px;
        margin-bottom:10px;
        border-radius:5px;
        transition:.3s;
       }
       aside li:hover{
       
        background-color:white;
       }
        aside li:hover a{
            color:black;
        }
       header {
            background-color: #ffffff; 
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1); 
        }
    </style>

<body>

    <header class="bg-light p-2">
        <div class="container d-flex justify-content-between align-items-center">
            <div>
               <h4>YouEvent</h4>
            </div>

<?php
if($_SESSION['role_id']==2){
    ?>
    <?php
}
?>
            <div class="dropdown">
                <button class="btn btn-dark dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                  <?=$_SESSION['first'].' '.$_SESSION['last']; ?>
                </button>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="#">Settings</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="?uri=auth/logout">Logout</a></li>
                </ul>
            </div>

        </div>
    </header>
