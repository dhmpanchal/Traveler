<?php include('header.php'); ?>
<div class="container" style="margin-top:20px;" class="mt-3">
    <div class="form-wrap">
        <div class="tab">
            
            <div class="tab-content">
                <div class="tab-content-inner active" data-content="signup">
                    <h3>Sign Up</h3>
                    <form action="<?php echo base_url(); ?>HomeController/doRegister" method="POST">
                    <div class="row form-group">
                            <div class="col-md-12">
                                <label for="first_name">First Name</label>
                                <input type="text" id="first_name" name="first_name" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="last_name">Last Name</label>
                                <input type="text" id="last_name" name="last_name" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="email">Email</label>
                                <input type="text" id="email" name="email" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="phone">Phone</label>
                                <input type="text" id="phone" name="phone" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="username">User Name</label>
                                <input type="text" id="username" name="username" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="password">Password</label>
                                <input type="password" id="password" name="password" class="form-control">
                            </div>
                        </div>
                        <?php if($msg = $this->session->flashdata('sucess')): ?>
                            <div class="row">
                                <div class="col-lg-6 alert alert-success" style="margin-top:40px;">
                                <?php echo $msg; ?>
                                </div>
                            </div>
                        <?php elseif($msg = $this->session->flashdata('error')): ?>
                            <div class="row">
                            <div class="col-lg-6 alert alert-danger" style="margin-top:40px;">
                                <?php echo $msg; ?>
                            </div>
                            </div>
                        <?php endif; ?>
                        
                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-primary btn-block" value="Register">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <a href="<?php echo base_url(); ?>HomeController/login" class="btn btn-secondry">Allready have an account ? Login</a>
                            </div>
                        </div>
                    </form>	
                </div>

                
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>