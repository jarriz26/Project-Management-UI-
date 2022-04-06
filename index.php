<!DOCTYPE html>
<html>
    <head>
        <title>Project Management</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&family=Roboto:ital,wght@1,300&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="style.css">
        <script src="sidebar.js"></script>
    </head>

    <body>
        <div class="sidebar-button" onclick="doToggleSidebar()" data-active="true">
            <img src="img/arrow.svg"></img>
        </div>
        <div class = "sidebar" data-active="true">
        
            <div class = "sidebar-header">
                <div class = "sidebar-logo-container">
                    <div class = "logo-container">
                        <img class = "logo-sidebar" src="img/logo.jpg"/>
                    </div>  
                    <div class="firm-name-container">
                        <p class="firm-name">
                            Surveying<br />
                            <span class="firm-subname">
                                Firm
                            </span>
                        </p>
                    </div>
                </div>
            </div>


            <div class="sidebar-body">
                <ul class="navigation-list">
                <?php
                    require "sidebar.php";

                    createNavItem("Dashboard", "fas fa-tachometer-alt");
                    createNavItem("Filing", "fas fa-file-alt");
                    createNavItem("Scheduling", "fa-solid fa-calendar-check");
                    createNavItem("Team", "fas fa-users");
                    createNavItem("Task", "fa-solid fa-list-check");
                ?>
                </ul>
                <hr style="margin-top: 30px;color:white;">

            <input type="button" class = "logout-button" value="Logout"/>
                   
            </div>
        </div>
    </body>

</html>