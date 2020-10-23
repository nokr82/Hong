<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/kakao/common/config.php';
include_once HEAD;
?>
<body>
    <header class="top-header">
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
                <span class="header_text">Edit</span>
            </div>
            <div class="header_column">
                <span class="header_text">Find</span>
            </div>
            <div class="header_column">
                <span class="header_text"></span>
            </div>
        </div>
    </header>
    <main class="find">
        <section class="find_options">
            <div class="find_option">
                <i class="fas fa-user-circle fa-lg"></i>
                <span class="find_option-title">Find</span>
            </div>
            <div class="find_option">
                <i class="fas fa-qrcode fa-lg"></i>
                <span class="find_option-title">QR Code</span>
            </div>
            <div class="find_option">
                <i class="fas fa-mobile-alt fa-lg"></i>
                <span class="find_option-title">Shake</span>
            </div>
            <div class="find_option">
                <i class="far fa-envelope fa-lg"></i>
                <span class="find_option-title">Invite via SMS</span>
            </div>
        </section>
        <section class="find_recommend">
            <header class="find_recommend-header">RecommendedFriends</header>
            <div class="find_recommend-list">You have no recommended friends</div>
        </section>
    </main>
    <nav class="tab">
        <a href="index.php" class="tab-bar">
            <i class="fas fa-user-friends"></i>
            <span class="tab-bar-title">Friends</span>
        </a>
        <a href="chats.php" class="tab-bar">
            <i class="fas fa-comment"></i>
            <span class="tab-bar-title">Chats</span>
        </a>
        <a href="find.php" class="tab-bar">
            <i class="fas fa-search tab-selected"></i>
            <span class="tab-bar-title">Find</span>
        </a>
        <a href="more.php" class="tab-bar">
            <i class="fas fa-ellipsis-h"></i>
            <span class="tab-bar-title">More</span>
        </a>
    </nav>


</body>
</html>
