<?php include 'header.php'; ?>

<?php

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = htmlspecialchars($_POST["email"]);

    $message = "Login request submitted for " . $email;
}

?>

<div class="form-wrapper">

    <div class="form-card">

        <h2>Welcome Back</h2>

        <p class="form-description">
            Enter your account details to continue.
        </p>


        <?php if ($message != ""): ?>

            <div class="success-message">
                <?php echo $message; ?>
            </div>

        <?php endif; ?>


        <form method="POST">

            <div class="input-group">

                <label>Email Address</label>

                <input
                    type="email"
                    name="email"
                    placeholder="example@email.com"
                    required
                >

            </div>


            <div class="input-group">

                <label>Password</label>

                <input
                    type="password"
                    name="password"
                    placeholder="Enter your password"
                    required
                >

            </div>


            <button type="submit">
                Login
            </button>

        </form>


        <div class="account-links">

            <a href="forgot-password.php">
                Forgot Password?
            </a>

            <span>|</span>

            <a href="register.php">
                Create Account
            </a>

        </div>

    </div>

</div>

<?php include 'footer.php'; ?>