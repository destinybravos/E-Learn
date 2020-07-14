<link rel="stylesheet" href="css/proAlert.css">

<div class="pro-alert pro-alert-tr" id="myAlert">
    <!-- For top-right display -->
    <div class="alert-body">
        
    </div>
</div>

<!--  -->
<span id="alert-container" style="z-index: 3;"></span>
<!--  -->


<script src="js/proAlert.js"></script>

<!-- Bootstrap Modal -->

<div class="modal fade" id="testModal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-primary text-light" style="padding:0.5rem 1rem;">
                
            </div>
            <div class="modal-body" style="padding:0;">
            <div class="card" style="margin-bottom: 30px;">
                <div class="card-body">
                    <div id="profile-img-container">
                        <img src="" alt="img">
                    </div>

                    <div class="mt-4 row">
                        <div class="form-group col-md-6">
                            <strong>Firstname:</strong> <br> <span id="fname"></span>
                        </div>
                        <div class="form-group col-md-6">
                            <strong>Lastname:</strong> <br> <span id="lname"></span>
                        </div>
                        <div class="form-group col-md-6">
                            <strong>Phone Number:</strong> <br> <span id="phone"></span>
                        </div>
                        <div class="form-group col-md-6">
                            <strong>Email:</strong> <br> <span id="email"></span>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>