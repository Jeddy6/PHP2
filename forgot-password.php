<?php include 'header.php'; ?>

<?php

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = htmlspecialchars($_POST["email"]);

    $message = "A password reset link would be sent to " . $email;
}

?>

<div class="form-wrapper">

    <div class="form-card">

        <h2>Forgot Password?</h2>

        <p class="form-description">
            Enter your email address and we will help you reset your password.
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


            <button type="submit">
                Send Reset Link
            </button>

        </form>


        <p class="bottom-text">

            Remember your password?

            <a href="login.php">
                Back to Login
            </a>

        </p>

    </div>

</div>

<?php include 'footer.php'; ?>