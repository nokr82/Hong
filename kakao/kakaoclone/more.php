<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/kakao/common/config.php';
include_once HEAD;
?>
<body class="more_body">
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
            </div>
            <div class="header_column">
                <span class="header_text">More</span>
            </div>
            <div class="header_column"><i class="fas fa-cog fa-lg"></i></div>
        </div>
    </header>
    <main class="more">
        <section class="more_profile">
            <div class="more_profile-row">
                <img src="../images/profile.PNG" class="more_profile-img">
                <div class="more_profile-column">
                    <h3 class="more_profime-name">Nicolas</h3>
                    <span class="more_profile-message">itnico.las.me@gmail.com</span>
                </div>
            </div>
            <div class="more_profile-plusIco">
                <i class="far fa-comment-alt fa-2x"></i>
            </div>
        </section>

        <section class="more_options">
            <div class="more_option">
                <i class="fas fa-comment-medical fa-2x"></i>
                <span class="more_option-title">Emoticons</span>
            </div>
            <div class="more_option">
                <i class="fas fa-paint-brush fa-2x"></i>
                <span class="more_option-title">Themes</span>
            </div>
            <div class="more_option">
                <i class="fab fa-pinterest fa-2x"></i>
                <span class="more_option-title">Plus-Friend</span>
            </div>
            <div class="more_option">
                <i class="fas fa-network-wired fa-2x"></i>
                <span class="more_option-title">Account</span>
            </div>
        </section>

        <section class="more_plus">
            <header class="more_plus-Header">
                <h2 class="more_plus-left">Plus Friends</h2>
                <div class="more_plus-right">
                    <i class="fas fa-info-circle"></i>
                    <span class="more_plus-learnMore">Learn More</span>
                </div>
            </header>
            <nav class="more_plus-links">
                <div class="more_plus-link">
                    <i class="fas fa-utensils"></i>
                    <span class="more_plus-title">Order</span>
                </div>
                <div class="more_plus-link">
                    <i class="fas fa-home"></i>
                    <span class="more_plus-title">Store</span>
                </div>
                <div class="more_plus-link">
                    <i class="fas fa-tv"></i>
                    <span class="more_plus-title">Tv Channel/Radio...</span>
                </div>
                <div class="more_plus-link">
                    <i class="fas fa-pencil-alt"></i>
                    <span class="more_plus-title">creation</span>
                </div>
                <div class="more_plus-link">
                    <i class="fas fa-box-open"></i>
                    <span class="more_plus-title">Education</span>
                </div>
                <div class="more_plus-link">
                    <i class="fab fa-fort-awesome"></i>
                    <span class="more_plus-title">Politics/Society</span>
                </div>
                <div class="more_plus-link">
                    <i class="fas fa-hand-holding-usd"></i>
                    <span class="more_plus-title">Finance</span>
                </div>
                <div class="more_plus-link">
                    <i class="fas fa-video"></i>
                    <span class="more_plus-title">Movies/Music</span>
                </div>
            </nav>
        </section>

        <section class="more_kakao-apps">
            <div class="more_kakao-app">
                <img src="../images/kakao1.PNG" class="more_kakao-app-images">
                <span class="more_kakao-app-title">kakao Story</span>
            </div>
            <div class="more_kakao-app">
                <img src="../images/kakao2.PNG" class="more_kakao-app-images">
                <span class="more_kakao-app-title">Path</span>
            </div>
            <div class="more_kakao-app">
                <img src="../images/kakao3.PNG" class="more_kakao-app-images">
                <span class="more_kakao-app-title">kakao Friends</span>
            </div>
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
            <i class="fas fa-search"></i>
            <span class="tab-bar-title">Find</span>
        </a>
        <a href="more.php" class="tab-bar tab-selected">
            <i class="fas fa-ellipsis-h"></i>
            <span class="tab-bar-title">More</span>
        </a>
    </nav>

</body>
</html>
