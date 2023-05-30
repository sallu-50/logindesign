<!doctype html>
                        <html>
                            <head>
                                <meta charset='utf-8'>
                                <meta name='viewport' content='width=device-width, initial-scale=1'>
                                <title>Registration</title>
                                <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='' rel='stylesheet'>
                                <style>.register {
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    margin-top: 3%;
    padding: 3%;
}

.register-left {
    text-align: center;
    color: #fff;
    margin-top: 4%;
}

.register-left input {
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 60%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 30%;
    margin-bottom: 3%;
    cursor: pointer;
}

.register-right {
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}

.register-left img {
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite alternate;
    animation: mover 1s infinite alternate;
}

@-webkit-keyframes mover {
    0% {
        transform: translateY(0);
    }

    100% {
        transform: translateY(-20px);
    }
}

@keyframes mover {
    0% {
        transform: translateY(0);
    }

    100% {
        transform: translateY(-20px);
    }
}

.register-left p {
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}

.register .register-form {
    padding: 10%;
    margin-top: 10%;
}

.btnRegister {
    float: right;
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
}

.register .nav-tabs {
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}

.register .nav-tabs .nav-link {
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}

.register .nav-tabs .nav-link:hover {
    border: none;
}

.register .nav-tabs .nav-link.active {
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading2 {
    text-align: center;
    margin-top: -8%;
    margin-bottom: -15%;
    color: #495057;
}
.register-heading3 {
    text-align: center;
    
    margin-bottom: -20%;
    color: #495057;
}

.register-heading {
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}</style>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
                                <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
                                <script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>
                            </head>
                            <body oncontextmenu='return false' class='snippet-body'>
                            <div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt="" />
            <h3>Welcome</h3>
            <p>You are 30 seconds away from earning your own money!</p>
            <input type="submit" name="" value="Login" /><br />
        </div>
        <div class="col-md-9 register-right">
            <div class=" d-flex justify-content-center justify-content-md-end">
                <ul class="nav nav-tabs justify-content-center justify-content-md-around" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Physicians</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Specialist</a>
                    </li>
                </ul>
            </div>

            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h4 class="register-heading">Apply as a Primary Care Physicians</h4>
                    
                    <div class="row register-form">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name *" value="" />
                            </div>
                           
                            <div class="form-group">
                                <input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Your Phone *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Provider NPI  *" value="" />
                            </div>
                            
                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Last Name *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email *" value="" />
                            </div>
                            
                            <div class="form-group">
                                <div class="maxl">
                                    <label class="radio inline">
                                        <input type="radio" name="gender" value="male" checked>
                                        <span> Male </span>
                                    </label>
                                    <label class="radio inline">
                                        <input type="radio" name="gender" value="female">
                                        <span>Female </span>
                                    </label>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <h4 class="register-heading2">Address</h4>
                    <div class="row register-form ">
                        <div class="col-md-6 ">
                            <div class="form-group">
                                <input type="text" class="form-control" name="Practice Name" placeholder="Practice Name *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="Address" placeholder="Address *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="City" placeholder="City*" value="" />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="State" placeholder="State *" value="" />
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                
                                <input type="number" class="form-control" name="zip" placeholder="Zip *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="Tax ID" class="form-control" placeholder="Tax ID *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text"  name="Provider Group NPI" class="form-control" placeholder="Provider Group NPI *" value="" />
                            </div>
                        
                        </div>
                    </div>
                    
                    <h3 class="register-heading3"></h3>
                    <div class="row register-form">
                        <div class="col-md-6">
                            <div class="form-group">
                            
                                
                                    <select class="form-control">
                                    <option class="hidden" selected disabled>Primary Care Physicians: Specialty *</option>
                                    <option>Family Medicine</option>
                                    <option>Internal Medidicine</option>
                                    <option>Nurse Practitioner</option>
                                    <option>Pediatricition</option>
                                </select>
                            </div>
                            <div class="form-group">
                            <input type="text" class="form-control" name="Website" placeholder="Website" value="" />
                                
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="Insurance" placeholder="Affiliate with us: Insurance companies *" value="" />
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                    <input type="password" class="form-control" name="Password " placeholder="Password *" value="" />
                             </div>
                            <div class="form-group">
                                    <input type="c-password" class="form-control" name="c-Password " placeholder="Confirm-Password *" value="" />
                            </div>
                            
                           
                            
                            <input type="submit" class="btnRegister" value="Register" />
                        </div>
                    
                    </div> 
                </div>






                <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <h3 class="register-heading">Apply as a Specialist</h3>
                    <div class="row register-form">
                    <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="First Name *" value="" />
                            </div>
                           
                            <div class="form-group">
                                <input type="text" minlength="10" maxlength="10" name="txtEmpPhone" class="form-control" placeholder="Your Phone *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Provider NPI  *" value="" />
                            </div>
                            
                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Last Name *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email *" value="" />
                            </div>
                            
                            <div class="form-group">
                                <div class="maxl">
                                    <label class="radio inline">
                                        <input type="radio" name="gender" value="male" checked>
                                        <span> Male </span>
                                    </label>
                                    <label class="radio inline">
                                        <input type="radio" name="gender" value="female">
                                        <span>Female </span>
                                    </label>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    <h3 class="register-heading2">Address</h3>
                    <div class="row register-form ">
                        <div class="col-md-6 ">
                            <div class="form-group">
                                <input type="text" class="form-control" name="Practice Name" placeholder="Practice Name *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="Address" placeholder="Address *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="City" placeholder="City*" value="" />
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="State" placeholder="State *" value="" />
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                
                                <input type="number" class="form-control" name="zip" placeholder="Zip *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text" name="Tax ID" class="form-control" placeholder="Tax ID *" value="" />
                            </div>
                            <div class="form-group">
                                <input type="text"  name="Provider Group NPI" class="form-control" placeholder="Provider Group NPI *" value="" />
                            </div>
                        
                        </div>
                    </div>
                    
                    <h3 class="register-heading3"></h3>
                    <div class="row register-form">
                        <div class="col-md-6">
                            <div class="form-group">
                            
                                
                                    <select class="form-control">
                                    <option class="hidden" selected disabled>Primary Care Physicians: Specialty *</option>
                                    <option>Family Medicine</option>
                                    <option>Internal Medidicine</option>
                                    <option>Nurse Practitioner</option>
                                    <option>Pediatricition</option>
                                </select>
                            </div>
                            <div class="form-group">
                            <input type="text" class="form-control" name="Website" placeholder="Website" value="" />
                                
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="Insurance" placeholder="Affiliate with us: Insurance companies *" value="" />
                            </div>
                            
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                    <input type="password" class="form-control" name="Password " placeholder="Password *" value="" />
                             </div>
                            <div class="form-group">
                                    <input type="c-password" class="form-control" name="c-Password " placeholder="Confirm-Password *" value="" />
                            </div>
                            
                           
                            
                            <input type="submit" class="btnRegister" value="Register" />
                        </div>
                    
                    </div> 
                </div>
            </div>
        </div>
    </div>

</div>
                            <script type='text/javascript'></script>
                            </body>
                        </html>