<?php
session_start();
include 'dbcon.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <br><br>
    <div class="cont">
        <div class="form sign-in">
            <h2>Welcome</h2>
            <form action="login.php" method="POST">
                <label>
                    <span>Email</span>
                    <input name="email" type="email" required />
                </label>
                <label>
                    <span>Password</span>
                    <input name="password" type="password" required />
                </label>
                <p class="forgot-pass">Forgot password?</p>
                <button name="sign_in" type="submit" class="submit">Sign In</button>
            </form>
        </div>
        <div class="sub-cont">
            <div class="img">
                <div class="img__text m--up">
                    <h3>Don't have an account? Please Sign up!</h3>
                </div>
                <div class="img__text m--in">
                    <h3>If you already have an account, just sign in.</h3>
                </div>
                <div class="img__btn">
                    <span class="m--up">Sign Up</span>
                    <span class="m--in">Sign In</span>
                </div>
            </div>
            <div class="form sign-up">
                <form action="" method="POST">
                    <h2>Create your Account</h2>
                    <label>
                        <span>Name</span>
                        <input name="username" type="text" required />
                    </label>
                    <label>
                        <span>Email</span>
                        <input name="email" type="email" required />
                    </label>
                    <label>
                        <span>Password</span>
                        <input name="password" type="password" required />
                    </label>
                    <label>
                        <span>Confirm Password</span>
                        <input name="confirmpass" type="password" required />
                    </label>
                    <label>
                        <span>Phone Number</span>
                        <input name="phone_number" type="text" required />
                    </label>
                    <button name="sign_up" type="submit" class="submit">Sign Up</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        document.querySelector('.img__btn').addEventListener('click', function() {
            document.querySelector('.cont').classList.toggle('s--signup');
        });
    </script>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    if (isset($_POST['sign_up'])) {
        // Debugging: Print form data
        echo "<script>alert('Form submitted');</script>";
        print_r($_POST);

        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirmpass'];
        $username = $_POST['username'];
        $phone_number = $_POST['phone_number'];

        // Validate email format
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<script>alert('Invalid email format!')</script>";
            echo "<meta http-equiv='refresh' content='0;url=index.html'>";
            exit;
        }

        // Validate password length
        if (strlen($password) < 8) {
            echo "<script>alert('Password must be at least 8 characters long!')</script>";
            echo "<meta http-equiv='refresh' content='0;url=index.html'>";
            exit;
        }

        // Validate password contains at least one letter
        if (!preg_match("/[a-z]/i", $password)) {
            echo "<script>alert('Password should contain at least one letter!')</script>";
            echo "<meta http-equiv='refresh' content='0;url=index.html'>";
            exit;
        }

        // Validate password contains at least one number
        if (!preg_match("/[0-9]/", $password)) {
            echo "<script>alert('Password should contain at least one number!')</script>";
            echo "<meta http-equiv='refresh' content='0;url=index.html'>";
            exit;
        }

        // Validate passwords match
        if ($password !== $confirm_password) {
            echo "<script>alert('Passwords do not match!')</script>";
            echo "<meta http-equiv='refresh' content='0;url=index.html'>";
            exit;
        }

        // Check if username already exists
        $sql = "SELECT * FROM user WHERE email = ?";
        $stmt = $conn->prepare($sql);
        if (!$stmt) {
            die("Error preparing statement: " . $conn->error);
        }
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result(); // fetch the result

        if ($result->num_rows > 0) {
            echo "<script>alert('Email already exists!');</script>";
            echo "<meta http-equiv='refresh' content='0;url=login.php'>";
            exit;
        }

        // Insert new user
        $query = "INSERT INTO user (username, password, email, phone_number) VALUES (?, ?, ?, ?)";
        $stmt2 = $conn->prepare($query);
        if (!$stmt2) {
            die("Error preparing statement: " . $conn->error);
        }
        $hashpass = password_hash($password, PASSWORD_DEFAULT);
        $stmt2->bind_param("ssss", $username, $hashpass, $email, $phone_number);

        if ($stmt2->execute()) {
            echo "<script>alert('Registration successful!'); window.location.href = 'login.php';</script>";
        } else {
            echo "<script>alert('Error during registration!');</script>";
            echo "Error: " . $stmt2->error;
        }

        $stmt->close();
        $stmt2->close();
    } elseif (isset($_POST['sign_in'])) {
        // Retrieve email and password from the form
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        // Check if username already exists
        $sql = "SELECT * FROM user WHERE email = ?";
        $stmt = $conn->prepare($sql);
        if (!$stmt) {
            die("Error preparing statement: " . $conn->error);
        }
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result(); // fetch the result
    
        // Check if the user exists and the password matches
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['password'])) {
                // Password is correct, set session variables if needed
                $_SESSION['user_email'] = $email;
    
                // Check user type and redirect accordingly
                if ($row['role'] == 'user') {
                    header('Location: index.html');
                } elseif ($row['role'] == 'admin') {
                    header('Location: admin.php');
                } elseif ($row['role'] == 'realtor') {
                    header('Location: realtor.php');
                }
                exit; // Stop further execution
            } else {
                // Password is incorrect
                echo "<script>alert('Incorrect password!');</script>";
                echo "<meta http-equiv='refresh' content='0;url=login.php'>";
                exit; // Stop further execution
            }
        } else {
            // User does not exist
            echo "<script>alert('User not found!');</script>";
            echo "<meta http-equiv='refresh' content='0;url=login.php'>";
            exit; // Stop further execution
        }
    
        $stmt->close();
    }
}
?>
