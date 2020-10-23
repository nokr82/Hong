<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/kakao/common/config.php';
include_once HEAD;
?>
<body>
    <header class="top-header top-header_transparent">
        <div class="header_top">
            <div class="header_column">
                <!-- airplane icon-->
                <i class="fas fa-plane"></i>
                <!-- wifi icon -->
                <i class="fas fa-wifi"></i>
            </div>
            <div class="header_column">
                <!-- time -->
                <span class="header_time">18:38</span>
            </div>
            <div class="header_column">
                <!-- moon -->
                <i class="fas fa-moon"></i>

                <!-- bluetooth -->
                <i class="fab fa-bluetooth-b"></i>

                <!-- battery -->
                <span class="header_battery">66%
                    <!-- battery icon-->
                <i class="fas fa-battery-three-quarters"></i>
                </span>
            </div>
        </div>
        <div class="header_bottom">
            <div class="header_column">
                <a href="index.php">
                    <i class="fas fa-times fa-lg"></i>
                </a>
            </div>
            <div class="header_column">

            </div>
            <div class="header_column">
                <i class="fas fa-user fa-lg"></i>
            </div>
        </div>
    </header>
    <main class="profile">
        <header class="profile_header">
            <div class="profile_header-container">
                <img src="../images/profile.PNG" alt="" class="profile_header">
                <span class="profile_header-title">Nicolas</span>
            </div>
        </header>
        <input type="text" placeholder="itnico.las.me@gmail.com">
        <div class="profile_actions">
            <div class="profile_action">
                <span class="profile_action-circle">
                    <i class="fas fa-comment fa-lg"></i>
                </span>
                <span class="profile_action-title">My Chatroom</span>
            </div>
            <div class="profile_action">
                <span class="profile_action-circle">
                    <i class="fas fa-pencil-alt fa-lg"></i>
                </span>
                <span class="profile_action-title">Edit Profile</span>
            </div>
        </div>
    </main>


</body>
</html>
