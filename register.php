<?php include 'header.php'; ?>

<?php

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstName = htmlspecialchars($_POST["first_name"]);
    $lastName = htmlspecialchars($_POST["last_name"]);
    $email = htmlspecialchars($_POST["email"]);

    $message = "Welcome, " . $firstName . "! Your registration was submitted successfully.";
}

?>

<div class="form-wrapper">

    <div class="form-card">

        <h2>Create Your Account</h2>

        <p class="form-description">
            Fill in the information below to register.
        </p>


        <?php if ($message != ""): ?>

            <div class="success-message">
                <?php echo $message; ?>
            </div>

        <?php endif; ?>


        <form method="POST">

            <div class="input-group">

                <label>First Name</label>

                <input
                    type="text"
                    name="first_name"
                    placeholder="Enter your first name"
                    required
                >

            </div>


            <div class="input-group">

                <label>Last Name</label>

                <input
                    type="text"
                    name="last_name"
                    placeholder="Enter your last name"
                    required
                >

            </div>


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
                    placeholder="Create a password"
                    minlength="6"
                    required
                >

            </div>


            <button type="submit">
                Register
            </button>

        </form>


        <p class="bottom-text">
            Already have an account?

            <a href="login.php">
                Login here
            </a>
        </p>

    </div>

</div>

<?php include 'footer.php'; ?>