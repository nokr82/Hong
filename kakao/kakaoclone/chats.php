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
                <span class="header_text">Chats</span>
            </div>
            <div class="header_column">
                <span class="header_text">Chats</span>
            </div>
        </div>
    </header>
    <main class="chats">
        <div class="search-bar">
            <i class="fas fa-search"></i>
            <input type="text" placeholder="Find friends, chatss, Plus Friends">
        </div>
        <ul class="chats_list">
            <li class="chats_chat">
                <a href="chat.php">
                    <div class="chats_content">
                        <img src="../images/profile.PNG" alt="">
                        <div class="chat_preview">
                            <h3 class="chat_user">LYNN</h3>
                            <span class="chat_last-message">Hello! This is a Test Message.</span>
                        </div>
                    </div>
                    <span class="chat_last-time">
                        17:55
                    </span>
                </a>
            </li>
            <li class="chats_chat">
                <a href="chat.php">
                    <div class="chats_content">
                        <img src="../images/profile.PNG" alt="">
                        <div class="chat_preview">
                            <h3 class="chat_user">LYNN</h3>
                            <span class="chat_last-message">Hello! This is a Test Message.</span>
                        </div>
                    </div>
                    <span class="chat_last-time">
                        17:55
                    </span>
                </a>
            </li>
            <li class="chats_chat">
                <a href="chat.php">
                    <div class="chats_content">
                        <img src="../images/profile.PNG" alt="">
                        <div class="chat_preview">
                            <h3 class="chat_user">LYNN</h3>
                            <span class="chat_last-message">Hello! This is a Test Message.</span>
                        </div>
                    </div>
                    <span class="chat_last-time">
                        17:55
                    </span>
                </a>
            </li>
            <li class="chats_chat">
                <a href="chat.php">
                    <div class="chats_content">
                        <img src="../images/profile.PNG" alt="">
                        <div class="chat_preview">
                            <h3 class="chat_user">LYNN</h3>
                            <span class="chat_last-message">Hello! This is a Test Message.</span>
                        </div>
                    </div>
                    <span class="chat_last-time">
                        17:55
                    </span>
                </a>
            </li>
            <li class="chats_chat">
                <a href="chat.php">
                    <div class="chats_content">
                        <img src="../images/profile.PNG" alt="">
                        <div class="chat_preview">
                            <h3 class="chat_user">LYNN</h3>
                            <span class="chat_last-message">Hello! This is a Test Message.</span>
                        </div>
                    </div>
                    <span class="chat_last-time">
                        17:55
                    </span>
                </a>
            </li>
            <li class="chats_chat">
                <a href="chat.php">
                    <div class="chats_content">
                        <img src="../images/profile.PNG" alt="">
                        <div class="chat_preview">
                            <h3 class="chat_user">LYNN</h3>
                            <span class="chat_last-message">Hello! This is a Test Message.</span>
                        </div>
                    </div>
                    <span class="chat_last-time">
                        17:55
                    </span>
                </a>
            </li>
            <li class="chats_chat">
                <a href="chat.php">
                    <div class="chats_content">
                        <img src="../images/profile.PNG" alt="">
                        <div class="chat_preview">
                            <h3 class="chat_user">LYNN</h3>
                            <span class="chat_last-message">Hello! This is a Test Message.</span>
                        </div>
                    </div>
                    <span class="chat_last-time">
                        17:55
                    </span>
                </a>
            </li>
            <li class="chats_chat">
                <a href="chat.php">
                    <div class="chats_content">
                        <img src="../images/profile.PNG" alt="">
                        <div class="chat_preview">
                            <h3 class="chat_user">LYNN</h3>
                            <span class="chat_last-message">Hello! This is a Test Message.</span>
                        </div>
                    </div>
                    <span class="chat_last-time">
                        17:55
                    </span>
                </a>
            </li>
            <li class="chats_chat">
                <a href="chat.php">
                    <div class="chats_content">
                        <img src="../images/profile.PNG" alt="">
                        <div class="chat_preview">
                            <h3 class="chat_user">LYNN</h3>
                            <span class="chat_last-message">Hello! This is a Test Message.</span>
                        </div>
                    </div>
                    <span class="chat_last-time">
                        17:55
                    </span>
                </a>
            </li>
            <li class="chats_chat">
                <a href="chat.php">
                    <div class="chats_content">
                        <img src="../images/profile.PNG" alt="">
                        <div class="chat_preview">
                            <h3 class="chat_user">KakaoTalk</h3>
                            <span class="chat_last-message">KakaoTalk PC login.</span>
                        </div>
                    </div>
                    <span class="chat_last-time">
                        17:55
                    </span>
                </a>
            </li>
        </ul>
        <span class="chat_btn">
            <i class="fas fa-comments fa-lg"></i>
        </span>
    </main>
    <nav class="tab">
        <a href="index.php" class="tab-bar">
            <i class="fas fa-user-friends"></i>
            <span class="tab-bar-title">Friends</span>
        </a>
        <a href="chats.php" class="tab-bar">
            <i class="fas fa-comment tab-selected"></i>
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
