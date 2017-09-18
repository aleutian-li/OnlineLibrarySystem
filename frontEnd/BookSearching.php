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
                    <li ><a href="index.php">home</a></li>
                    <li><a href="myaccount.php">my accout</a></li>
                    <li><a href="register.php">register</a></li>
                    <li class="selected"><a href="BookSearching.php">book searching</a></li>
                </ul>
            </div>
            <!-- end of menu -->
        </div>
        <!-- end of right header -->
        <div class="center_content">
            <div class="right_content_change">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Searching</h3>
                    </div>
                <div class="panel-body">
                    <div class="searching">
                        <select class="option" name="strSearchType" size="1" style="width:100; ">
                        <option value="title">Name</option>
                        <option value="author">Author</option>
                        <option value="isbn">ISBN/ISSN</option>
                        <option value="publisher">Publisher</option>
                        <input type="hidden" id="historyCount" name="historyCount" value="1" />
                        <input style="width:34%;" type="text" size="45" name="strText" id="strText" value="" >
                        <input type="submit" class="btn btn-primary" value="&nbsp;searching&nbsp;" size="20">
                    </div>
                </div>
            </div>
        </div>
         <!-- end of searching -->
        <div class="footer">
            <div class="left_footer">
                <h5>For IT Project Management</h5>
            </div>
            <div class="right_footer">
                <h5>A1 Group</h5>
            </div>
        </div>
        <!-- end of footer -->
    </div>
    <!-- end of wrap -->
</body>

</html>