<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
    <title>Online Library</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">  
	<script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
                            <h3 class="panel-title"><span class="title_icon"></span>CurrentlyBorrowedBook</h3>
                        </div>
                    <div class="panel-body">
                        <div class="feat_prod_box_details">
                            <table class="table">
                                <caption>Here are the books that you have borrowed from the library</caption>
                                <thead>
                                    <tr>
                                        <th>   </th>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Borrowing date</th>
                                        <th>Deadline</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>100001</td>
                                        <td>IT Project Management</td>
                                        <td>Kathy Schwaibe</td>
                                        <td>2017.9.10</td>
                                        <td>2017.10.10</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>100002</td>
                                        <td>Computer Networking</td>
                                        <td>James F.Kurose</td>
                                        <td>2017.9.17</td>
                                        <td>2017.10.17</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
        </div>

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