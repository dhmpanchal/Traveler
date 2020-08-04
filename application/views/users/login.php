<?php include('header.php'); ?>
<div class="container" style="margin-top:20px;" class="mt-3">
    <div class="form-wrap">
        <div class="tab">
            
            <div class="tab-content">
                <div class="tab-content-inner active" data-content="signup">
                    <h3>Login</h3>
                    <form action="<?php echo base_url(); ?>HomeController/doLogin" method="POST">
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="fullname">User Name</label>
                                <input type="text" id="username" name="username" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-12">
                                <label for="fullname">Password</label>
                                <input type="password" id="password" name="password" class="form-control">
                            </div>
                        </div>

                        <?php if($error = $this->session->flashdata('login_faild')): ?>
                        <div class="row">
                            <div class="col-lg-6 alert alert-danger" style="margin-top:40px;">
                            <?php echo $error; ?>
                            </div>
                        </div>
                        <?php endif; ?>
                        
                        <div class="row form-group">
                            <div class="col-md-12">
                                <input type="submit" class="btn btn-primary btn-block" value="Login">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-6">
                                <a href="<?php echo base_url(); ?>HomeController/signup" class="btn btn-secondry">Sign Up</a>
                            </div>
                            <div class="col-md-6">
                                <input type="submit" value="Forget Password">
                            </div>
                        </div>
                    </form>	
                </div>

                
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>