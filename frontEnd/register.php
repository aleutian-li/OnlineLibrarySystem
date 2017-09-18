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
                    <li><a href="myaccount.php">my accout</a></li>
                    <li class="selected"><a href="register.php">register</a></li>
                    <li><a href="BookSearching.php">book searching</a></li>
                </ul>
            </div>
        </div>
        <div class="center_content">
            <div class="right_content_change">
            <div class="panel panel-primary">
	            <div class="panel-heading">
		            <h3 class="panel-title"> <span class="title_icon"></span>Register</h3>
	            </div>
	            <div class="panel-body">
                    <div class="feat_prod_box_details">
                        <p class="details">
                            Before you log in to the online library, you will need to register your account on this page.
                        </p>
                    </div>
                    <div class="contact_form">
                        <div class="form_subtitle">create new account</div>
                            <form name="register" action="#">
                        <div style="padding: 30px 30px 10px;">
                            <form class="bs-example bs-example-form" role="form">
                                <div class="input-group">
                                    <span class="input-group-addon">StudentID</span>
                                    <input type="text" class="form-control" placeholder="please type a StudentID">
                                </div>
                            </form>
                        </div>
                        <div style="padding: 30px 30px 10px;">
                            <form class="bs-example bs-example-form" role="form">
                                <div class="input-group">
                                    <span class="input-group-addon">Password</span>
                                    <input type="text" class="form-control" placeholder="please type a Password">
                                </div>
                            </form>
                        </div>
                        <div style="padding: 30px 30px 10px;">
                            <form class="bs-example bs-example-form" role="form">
                                <div class="input-group">
                                    <span class="input-group-addon">  Confirm &nbsp&nbsp </span>
                                    <input type="text" class="form-control" placeholder="please retype your Password">
                                </div>
                            </form>
                        </div>
                        <div style="padding: 30px 30px 10px;">
                            <form class="bs-example bs-example-form" role="form">
                                <div class="input-group">
                                    <span class="input-group-addon">   Email &nbsp&nbsp&nbsp&nbsp&nbsp </span>
                                    <input type="text" class="form-control" placeholder="please type your Email">
                                </div>
                            </form>
                        </div>
                        <div class="form_row">
                            <input type="submit" class="register" value="register" onclick="location.href='http://localhost:8081/OnlineLibrarySystem/frontEnd/myaccount.php'"/>
                        </div>
                    </div>
                </div>
            </div>
	</div>
</div>
            <
        </div>
        <div class="clear"></div>

        <div class="footer">
            <div class="left_footer">
                <h5>For IT Project Management</h5>
            </div>
            <div class="right_footer">
                <h5>A1 Group</h5>
            </div>
        </div>
    </div>

</body>

</html>