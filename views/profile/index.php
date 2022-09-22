<?php

/** @var yii\web\View $this */

$this->registerCssFile("@web/css/profile.css")
?>

<!DOCTYPE html>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

<html>
<!-- <head>
    <div class="LoginForm">
    <title>Login page with jQuery and AJAX</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
  </head> -->

<body>
    <div class="Background">
        <div class='ProfileForms'>
            <div class="LoginForm1">
                <form method="post" ,action="Login.html">
                    <div class="row">
                        <h2 class="LoginTitle" style="text-align: left">
                            My Profile
                        </h2>

                        <div class="col">
                            <div class="hide-md-lg">
                                <!-- <p>Sign Up manually:</p> -->
                            </div>
                            <h3>Email :</h3>
                            <input type="text" name="email" id="email" placeholder="Email" required />
                            <h3>Confirm Password :</h3>
                            <input type="password" name="password" id="password" placeholder="Password" required />
                            <br></br>
                            <input type="button" value="Edit" id="login" />
                        </div>
                    </div>
                </form>
            </div>
            <div class="LoginForm1">
                <h2 class="LoginTitle" style="text-align: left">
                    Passenger List
                </h2>
                <div class="tableStructure">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="LoginForm">
            <form method="post" ,action="Login.html">
                <div class="row">
                    <div class="title">
                        <h2 class="LoginTitle" style="text-align: left">
                            Add Passanger
                        </h2>
                    </div>
                </div>

                <div class="col">
                    <div class="hide-md-lg">
                        <!-- <p>Sign Up manually:</p> -->
                    </div>
                    <h3>First Name :</h3>
                    <input type="text" name="firstName" id="firstName" placeholder="First Name" required />
                    <h3>Last Name :</h3>
                    <input type="text" name="lastName" id="lastName" placeholder="Last Name" required />
                    <h3>Date of Birth :</h3>
                    <input type="datetime" name="dateOfBirth" id="dateOfBirth" placeholder="Date of Birth" required />
                    <h3>Gender :</h3>
                    <input type="text" name="gender" id="gender" placeholder="Gender" required />
                    <h3>Nationality :</h3>
                    <input type="text" name="nationality" id="nationality" placeholder="Nationality" required />
                    <h3>Document Type :</h3>
                    <input type="text" name="documentType" id="documentType" placeholder="Document Type" required />
                    <h3>Document Number :</h3>
                    <input type="text" name="documentNumber" id="documentNumber" placeholder="Document Number" required />
                    <br></br>
                    <input type="button" value="Add New Passanger" id="login" />
                </div>
        </div>
        </form>
    </div>
    </div>
    </div>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      $("#login").on("click", function() {
        $.ajax({
          url: '<?php echo Yii::$app->request->baseUrl . '/signup/save' ?>',
          type: "POST",
          data: {
            first_name : $("#firstName").val(),
            last_name : $("#lastName").val(),
            date_of_birth : $("#dateOfBirth").val(),
            gender : $("#gender").val(),
            nationality : $("#nationality").val(),
            personal_doc_type : $("#docType").val(),
            personal_doc_num : $("#docNumb").val()
          },
          success: function(response) {
            console.log(response);
          },
        });
      });
    });
  </script>
</body>

</html>
<link rel="stylesheet" href="../assets/css/Login.css" />