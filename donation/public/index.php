<?php
require('connection.inc.php');
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Payment Gateway Integration Demo - newVerTestPublic">
    <title>Let's Donate!</title>
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="customStyle.css">

</head>

<body>
    <center>
        <br>
        <div class="lead text-danger">
            <noscript>Please allow JavaScript to run to use the site as intended</noscript>
        </div>
        <input type='checkbox' id="main-card">
        <div class="container-sm card-container">
            <div class="card-flip shadow">
                <div class="front">
                    <div class="container-0 m-2">
                        <div class="row m-2">
                            <div class="col m-2">
                                <h5 class="display-4 text-primary">Let's Donate!</h5>
                            </div>
                        </div>
                        <br>
                        <div class="row m-2">
                            <div class="col m-2">
                                <p class="lead"><b>Donation Cause</b></p>
                                <hr style="width: 10%; border-color: #0069D9; border-width: 1.5px;">
                                <p class="lead">Donate for Bright Future of Poor Children</p>
                            </div>
                            <div class="col m-2">
                                <p class="lead"><b>Campaign Begins</b></p>
                                <hr style="width: 10%; border-color: #0069D9; border-width: 1.5px;">
                                <p class="lead">February 1, 2021</p>
                            </div>
                        </div>
                        <div class="row m-2">
                            <div class="col m-2">
                                <p class="lead"><b>Organiser Details</b></p>
                                <hr style="width: 10%; border-color: #0069D9; border-width: 1.5px;">
                                <p class="lead">The Sparks Foundation</p>
                            </div>
                            <div class="col m-2">
                                <p class="lead"><b>Campaign Ends</b></p>
                                <hr style="width: 10%; border-color: #0069D9; border-width: 1.5px;">
                                <p class="lead">February 31, 2021</p>
                            </div>
                        </div>
                    </div>
                    <div class="container-0 m-4">
                        <div class="row m-2">
                            <div class="col m-2">
                                <label class="btn btn-primary" for="main-card">Donate Now</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="back">
                    <div class="container-0 m-2">
                        <div class="row m-2">
                            <div class="col m-2">
                                <center>
                                    <h5 class="display-4 text-primary">Please enter the following details</h5>
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="container-0 m-2">
                        <div class="container-0 m-2">
                            <div class="row m-2">
                                <div class="col m-2"></div>
                                <div class="col-md-auto m-2">
                                    <center>
                                        <form name="donationForm" action="payment.php" method="post" style="padding:25px;">
                                            <table class="table m-2 table-borderless">
                                                <tr>
                                                    <th class="lead text-left align-middle">Name&nbsp;</th>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" id="customerName" name="name" placeholder="John" autocomplete="off" maxlength="25" required>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="lead text-left align-middle">Email ID&nbsp;</th>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="email" class="form-control" id="customerEmail" name="email" placeholder="john@example.com" autocomplete="off" maxlength="100" required>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="lead text-left align-middle">Phone No&nbsp;</th>
                                                    <td>
                                                        <div class="input-group">
                                                            <input type="telephone" class="form-control" id="customerPhone" name="mobile" placeholder="9876543210" autocomplete="off" minlength="10" maxlength="10" required>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="lead text-left align-middle">Amount&nbsp;</th>
                                                    
                                                    <td>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">&#8377;</span>
                                                            </div>
                                                            <input type="number" class="form-control" id="donationAmount" name="amount" placeholder="1" autocomplete="off" required>
                                    
                                                        </div>   
                                                        <small class="form-text text-muted">Please Enter Amount Greater than 10</small>                                                     
                                                    </td>
                                                </tr>
                                            </table>

                                            <div class="container-0 m-2">
                                                <div class="row m-2">
                                                    <div class="col m-2">
                                                        <center>
                                                            <button type="submit" id="" class="btn btn-primary">Pay</button>
                                                            <br><br>
                                                            <label class="btn btn-link" for="main-card">Back</label>
                                                        </center>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </center>
                                </div>
                                <div class="col m-2"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container-sm">
            <div class="row m-2">
                <div class="col m-2">
                    <small>Made by Karnik Shah</small>
                </div>
            </div>
        </div>
    </center>
</body>

</html>