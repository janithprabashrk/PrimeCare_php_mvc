<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/userview.css">
    <title>PrimeCare</title>
</head>

<body>
    <div class="user_view-container">
        <div class="user_view-sidemenu">
            <div class="user_view-sidemenu-logo">
                <img src="<?= ROOT ?>/assets/images/logo.png" alt="PrimeCare">
            </div>
            <div class="user_view-sidemenu-content">
                <!-- import the side bar menu items -->
                <?php require_once 'customer/customer.sidebar.php'; ?>

                <button class="secondary-btn">Logout</button>
            </div>
        </div>
        <div class="user_view-content_section">
            <div class="user_view-profile-section"></div>
            <div class="user_view-content-area">
                <!-- This is Just for make components -->
                <!-- <div class="listing"></div> -->
                <?php require_once 'profile.view.php'; ?>
            </div>
        </div>
    </div>
</body>

</html>