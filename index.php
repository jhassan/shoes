    <?php include_once('header.php');?>

<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                <?php if(isset($_GET['error']) && $_GET['error'] == "1") {?>
                    <div class="alert alert-danger">User Name and Password is wrong!</div>
                <?php } ?>
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    
                    <div class="panel-body">
                        <form role="form" action="login.php" method="post" id="LoginForm">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="User Email" name="strNewLoginx" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="strNewPassword" type="password" value="">
                                </div>
                                <div class="checkbox hide">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <div class="form-group col-lg-6" style="padding-left:0px;">
                                    <button type="submit" class="btn btn-default">Login</button>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <!--<a href="index.html" class="btn btn-lg btn-success btn-block">Login</a>-->
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include_once('footer.php')?>