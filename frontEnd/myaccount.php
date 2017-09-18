<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
    <title>Online Library</title>
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <div id="wrap">
        <div class="header">
            <div class="logo"><a href="index.php"><img src="images/logo.gif" alt="" title="" border="0" /></a></div>
            <div id="menu">
                <ul>
                    <li><a href="index.php">home</a></li>
                    <li class="selected"><a href="myaccount.php">my accout</a></li>
                    <li><a href="register.php">register</a></li>
                    <li><a href="BookSearching.php">book searching</a></li>
                </ul>
            </div>
            <!--end of menu-->
        </div>
        <div class="center_content">
            <div class="right_content_change">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title"><span class="title_icon"></span>My account</h3>
                    </div>
                    <div class="panel-body">
                        <div class="feat_prod_box_details">
                            <p class="details">
                            Before you log in to the online library, you will need to enter your account number and password.
                            </p>
                            <div class="contact_form">
                                <div style="padding: 30px 30px 10px;">
                                    <form class="bs-example bs-example-form" role="form">
                                        <div class="input-group">
                                            <span class="input-group-addon">Username</span>
                                            <input type="text" class="form-control" placeholder="Please type in your Username">
                                        </div>
                                    </form>
                                </div>
                                <div style="padding: 30px 30px 10px;">
                                    <form class="bs-example bs-example-form" role="form">
                                        <div class="input-group">
                                            <span class="input-group-addon">password</span>
                                            <input type="text" class="form-control" placeholder="Please type in your Password">
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="form_row">
                                <div class="terms">
                                    <input type="checkbox" name="terms" />
                                    Remember me
                                </div>
                            </div>
                            <div class="form_row">
                                <input type="submit" class="register" value="login" onclick="location.href='http://localhost:8081/OnlineLibrarySystem/frontEnd/readerInformation.php'"/>
                            </div>
                            <!--end of login-->
                        </div>
                    </div>
                    <!--end of title-->
                </div>
            </div>
        </div>
        <div class="clear"></div>

        <div class="footer">
        <div class="left_footer">
            <h5>For IT Project Management</h5>
        </div>
        <div class="right_footer">
            <h5>A1 Group</h5>
        </div>
        <!--end of footer-->
    </div>
    </div>
</body>

</html>