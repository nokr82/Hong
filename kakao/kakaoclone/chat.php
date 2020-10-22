<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="chat-body">
    <header class="top-header top-header-chat">
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

        <div class="header_bottom chat-header-bottom">
            <div class="header_column">
                <a href="chats.php" id="chat-a">
                    <i class="fas fa-angle-left fa-lg"></i>
                </a>
            </div>
            <div class="header_column">
                <span class="header_text chat-text">LYNN</span>
            </div>
            <div class="header_column">
                <i class="fas fa-search"></i>
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </header>
    <main class="chat">
        <div class="chat_date-devider">
            <span class="chat_date-devider-text">Wednesday, August 2, 2017</span>
        </div>
        <div class="chat_message chat_message-me">
            <span class="chat_message-time">17:55</span>
            <span class="chat_message-body">Hello!! This is a test message.</span>
        </div>
        <div class="chat_message chat_message-from">
            <img src="../images/profile.PNG" alt="" class="chat_message-profile-img">
            <div class="chat_message-profile">
                <h3 class="chat_message-name">LYNN</h3>
                <span class="chat_message-body">And this is an answer</span>
            </div>
            <span class="chat_message-time">19:30</span>
        </div>
    </main>
    <div class="chat_bottom">
        <i class="fas fa-plus fa-lg"></i>
        <div class="chat_bottom-column">
            <input type="text" class="chat_chatting">
            <i class="far fa-smile-wink fa-lg"></i>
            <span class="chat_bottom-column_span">
                <i class="fas fa-microphone fa-lg"></i>
            </span>
        </div>
    </div>
    <div class="maxdang">
        <span>창을 크게해주세요</span>
    </div>
</body>
</html>
