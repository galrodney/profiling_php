<?php
include 'config.php';

// Check if admin is logged in
session_start();
if (!isset($_SESSION['admin_logged_in']) || !$_SESSION['admin_logged_in']) {
    header("Location: admin_login.php");
    exit();
}

// CRUD operations go here (similar to the previous example)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Create
    if (isset($_POST['create'])) {
        $last_name = $_POST['last_name'];
        $first_name = $_POST['first_name'];
        $middle_name = $_POST['middle_name'];
        $extension_name = $_POST['extension_name'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $birthday = $_POST['birthday'];
        $status = $_POST['status'];
        $benefits = $_POST['benefits'];

        $sql = "INSERT INTO users (last_name, first_name, middle_name, extension_name, age, address, birthday, status,benefits)
                VALUES ('$last_name', '$first_name', '$middle_name', '$extension_name', $age, '$address', '$birthday', '$status', '$benefits')";

        if ($conn->query($sql) === TRUE) {
            echo "Record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    // Read
    $result = $conn->query("SELECT * FROM users");
    $users = $result->fetch_all(MYSQLI_ASSOC);

    // Update
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $last_name = $_POST['last_name'];
        $first_name = $_POST['first_name'];
        $middle_name = $_POST['middle_name'];
        $extension_name = $_POST['extension_name'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $birthday = $_POST['birthday'];
        $status = $_POST['status'];
        $benefits = $_POST['benefits'];

        $sql = "UPDATE users SET last_name='$last_name', first_name='$first_name', middle_name='$middle_name',
                extension_name='$extension_name', age=$age, address='$address', birthday='$birthday', status='$status', benefits='$benefits'
                WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }

    // Delete
    if (isset($_POST['delete'])) {
        $id = $_POST['id'];

        $sql = "DELETE FROM users WHERE id=$id";

        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    }
   foreach ($users as $user) : ?>
        <tr>
            <td><?= $user['last_name'] ?></td>
            <td><?= $user['first_name'] ?></td>
            <td><?= $user['middle_name'] ?></td>
            <td><?= $user['extension_name'] ?></td>
            <td><?= $user['age'] ?></td>
            <td><?= $user['address'] ?></td>
            <td><?= $user['birthday'] ?></td>
            <td><?= $user['status'] ?></td>
            <td><?= $user['beneficiary'] ?></td>
            <td>
                <form method="POST" action="crud.php">
                    <input type="hidden" name="id" value="<?= $user['id'] ?>">
                    <button type="submit" name="update">Update</button>
                    <button type="submit" name="delete">Delete</button>
                </form>
            </td>
        </tr>
    <?php endforeach; 
}
?>
?>
