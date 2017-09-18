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
        </div>
        <br></br>
        <div class="center_content">
            <div class="left_content">
                <ul class="nav nav-pills nav-stacked">
                    <li class="li-background">
                        <a href="http://localhost:8081/OnlineLibrarySystem/frontEnd/readerInformation.php#">
                            My account
                        </a>
                    </li>
                    <li class="li-background">
                        <a href="http://localhost:8081/OnlineLibrarySystem/frontEnd/individual.php">
                            Borrowed
                            /Returned
                        </a>
                    </li>
                    <li class="li-background">
                        <a href="http://localhost:8081/OnlineLibrarySystem/frontEnd/BookCurrentlyBorrowed.php">
                            CurrentlyBorrowedBook
                        </a>
                    </li>
                </ul>
            </div>
            <div class="right_content">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">My account</h3>
                    </div>
                    <div class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item">StudentID:</li>
                            <li class="list-group-item">
                                Name: <input type="text"/>
                                <input type="submit" value="edit" />
                                </form>
                            </li>
                            <li class="list-group-item">Email:</li>
                        </ul>
                    </div>
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
        </div>
    </div>

</body>

</html>