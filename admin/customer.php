<?php
global $conn;
include 'session_check.php';

// Include your database connection file
require '../database/db_connect.php';

$query = isset($_GET['query']) ? $_GET['query'] : '';

// Prepare a SELECT SQL query to get users who are not admins
if ($query) {
    $sql = "SELECT id, email, address, phone FROM Users WHERE is_admin = 0 AND (email LIKE ? OR address LIKE ? OR phone LIKE ?)";
} else {
    $sql = "SELECT id, email, address, phone FROM Users WHERE is_admin = 0";
}
// Initialize a statement for the query
$stmt = $conn->prepare($sql);
if ($query) {
    $param = "%" . $query . "%";
    $stmt->bind_param("sss", $param, $param, $param);
}
// Execute the statement
$stmt->execute();

// Get the result
$result = $stmt->get_result();

// Fetch the users
$users = $result->fetch_all(MYSQLI_ASSOC);

// Close the statement
$stmt->close();

// Close the database connection
$conn->close();


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
    <link rel="stylesheet" href="../CSS/search-box.css">


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
                        <a class="active" href="#">Customer</a>
                    </li>
                </ul>
            </div>
        </div>

        <ul class="box-info">
            <li>
                <i class='bx bxs-calendar-check' ></i>
                <span class="text">
						<h3>1020</h3>
						<p>Customers</p>
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
                    <h3>Customer Data</h3>
                    <form class="search-box" action="customer.php" method="get">
                        <input type="text" name="query" placeholder="Search...">
                        <button type="submit"><i class='bx bx-search'></i></button>
                    </form>
                    <i class='bx bx-filter' ></i>
                </div>


                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Phone</th>
                            <th>Profile</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user): ?>
                            <tr>

                                <td><?php echo $user['id']; ?></td>
                                <td>
                                    <img src="../images/profilepic/ph.png" alt="">
                                </td>
                                <td><?php echo $user['email']; ?></td>
                                <td><?php echo $user['address']; ?></td>
                                <td><?php echo $user['phone']; ?></td>
                                <td>
                                    <a href="customer-profile.php?id=<?php echo $user['id']; ?>">View Profile</a> <!-- New column data -->
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
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