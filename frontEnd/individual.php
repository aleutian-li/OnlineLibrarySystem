<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" />
	<title>Online Library</title>
	<link rel="stylesheet" type="text/css" href="style.css" />
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
			<!--  end of menu -->
		</div>
		<!--  end of header  -->
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
			<!--  end of left_content -->
			<div class="right_content">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h3 class="panel-title">Borrowed/Returned Books</h3>
					</div>
					<div class="panel-body">
					<div class="mainbox">
					<div class="content">
						<table class="table table-striped">
							<thead>
								<tr>
								<th></th>
								<th>ID</th>
								<th>Name</th>
								<th>Author</th>
								<th>Borrow date</th>
								<th>Return date</th>
								<th>Collection</th>
								</tr>
							</thead>
							<tbody>
								<tr>
								<td>1</td>
								<td>2006583</td>
								<td>HTML5程序设计基础教程</td>
								<td>李雯, 李洪发主编</td>
								<td>2016-09-04</td>
								<td>2016-09-18</td>
								<td>Four layers of science and technology books reading area</td>
								</tr>
								<tr>
								<td>2</td>
								<td>1971154</td>
								<td>HTML5与CSS3基础教程</td>
								<td>(美) Elizabeth Castro, Bruce Hyslop著</td>
								<td>2016-09-04</td>
								<td>2016-09-18</td>
								<td>Four layers of science and technology books reading area</td>
								</tr>
							</tbody>
						</table>
					</div>
					<!--  end of content -->
				</div>
				<!-- end of mainbox -->
					</div>
				</div>
			</div>
			<!-- end of right_content -->
			<div class="clear"></div>
		</div>
		<!-- end of center_content -->
        <div class="footer">
            <div class="left_footer">
                <h5>For IT Project Management</h5>
            </div>
            <div class="right_footer">
                <h5>A1 Group</h5>
            </div>
        </div>
	</div>
 	<!-- end of wrapn -->
</body>

</html>