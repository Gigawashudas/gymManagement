<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <a class="navbar-brand" href="index.php"><img src="images\gym-logo.png" alt="" height="40"></a>
    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavId">
        <ul class="navbar-nav mx-auto py-2">
            <li class="nav-item ">
                <a class="nav-link text-white" href="index.php">Home</a>
            </li>
            <?php if (isset($_SESSION['user_id'])) {
            ?>
                <li class="nav-item">
                    <a class="nav-link text-white" href="packages.php">Packages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="instructors.php">Instructors</a>
                </li>
            <?php
            } ?>

            <li class="nav-item">
                <a class="nav-link text-white" href="gym-products.php">Buy Products</a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white" href="about-us.php">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="contact-us.php">Contact Us</a>
            </li>
            <?php if (isset($_SESSION['user_id'])) {
            ?>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['name'] ?></a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <!-- <a class="dropdown-item" href="profile.php">Profile</a> -->
                        <a class="dropdown-item" href="membership.php">Membership Info</a>

                        <a class="dropdown-item" href="php-functions/logout.php">Log Out</a>

                    </div>
                </li>
                <a class="btn mx-2" href="invoice.php" type="button">
                    <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                </a>
                <?php  if (!empty($_SESSION['cart'])){
            ?>
             <span class="cart badge badge-danger mb-3"><?php echo count($_SESSION['cart']) ?></span>
            <?php
        } ?>
            <?php
            } else {
            ?>
             
                <li class="nav-item">
                    <a class="btn btn-warning" href="sign-up.php">Sign Up</a>
                </li>

                <li class="nav-item ml-2">
                    <a class="btn btn-primary" href="login.php">Log In</a>
                </li>
                <div class="search-container">
                 
                 <input type="search" value="" id="search" onchange="openPage()">
                 <button type="submit"><i class="fa fa-search"></i></button>
            
         </div>

            <?php
            } ?>
        </ul>
    </div>
</nav>
<script>
          function openPage(){

              var x = document.getElementById("search").value;
              if(x=="login"){
                  window.open("login.php");
              }
              if(x== "Products"){
                  window.open("gym-products.php");

              }
              if(x== "Instructors"){
                  window.open("instructors.php");

              }
              if(x == "Packages"){
                  window.open("packages.php");
              }
              if(x=="pullup"){
                  window.open("Search product/pullup.html");
              }
              if(x== "trimmer"){
                  window.open("Search product/trimmer.html");

              }
              if(x== "pedal"){
                  window.open("Search product/pedal.html");

              }
              if(x == "assistor"){
                  window.open("Search product/assistor.html");
              }
              if(x == "bands"){
                  window.open("Search product/fitnessbands.html");
              }
              if(x == "roller"){
                  window.open("Search product/absroller.html");
              }
          }
      </script>