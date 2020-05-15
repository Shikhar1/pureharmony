<!-- <div class="navbar navbar-expand-md navbar-dark  mb-4" role="navigation" style="background-color: #154854;"> 
    <a class="navbar-brand" href="#"><img src="images/mainlogo.png" alt="logo" class="img-fluid" width="100" height="100"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
                <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
            </li>
            <?php
                if(isset($_SESSION["email"]))
                {
                    if($_SESSION["email"] != "")
                    {
                        ?>
                        <li class="nav-item">
                        <a class="nav-link" href="profileUpdate.php" >PROFILE</a>
                        </li>
                        <?php
                    }
                }
            ?>
             <li class="nav-item">
                <a class="nav-link" href="bmipage.php" >BMI</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="foodselection.php">CALCULATE CARBON</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-uppercase" href="energyconsume.php">ENERY CONSUMPTION</a>
            </li> -->
          <!--   <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li> -->
            <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">DROPDOWNS</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown1">
                    <li class="dropdown-item" href="#"><a>Action 1</a></li>
                    <li class="dropdown-item dropdown">
                        <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown1.1</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown1-1">
                            <li class="dropdown-item" href="#"><a>Action 1.1</a></li>
                            <li class="dropdown-item dropdown">
                                <a class="dropdown-toggle" id="dropdown1-1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown1.1.1</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown1-1-1">
                                    <li class="dropdown-item" href="#"><a>Action 1.1.1</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li> -->
            <!-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="dropdown2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown2</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown2">
                    <li class="dropdown-item" href="#"><a>Action 2 A</a></li>
                    <li class="dropdown-item" href="#"><a>Action 2 B</a></li>
                    <li class="dropdown-item" href="#"><a>Action 2 C</a></li>
                    <li class="dropdown-item dropdown">
                        <a class="dropdown-toggle" id="dropdown2-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown2.1</a>
                        <ul class="dropdown-menu" aria-labelledby="dropdown2-1">
                            <li class="dropdown-item" href="#"><a>Action 2.1 A</a></li>
                            <li class="dropdown-item" href="#"><a>Action 2.1 B</a></li>
                            <li class="dropdown-item" href="#"><a>Action 2.1 C</a></li>
                            <li class="dropdown-item dropdown">
                                <a class="dropdown-toggle" id="dropdown2-1-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown2.1.1</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown2-1-1">
                                    <li class="dropdown-item" href="#"><a>Action 2.1.1 A</a></li>
                                    <li class="dropdown-item" href="#"><a>Action 2.1.1 B</a></li>
                                    <li class="dropdown-item" href="#"><a>Action 2.1.1 C</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-item dropdown">
                                <a class="dropdown-toggle" id="dropdown2-1-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown2.1.2</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown2-1-2">
                                    <li class="dropdown-item" href="#"><a>Action 2.1.2 A</a></li>
                                    <li class="dropdown-item" href="#"><a>Action 2.1.2 B</a></li>
                                    <li class="dropdown-item" href="#"><a>Action 2.1.2 C</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li> -->
  <!--       </ul>
        <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit"> <a href="logout_backend.php" class="text-white"> 
                <?php
                if(isset($_SESSION["email"]))
                {
                    if($_SESSION["email"] != "")
                        echo "Logout";
                    else
                        echo "Login";
                }
                else
                {
                    echo "Login";
                }
                ?> </a></button>
             <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><a href="signup.php" class="text-white"> SignUp </a></button>
        </form>
    </div>
</div> -->