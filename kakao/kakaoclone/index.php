
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
                <i class="fas fa-battery-three-quarters fa-lg"></i>
                </span>
            </div>
        </div>
        <div class="header_bottom">
            <div class="header_column">
                <span class="header_text">Manage</span>
            </div>
            <div class="header_column">
                <span class="header_text">Friends <span class="header_text_number">1</span></span>
            </div>
            <div class="header_column"><i class="fas fa-cog fa-lg"></i></div>
        </div>
    </header>
    <main class="friends">
        <div class="search-bar">
            <i class="fas fa-search"></i>
            <input type="text" placeholder="Find friends, chatss, Plus Friends">
        </div>
        <section>
            <header class="friends_section-header">
                <h6 class="friends_section-title">My Profile</h6>
            </header>
            <div class="friends_section-rows" >
                <div class="friends_section-row" onclick="location.href='profile.php'">
                    <img src="../images/profile.PNG" alt="">
                    <a href="profile.php" class="friends_section-name">
                        Nicolas
                    </a>
                </div>
                <div class="friends_section-row">
                    <img src="../images/profile.PNG" alt="">
                    <span class="friends_section-name">Friends' Names Display</span>
                </div>
            </div>
        </section>
        <section>
                <header class="friends_section-header">
                    <h6 class="friends_section-title">Friends</h6>
                </header>
                <div class="friends_section-rows">
                    <div class="friends_section-row with-tagline">
                        <div class="friends_section-column">
                            <img src="../images/profile.PNG" alt="">
                            <span class="friends_section-name">LYNN</span>
                        </div>
                        <span class="friends_section-tagline">
                            Life is short. So live your life.
                        </span>
                    </div>
                </div>
        </section>
    </main>
    <nav class="tab">
        <a href="index.php" class="tab-bar tab-selected">
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
        <a href="more.php" class="tab-bar">
            <i class="fas fa-ellipsis-h"></i>
            <span class="tab-bar-title">More</span>
        </a>
    </nav>


</body>
</html>
