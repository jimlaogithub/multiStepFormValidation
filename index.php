<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
         <div class="col-md-3"></div>
         <div class="col-md-6">
            <form id="regForm" class="card" action="output.php" method="post" enctype="multipart/form-data">
                <div class="card-header alert alert-primary">
                    <h2 class="text-center">Form</h2>
                </div>
                <!-- One "tab" for each step in the form: -->
                <!-- step 1 tab -->
                <div class="tab">
                    <label>Step 1</label>
                    <div class="form-group">
                        <label class="text-success">Username</label>
                        <input placeholder="Username..." type="text" class="form-control" name="username">
                    </div>
                    <div class="form-group">
                        <label class="text-success">Password</label>
                        <input placeholder="Password..." class="form-control" type="password" name="password">  
                    </div>
                    <div class="form-group">
                        <label class="text-success">Repassword</label>
                        <input placeholder="Repassword..." class="form-control" type="password" name="repassword">
                    </div>
                </div>


                <!-- step 2 tab -->
                <div class="tab">
                    <label>Step 2</label>
                    <div class="form-group">
                        <label class="text-success">Last Name</label>
                        <input placeholder="Last name..." type ="text" oninput="this.className = ''" name="lName">
                    </div>
                    <div class="form-group">
                        <label class="text-success">First Name</label>
                        <input placeholder="First name..." type ="text" oninput="this.className = ''" name="fName">
                    </div>
                    <div class="form-group">
                        <label class="text-success">Full middle Name</label>
                        <input placeholder="Full middle name..." type ="text" oninput="this.className = ''" name="mName">
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" value="male" checked>
                            <label class="form-check-label">
                                Male
                            </label>
                            </div>
                            <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" value="female">
                            <label class="form-check-label">
                                Female
                            </label>
                        </div>
                    </div>
                </div>
                <!-- step 3 tab -->
                <div class="tab">
                    <label>Step 3</label>
                    <div class="form-group">
                        <label class="text-success">Address</label>
                        <input placeholder="address..." type="text" class="form-control" name="address">
                    </div>
                    <div class="form-group">
                        <label class="text-success">Birthday</label>
                        <input class="form-control" type="date" name="DOB">  
                    </div>
                    <div class="form-group">
                        <label class="text-success">Place of Birth</label>
                        <input placeholder="Place of Birth..." class="form-control" type="text" name="POB">
                    </div>
                </div>

                <!-- step 4 tab -->
                <div class="tab">
                    <label>Step 4</label>
                    <div class="form-group">
                        <label class="text-success">Civil Status</label>
                        <input placeholder="Civil Status..." class="form-control" type="text" name="status">
                    </div>
                    <div class="form-group">
                        <label class="text-success">Guardian</label>
                        <input placeholder="Guardian..." class="form-control" type="text" name="guardian">
                    </div>
                    <div class="form-group">
                        <label class="text-success">Contact Number</label>
                        <input placeholder="+63 + 10 digit number" type="text" class="form-control" name="contact">
                    </div>
                </div>


                 <!-- step 5 tab -->
                 <div class="tab">
                    <label>Step 5</label>
                    <div class="form-group">
                        <label class="text-success">Year level</label>
                        <select class="form-control" name="yearLevel">
                                    <option value="firstYear" selected>1st Year</option>
                                    <option value="secindYear">2nd Year</option>
                                    <option value="thirdYear">3rd Year</option>
                                    <option value="fourthYear">4th Year</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-success">Course</label>
                        <select class="form-control" name="course">
                            <option value="bsit" selected>BSIT</option>
                            <option value="bsce">BSCE</option>
                            <option value="bstcm">BSTCM</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="text-success">School Year</label>
                        <input placeholder="YYY-YYYY..."class="form-control" type="text" name="SY">
                    </div>
                    <div class="form-group">
                        <label class="text-success">Email</label>
                        <input placeholder="example@domain.com" class="form-control" type="email" name="email">
                    </div>
                </div>

                <!-- step 6 tab -->
                <div class="tab">
                    <label>Step 6</label>
                    <div class="form-group">
                        <label class="text-success">Upload Profile Picture</label>
                        <input type="file" name="file">
                    </div>
                </div>


                <div style="overflow:auto;">
                    <div style="float:right;">
                    <button type="button" id="prevBtn"  onclick="nextPrev(-1)">Previous</button>
                    <button type="button" id="nextBtn" class="btn btn-primary" onclick="nextPrev(1)">Next</button>
                    </div>
                </div>


                

                <!-- Circles which indicates the steps of the form: -->
                <div style="text-align:center;margin-top:40px;">
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                </div>
            </form>
         
         </div>
         <div class="col-md-3"></div>
        
        </div>
    </div>


    <script src="scrp.js"></script>
</body>
</html>