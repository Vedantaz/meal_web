<?php
			// $ingredients = mysqli_real_escape_string($conn, $_POST['ingredients']);
      $email = $pass = '';
	    $errors = array('email' => '', 'title' => '', 'ingredients' => '');
      if(isset($_REQUEST["submit"])){
        $server = "127.0.0.1";
        $username = "root";
        $password = "";
        $database = "mainform";
        $mysqli = new mysqli("localhost","root","","temp");
        $email = $_REQUEST['email'];
        $pass = $_REQUEST['password'];
        $sql = "INSERT INTO mainform(email, password) VALUES('$email', '$pass');";
    
        // Check connection
    if ($mysqli -> connect_errno) {
      echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
      exit();
    }
    // Perform query
    $mysqli -> query($sql);
    
    $mysqli -> close();
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <title>Mid Day Meal</title>
    <link rel="stylesheet" href="style.css" />
    <!-- Box-icons CDN Link -->
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.12.0/css/mdb.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
    />
  </head>

  <body style="background-color: black">
    <div class="sidebar">
      <div class="logo-details">
        <i class="bx bxl-c-plus-plus icon"></i>
        <div class="logo_name">Meal</div>
        <i class="bx bx-menu" id="btn"></i>
      </div>
      <ul class="nav-list">
        <li>
          <a href="./schoolDetails.html">
            <i class="bi bi-info-square-fill"></i>

            <!-- <i class="bx bx-grid-alt"></i> -->
            <span class="links_name">School Details</span>
          </a>
          <span class="tooltip">School Details</span>
        </li>
        <li>
          <a href="#">
            <!-- <i class="bx bx-grid-alt"></i> -->
            <i class="bi bi-house-dash"></i>
            <span class="links_name">Dashboard</span>
          </a>
          <span class="tooltip">Dashboard</span>
        </li>
        <li>
          <a href="../landing_page/index.html">
            <i class="bx bx-user"></i>
            <span class="links_name">Login</span>
          </a>
          <span class="tooltip">Login</span>
        </li>
        <li>
          <a href="./dailyreport.html">
            <!-- <i class="bx bx-chat"></i> -->
            <i class="bi bi-calculator-fill"></i>
            <span class="links_name">Daily Calculation </span>
          </a>
          <span class="tooltip">Form</span>
        </li>
        <li>
          <a href="./dailyform.html">
            <!-- <i class="bx bx-pie-chart-alt-2"></i> -->
            <i class="bi bi-record-circle-fill"></i>
            <span class="links_name">Daily Record</span>
          </a>
          <span class="tooltip">Daily</span>
        </li>
        <li>
          <a href="#">
            <!-- <i class="bx bx-folder"></i> -->
            <i class="bi bi-person-badge"></i>
            <span class="links_name">Profile</span>
          </a>
          <span class="tooltip">Profile</span>
        </li>
        <li>
          <a href="#">
            <!-- <i class="bx bx-cart-alt"></i> -->
            <i class="bi bi-calendar-check-fill"></i>
            <span class="links_name">Monthly Record</span>
          </a>
          <span class="tooltip">Monthly</span>
        </li>
        <li>
          <a href="../landing_page/index.html">
            <!-- <i class="bx bx-user"></i> -->
            <i class="bi bi-door-open"></i>
            <span class="links_name">Registration</span>
          </a>
          <span class="tooltip">Registration</span>
        </li>
        <li>
          <a href="#">
            <!-- <i class="bx bx-cog"></i> -->
            <i class="bi bi-bookmark-plus-fill"></i>
            <span class="links_name">Monthly Report</span>
          </a>
          <span class="tooltip">Report</span>
        </li>
        <!-- <li class="profile">
        <div class="profile-details">
          <img src="profile.jpeg" alt="profileImg">
          <div class="name_job">
            <div class="name">Vedant Mule</div>
            <div class="job">Full Stack Developer</div>
          </div>
        </div>
        <i class='bx bx-log-out' id="log_out"></i>
      </li> -->
      </ul>
    </div>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
          content.</p>
        <button type="button" class="btn btn-primary">Button</button>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
          content.</p>
        <button type="button" class="btn btn-primary">Button</button>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
          content.</p>
        <button type="button" class="btn btn-primary">Button</button>
      </div>
    </div> -->
    <div class="container">
      <form action="insert.php" method="post">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo htmlspecialchars($email) ?>">
          </div>
          <div class="form-group col-md-6">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="<?php echo htmlspecialchars($pass) ?>">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="strength">Strength</label>
            <input type="number" class="form-control" id="strength" name="strength" placeholder="Strength">
          </div>
          <div class="form-group col-md-6">
            <label for="present">Present</label>
            <input type="number" class="form-control" id="present" name="present" placeholder="Present">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="plates">Plates</label>
            <input type="number" class="form-control" id="plates" name="plates" placeholder="Strength">
          </div>
          <div class="form-group col-md-4">
            <label for="inputState">Menu</label>
            <select id="inputState" name="menu" class="form-control">
              <option selected>Wheat</option>
              <option>rice</option>
              <option>Panipuri</option>
            </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="tasting-incharge">Tasting incharge</label>
            <input type="number" class="form-control" id="tastingIncharge" name="tastingIncharge" placeholder="Strength">
          </div>
          <div class="form-group col-md-4">
            <label for="remark">Remark</label>
            <select id="remark" name="remark" class="form-control">
              <option selected>1</option>
              <option>2</option>
              <option>3</option>
            </select>
          </div>
        </div>
        <fieldset class="form-group">
          <div class="row">
            <legend class="col-form-label col-sm-2 pt-0">Holiday</legend>
            <div class="col-sm-10">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="holiday" id="gridRadios1" name="gridRadios1" value="option1" checked>
                <label class="form-check-label" for="gridRadios1">
                  Yes
                </label>
                <br>
                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                <label class="form-check-label" for="gridRadios2">
                  No
                </label>
              </div>
            </div>
          </div>
        </fieldset>
        <div class="form-group">
          <label for="address">Reason</label>
          <input type="text" class="form-control" id="address" name="reason" placeholder="1234 Main St">
        </div>

        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="city">City</label>
            <input type="text" class="form-control" id="city" name="city">
          </div>
          <div class="form-group col-md-4">
            <label for="state">State</label>
            <select id="state" name="state" class="form-control">
              <option selected>Choose...</option>
              <option>...</option>
            </select>
          </div>
          <div class="form-group col-md-2">
            <label for="zip">Zip</label>
            <input type="text" class="form-control" id="zip" name="zip">
          </div>
        </div>
        <div class="form-group">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Check me out
            </label>
<div><input type="submit" value="Submit">          </div>
   </div>
        </div>
      </form>

    </div>
        </form>
      </div>
    </section>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.20.0/js/mdb.min.js"
      integrity="sha512-XFd1m0eHgU1F05yOmuzEklFHtiacLVbtdBufAyZwFR0zfcq7vc6iJuxerGPyVFOXlPGgM8Uhem9gwzMI8SJ5uw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <script src="script.js"></script>
  </body>
</html>
