<?php
include 'session_check.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

	<link rel="stylesheet" href="../CSS/content-sidebar.css">
    <link rel="stylesheet" href="../CSS/header-style.css">
    <link rel="stylesheet" href="../CSS/footer-style.css">

	<title>Maleda</title>
</head>
<body>
<?php  include '../includes/loggedin-header.php' ; ?>

    
	<section id="content">
        <?php include '../includes/admin_sidebar.php'; ?>

		<main>

			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download' ></i>
					<span class="text">Download PDF</span>
				</a>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>1020</h3>
						<p>New Order</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group' ></i>
					<span class="text">
						<h3>2834</h3>
						<p>Visitors</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-dollar-circle' ></i>
					<span class="text">
						<h3>$2543</h3>
						<p>Total Sales</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Recent Orders</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>User</th>
								<th>Date Order</th>
								<th>Status</th>
							</tr>
						</thead>
						<tbody>
<!--							<tr>-->
<!--								<td>-->
<!--									<img src="img/people.png">-->
<!--									<p>John Doe</p>-->
<!--								</td>-->
<!--								<td>01-10-2021</td>-->
<!--								<td><span class="status completed">Completed</span></td>-->
<!--							</tr>-->
<!--							<tr>-->
<!--								<td>-->
<!--									<img src="img/people.png">-->
<!--									<p>John Doe</p>-->
<!--								</td>-->
<!--								<td>01-10-2021</td>-->
<!--								<td><span class="status pending">Pending</span></td>-->
<!--							</tr>-->
<!--							<tr>-->
<!--								<td>-->
<!--									<img src="../img/people.png" alt="">-->
<!--									<p>John Doe</p>-->
<!--								</td>-->
<!--								<td>01-10-2021</td>-->
<!--								<td><span class="status process">Process</span></td>-->
<!--							</tr>-->
<!--							<tr>-->
<!--								<td>-->
<!--									<img src="../img/people.png">-->
<!--									<p>John Doe</p>-->
<!--								</td>-->
<!--								<td>01-10-2021</td>-->
<!--								<td><span class="status pending">Pending</span></td>-->
<!--							</tr>-->
<!--							<tr>-->
<!--								<td>-->
<!--									<img src="../img/people.png">-->
<!--									<p>John Doe</p>-->
<!--								</td>-->
<!--								<td>01-10-2021</td>-->
<!--								<td><span class="status completed">Completed</span></td>-->
<!--							</tr>-->
						</tbody>
					</table>
				</div>
				<div class="todo">
					<div class="head">
						<h3>Todos</h3>
						<i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i>
					</div>
<!--					<ul class="todo-list">-->
<!--						<li class="completed">-->
<!--							<p>Todo List</p>-->
<!--							<i class='bx bx-dots-vertical-rounded' ></i>-->
<!--						</li>-->
<!--						<li class="completed">-->
<!--							<p>Todo List</p>-->
<!--							<i class='bx bx-dots-vertical-rounded' ></i>-->
<!--						</li>-->
<!--						<li class="not-completed">-->
<!--							<p>Todo List</p>-->
<!--							<i class='bx bx-dots-vertical-rounded' ></i>-->
<!--						</li>-->
<!--						<li class="completed">-->
<!--							<p>Todo List</p>-->
<!--							<i class='bx bx-dots-vertical-rounded' ></i>-->
<!--						</li>-->
<!--						<li class="not-completed">-->
<!--							<p>Todo List</p>-->
<!--							<i class='bx bx-dots-vertical-rounded' ></i>-->
<!--						</li>-->
<!--					</ul>-->
				</div>
			</div>
		</main>
		<!-- MAIN -->
        <?php include '../includes/footer.php' ;?>
	</section>
	<!-- CONTENT -->
	

	<script src="../js/script.js"></script>
</body>
</html>