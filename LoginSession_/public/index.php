<?php require_once '../template/header.php'; ?>
<title>Home page</title>
</head>

<body>

    <div class="container">
        <?php require_once('../template/session_check.php'); ?>
        
        
        <div class="header clearfix">
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="contacts.php">Contact</a></li>
                </ul>
            </nav>
            <h3 class="text-muted">PHP Login exercise - Home page</h3>
        </div>

        <div class="mainarea">
            <h1>Title</h1>
            <p class="lead">This is where we will put the logout button</p>

            <form action="logout.php" method="post" name="Logout_Form" class="form-signin">
                <button name="Submit" value="Logout" class="button" type="submit">Log out</button>
            </form>
        </div>

        <div class="row marketing">
            <div>
                <h4>Home page</h4>
                <p>Some text here</p>
            </div>
        </div>
    </div>

    <?php require_once '../template/footer.php'; ?>

