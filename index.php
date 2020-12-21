<?php

    echo "<pre>";
        print_r($_POST);
    echo "</pre>";

    // $message_sent = false;
    //     // Submit email
    //     if (isset($_POST['submit']) && $_POST['email'] != '') {
    //         $message_sent = true;


    //         // Check the email is valid
    //         // if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {

    //         //     $email = $_POST['email'];

    //         //     $mailTo = "ownersemail@gmail.com";
    //         //     $subject = "From my website";
    //         //     $body = "New subscriber: ".$email.
        
    //         //     // mail($mailTo, $subject, $body);
    //         //     // header("Location: index.php?mailsend");
    //         // }
    //     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="assets/Favicon.svg"/>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Many users already have downloaded jQuery from Google when visiting another site. As a result, it will be loaded from cache when they visit your site, which leads to faster loading time. 
    Also, most CDN's will make sure that once a user requests a file from it, it will be served from the server closest to them, which also leads to faster loading time. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="scripts/app.js"></script>
    <title> Peregrine Communications - James-Darby - Test</title>
</head>
<body>
    <header class="header"> <!-- Start of header -->
        <nav class="navbar navbar-expand-md fixed-top container"> <!-- Start of nav -->
            <div class="nav-container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="row first-nav-row no-gutters">
                <div class="col no-gutters">
                  </div>
                  <div class="col-8 no-gutters">
                    <div>
                        <svg class="svg-logo" width="124" height="29" viewBox="0 0 124 29" xmlns="http://www.w3.org/2000/svg" alt="company logo">
                            <path class="path-logo" fill="white" fill-rule="evenodd" clip-rule="evenodd" d="M39.4856 28.0312C40.1521 28.1074 40.7075 28.1455 41.1519 28.1455C42.6626 28.1455 44.0972 27.9551 45.4556 27.5742C46.814 27.1934 48.0644 26.6633 49.207 25.9841C50.3496 25.3049 51.3811 24.5083 52.3015 23.5942C53.2219 22.6802 54.0059 21.6868 54.6533 20.614C55.3008 19.5413 55.7959 18.4177 56.1387 17.2434C56.4814 16.0691 56.6528 14.8853 56.6528 13.6919C56.6528 12.4224 56.4751 11.2004 56.1196 10.0261C55.7642 8.8518 55.2627 7.75684 54.6152 6.74121C53.9678 5.72558 53.1965 4.80518 52.3015 3.97998C51.4065 3.15478 50.4194 2.44702 49.3403 1.85669C48.2612 1.26635 47.1028 0.809328 45.865 0.485596C44.6272 0.161864 43.3482 0 42.0278 0C40.5044 0 39.0508 0.165037 37.667 0.495117C36.2832 0.825197 35.001 1.28857 33.8203 1.88525C32.6396 2.48194 31.5701 3.20556 30.6116 4.05615C29.6531 4.90674 28.8374 5.85253 28.1646 6.89355C27.4917 7.93458 26.9744 9.0581 26.6125 10.2642C26.2507 11.4702 26.0698 12.7334 26.0698 14.0537C26.0698 15.5391 26.238 16.8784 26.5745 18.0718C26.9109 19.2651 27.3616 20.3284 27.9265 21.2615C28.4915 22.1946 29.1484 23.0134 29.8975 23.718C30.6465 24.4226 31.4368 25.032 32.2683 25.5461C33.0999 26.0603 33.9473 26.4824 34.8105 26.8125C35.6738 27.1426 36.5022 27.4092 37.2957 27.6123C38.0891 27.8154 38.8191 27.9551 39.4856 28.0312ZM0.0285645 27.5933C0.0476075 27.6313 0.0888669 27.6504 0.152344 27.6504H20.2236C20.3125 27.6504 20.3887 27.6187 20.4521 27.5552C20.5156 27.4917 20.5728 27.4092 20.6235 27.3076L23.7847 21.0996C23.8228 21.0234 23.8418 20.9473 23.8418 20.8711C23.8418 20.7061 23.7339 20.6235 23.5181 20.6235C23.4038 20.6235 23.3054 20.6426 23.2229 20.6807C23.1404 20.7188 23.0674 20.7568 23.0039 20.7949C22.8643 20.9092 22.6992 21.0964 22.5088 21.3567C22.3184 21.6169 22.1025 21.9121 21.8613 22.2422C21.6201 22.5723 21.3535 22.915 21.0615 23.2705C20.7695 23.626 20.4522 23.9529 20.1094 24.2512C19.7666 24.5496 19.3953 24.7939 18.9954 24.9844C18.5955 25.1748 18.1733 25.27 17.729 25.27H11.064C10.8101 25.27 10.5815 25.1748 10.3784 24.9844C10.1753 24.7939 10.061 24.5908 10.0356 24.375V4.39893C10.0356 3.82763 10.0769 3.42456 10.1594 3.1897C10.2419 2.95483 10.4292 2.78662 10.7212 2.68506C11.1021 2.54541 11.5972 2.41846 12.2065 2.3042C12.8159 2.18994 13.4761 2.13281 14.187 2.13281H15.0059C15.0693 2.13281 15.1106 2.11377 15.1296 2.07568C15.1487 2.0376 15.1582 2.00586 15.1582 1.98047V0.952148C15.1582 0.926758 15.1487 0.89502 15.1296 0.856934C15.1106 0.818847 15.0693 0.799805 15.0059 0.799805H0.399902C0.336425 0.799805 0.295166 0.818847 0.276123 0.856934C0.25708 0.89502 0.247559 0.926758 0.247559 0.952148V1.98047C0.247559 1.99316 0.25708 2.02173 0.276123 2.06616C0.295166 2.1106 0.336425 2.13281 0.399902 2.13281H0.818848C1.07276 2.13281 1.41235 2.16455 1.83765 2.22803C2.26294 2.2915 2.68188 2.40893 3.09448 2.58032C3.50708 2.75171 3.86255 2.9834 4.16089 3.27539C4.45923 3.56738 4.6084 3.94189 4.6084 4.39893V23.4038C4.6084 23.8989 4.50049 24.3464 4.28467 24.7463C4.06885 25.1462 3.73877 25.4731 3.29443 25.7271C3.09131 25.8413 2.84375 25.9365 2.55176 26.0127C2.25976 26.0889 1.9773 26.1492 1.70435 26.1936C1.4314 26.238 1.19019 26.2698 0.980713 26.2888C0.771239 26.3079 0.647461 26.3174 0.609375 26.3174H0.152344C0.0761715 26.3174 0.0317383 26.3364 0.019043 26.3745C0.00634759 26.4126 0 26.4443 0 26.4697V27.498C0 27.5234 0.00952139 27.5552 0.0285645 27.5933ZM31.6685 13.3491C31.6685 14.3774 31.7732 15.4058 31.9827 16.4341C32.1921 17.4624 32.5 18.4526 32.9062 19.4048C33.3125 20.3569 33.814 21.2488 34.4106 22.0803C35.0073 22.9119 35.6865 23.6355 36.4482 24.2512C37.21 24.8669 38.0574 25.3494 38.9905 25.6985C39.9236 26.0476 40.936 26.2222 42.0278 26.2222C43.564 26.2222 44.897 25.8953 46.0269 25.2415C47.1567 24.5876 48.093 23.7212 48.8357 22.6421C49.5784 21.563 50.1306 20.322 50.4924 18.9192C50.8542 17.5163 51.0352 16.0659 51.0352 14.5679C51.0352 13.4761 50.9304 12.4065 50.7209 11.3591C50.5115 10.3118 50.2068 9.31519 49.8069 8.36938C49.407 7.42358 48.9119 6.55396 48.3215 5.7605C47.7312 4.96704 47.052 4.27832 46.2839 3.69434C45.5159 3.11035 44.6653 2.6565 43.7322 2.33276C42.7991 2.00903 41.7866 1.84717 40.6948 1.84717C39.7173 1.84717 38.8159 1.99951 37.9907 2.3042C37.1655 2.60889 36.4197 3.02466 35.7532 3.55151C35.0867 4.07837 34.4995 4.70678 33.9917 5.43677C33.4839 6.16675 33.0586 6.95703 32.7158 7.80762C32.373 8.65821 32.1128 9.55639 31.9351 10.5022C31.7573 11.448 31.6685 12.397 31.6685 13.3491ZM61.4517 10.3022C61.1089 11.4829 60.9375 12.7143 60.9375 13.9966C60.9375 16.1802 61.3057 18.1479 62.042 19.8999C62.7783 21.6519 63.7876 23.1404 65.0698 24.3655C66.3521 25.5906 67.8501 26.53 69.564 27.1838C71.2778 27.8377 73.1186 28.1646 75.0864 28.1646C75.8608 28.1646 76.7178 28.0947 77.6572 27.9551C78.5967 27.8154 79.5425 27.6282 80.4946 27.3933C81.4468 27.1584 82.3735 26.8887 83.2749 26.584C84.1763 26.2793 84.9824 25.9556 85.6934 25.6128C85.8711 25.5366 86.0012 25.4668 86.0837 25.4033C86.1663 25.3398 86.2075 25.2573 86.2075 25.1558V19.5952C86.2075 19.1001 86.3059 18.7097 86.5027 18.4241C86.6995 18.1384 86.9502 17.9131 87.2549 17.748C87.5596 17.583 87.8928 17.4497 88.2546 17.3481C88.6165 17.2466 88.9688 17.126 89.3115 16.9863C89.4004 16.9355 89.4575 16.8403 89.4829 16.7007C89.5083 16.561 89.521 16.4595 89.521 16.396C89.521 16.3198 89.5115 16.2087 89.4924 16.0627C89.4734 15.9167 89.4131 15.8438 89.3115 15.8438H76.0576C75.9814 15.8438 75.9275 15.9199 75.8958 16.0723C75.864 16.2246 75.8481 16.3325 75.8481 16.396C75.8481 16.4976 75.864 16.6213 75.8958 16.7673C75.9275 16.9133 75.9814 16.9863 76.0576 16.9863C77.0098 16.9863 77.7905 17.0625 78.3999 17.2148C79.0093 17.3672 79.4917 17.5894 79.8472 17.8813C80.2026 18.1733 80.447 18.532 80.5803 18.9573C80.7136 19.3826 80.7803 19.8682 80.7803 20.4141V24.6226C80.2979 25.27 79.6663 25.7048 78.8855 25.927C78.1047 26.1492 77.2002 26.2603 76.1719 26.2603C75.2578 26.2603 74.3914 26.1016 73.5725 25.7842C72.7537 25.4668 71.9919 25.0256 71.2874 24.4607C70.5828 23.8958 69.9448 23.2229 69.3735 22.4421C68.8022 21.6614 68.3167 20.8044 67.9167 19.8713C67.5168 18.9382 67.209 17.9512 66.9932 16.9102C66.7773 15.8691 66.6694 14.8091 66.6694 13.73C66.6694 12.1558 66.8186 10.6545 67.1169 9.22632C67.4153 7.79809 67.9231 6.53809 68.6404 5.44629C69.3577 4.35449 70.3066 3.48487 71.4873 2.8374C72.668 2.18994 74.1406 1.86621 75.9053 1.86621C76.9336 1.86621 77.9143 1.96142 78.8474 2.15186C79.7805 2.34229 80.6374 2.65332 81.4182 3.08496C82.199 3.5166 82.8782 4.07202 83.4558 4.75122C84.0334 5.43042 84.481 6.26513 84.7983 7.25537C84.811 7.31885 84.8428 7.41406 84.8936 7.54102C84.9443 7.66797 85.0078 7.80127 85.084 7.94092C85.1602 8.08057 85.2427 8.20752 85.3315 8.32178C85.4204 8.43604 85.522 8.49951 85.6362 8.51221C85.7251 8.51221 85.8298 8.48682 85.9504 8.43604C86.071 8.38525 86.1313 8.29004 86.1313 8.15039V1.80908C86.1313 1.70752 86.1028 1.64722 86.0457 1.62817C85.9885 1.60913 85.9473 1.59961 85.9219 1.59961H85.1602C85.0586 1.59961 84.9824 1.60913 84.9316 1.62817C84.8809 1.64722 84.8333 1.66943 84.7888 1.69482C84.7444 1.72021 84.6936 1.74243 84.6365 1.76147C84.5793 1.78052 84.5 1.79004 84.3984 1.79004H84.1699C84.1318 1.79004 83.97 1.74878 83.6843 1.66626C83.3987 1.58374 83.0305 1.479 82.5798 1.35205C82.1292 1.2251 81.6055 1.08545 81.0088 0.933105C80.4121 0.780761 79.7805 0.641114 79.114 0.51416C78.4475 0.387206 77.7651 0.282471 77.0669 0.199951C76.3687 0.117431 75.6831 0.0761719 75.0103 0.0761719C73.7534 0.0761719 72.5315 0.241209 71.3445 0.571289C70.1575 0.901369 69.0435 1.37109 68.0024 1.98047C66.9614 2.58985 66.0061 3.31665 65.1365 4.16089C64.2668 5.00513 63.521 5.94457 62.8989 6.97925C62.2769 8.01392 61.7944 9.12158 61.4517 10.3022ZM107.65 28.1455C107.206 28.1455 106.65 28.1074 105.984 28.0312C105.317 27.9551 104.587 27.8154 103.794 27.6123C103 27.4092 102.172 27.1426 101.309 26.8125C100.445 26.4824 99.5979 26.0603 98.7664 25.5461C97.9348 25.032 97.1445 24.4226 96.3955 23.718C95.6465 23.0134 94.9895 22.1946 94.4246 21.2615C93.8596 20.3284 93.4089 19.2651 93.0725 18.0718C92.7361 16.8784 92.5679 15.5391 92.5679 14.0537C92.5679 12.7334 92.7488 11.4702 93.1106 10.2642C93.4724 9.0581 93.9897 7.93458 94.6626 6.89355C95.3354 5.85253 96.1511 4.90674 97.1096 4.05615C98.0681 3.20556 99.1377 2.48194 100.318 1.88525C101.499 1.28857 102.781 0.825197 104.165 0.495117C105.549 0.165037 107.002 0 108.526 0C109.846 0 111.125 0.161864 112.363 0.485596C113.601 0.809328 114.759 1.26635 115.838 1.85669C116.917 2.44702 117.905 3.15478 118.8 3.97998C119.695 4.80518 120.466 5.72558 121.113 6.74121C121.761 7.75684 122.262 8.8518 122.618 10.0261C122.973 11.2004 123.151 12.4224 123.151 13.6919C123.151 14.8853 122.979 16.0691 122.637 17.2434C122.294 18.4177 121.799 19.5413 121.151 20.614C120.504 21.6868 119.72 22.6802 118.8 23.5942C117.879 24.5083 116.848 25.3049 115.705 25.9841C114.562 26.6633 113.312 27.1934 111.954 27.5742C110.595 27.9551 109.161 28.1455 107.65 28.1455ZM98.4807 16.4341C98.2712 15.4058 98.1665 14.3774 98.1665 13.3491C98.1665 12.397 98.2554 11.448 98.4331 10.5022C98.6108 9.55639 98.8711 8.65821 99.2139 7.80762C99.5566 6.95703 99.9819 6.16675 100.49 5.43677C100.998 4.70678 101.585 4.07837 102.251 3.55151C102.918 3.02466 103.664 2.60889 104.489 2.3042C105.314 1.99951 106.215 1.84717 107.193 1.84717C108.285 1.84717 109.297 2.00903 110.23 2.33276C111.163 2.6565 112.014 3.11035 112.782 3.69434C113.55 4.27832 114.229 4.96704 114.82 5.7605C115.41 6.55396 115.905 7.42358 116.305 8.36938C116.705 9.31519 117.01 10.3118 117.219 11.3591C117.428 12.4065 117.533 13.4761 117.533 14.5679C117.533 16.0659 117.352 17.5163 116.99 18.9192C116.629 20.322 116.076 21.563 115.334 22.6421C114.591 23.7212 113.655 24.5876 112.525 25.2415C111.395 25.8953 110.062 26.2222 108.526 26.2222C107.434 26.2222 106.422 26.0476 105.489 25.6985C104.555 25.3494 103.708 24.8669 102.946 24.2512C102.185 23.6355 101.505 22.9119 100.909 22.0803C100.312 21.2488 99.8105 20.3569 99.4043 19.4048C98.998 18.4526 98.6902 17.4624 98.4807 16.4341Z"/>
                        </svg>
                        <p class="logo-text">Name of the company lorem ipsum</p>
                    </div>
                  </div>
                  <div class="col no-gutters burger-column">
                    <button class="navbar-toggler navbar-toggler-unclicked" type="button" data-toggle="collapse" data-target="#navbarBurger" aria-controls="navbarBurger" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-burger 1"></span> 
                        <span class="navbar-burger 2"></span> 
                        <span class="navbar-burger 3"></span>
                    </button>
                  </div>
            </div>
            <div class="row no-gutters collapse navbar-collapse nav-menu-container" id="navbarBurger">
                <h3 class="menu-title">Menu</h3>
                <div class="nav-border">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#" target="_blank">
                                <span class="diamond"></span>
                                Opportunity
                            </a> 
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" target="_blank">
                                <span class="diamond"></span>
                                Strategy
                            </a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link" href="#" target="_blank">
                                <span class="diamond"></span>
                                Pipeline
                            </a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link" href="#" target="_blank">
                                <span class="diamond"></span>
                                The Team
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" target="_blank">
                                <span class="diamond"></span>
                                News and Insights
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" target="_blank">
                                <span class="diamond"></span>
                                Contact
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            </div>
            <div class="nav-footer">
                <div>
                    <a href="#" target=”_blank”>
                        <img src="assets/LINKEDIN.svg" alt="Linkedin logo">
                    </a>
                    <a href="#" target=”_blank”>
                        <img class="social-media-image" src="assets/TWITTER.svg" alt="Twitter logo">
                    </a>
                    <a href="#" target=”_blank”>
                        <img class="social-media-image" src="assets/FACEBOOK.svg" alt="Facebook logo">
                    </a>
                </div>
                <div class="nav-footer-tscs">
                    <a href="#" target=”_blank” class="terms-conditions-link">
                        <p class="terms-conditions-text">Terms & Conditions</p>
                    </a>
                    <a href="#" target=”_blank” class="terms-conditions-link">
                        <p class="terms-conditions-text">Disclaimer</p>
                    </a>
                </div>
                <div>
                    <p>Copyright © 2018 – All rights reserved.</p>
                </div>
            </div>
        </nav> <!-- End of nav -->
        <div class="header-container">
            <div class="title">
                <h1 class="text-white">Lorem ipsum dolor sit amet, consectetur.</h1>
            </div>
            <div class="scroll-button">
                <img src="assets/scroll down button.png" alt="scroll down button"/>
            </div>
        </div>
    </header> <!-- End of header -->
    <main> <!-- Start of main -->
        <section class="about"> <!-- Start of about -->
            <div class="about-section-left">
                <img class="video" src="assets/VIDEO.png" alt="Peregrine test video"/>
            </div>
            <div class="about-section-right">
                <h2 class="text-yellow">About</h2>
                <br/>
                <p class="thin medium-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <br/>
                <button class="primary-button" type="button"><img src='assets/arrow-yellow.svg' alt="yellow arrow"/> THE OPPORTUNITY</button>
            </div>
        </section> <!-- End of about -->
        <section class="overview"> <!-- Start of overview -->
            <div class="overview-text">
                <h2 class="text-green">Overview</h2>
                <p class="medium-text text-grey">Lorem ipsum dolor adispcim magna consectur et dolorem, ergos nimbuperspiciatis unde omnis iste natus error sit voluptatem:</p>
            </div>
            <div class="grid">
                <div class="grid-container">
                    <div class="grid-item">
                        <img class="grid-image" src="assets/item-one.png" alt="grid image one"/>
                        <p class="grid-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                    <div class="grid-item">
                        <img class="grid-image" src="assets/item-two.png" alt="grid image two"/>
                        <p class="grid-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                </div>
                <div class="grid-container">
                    <div class="grid-item">
                        <img class="grid-image" src="assets/item-three.png" alt="grid image three"/>
                        <p class="grid-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                    <div class="grid-item">
                        <img class="grid-image" src="assets/item-four.png" alt="grid image four"/>
                        <p class="grid-item-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                </div>
            </div>
            <button class="secondary-button grey" type="button"><img src='assets/arrow-green.svg' alt="green arrow"/> THE STRATEGY</button>
        </section> <!-- End of overview -->
        <section class="media"> <!-- Start of media -->
            <div class="square-decoration"></div>
            <div class="media-text">
                <h2 class="text-white">Media</h2>
                <p class="text-white">Lorem ipsum dolor sit amet, consectetur.</p>
            </div>
            <div class="articles-container">
                <article class="article">
                    <a class="article-link" href="#" target="_blank">
                        <div class="article-card-top">
                            <img class="article-image" src="assets/article-one.png" alt="hot geyser">
                        </div>
                        <div class="article-card-bottom">
                            <div class="article-svg">
                                <svg class="doc-svg" width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect class="doc-icon-rect" x="1.42293" y="29" width="39" height="39" transform="rotate(-45 1.42293 29)" fill="white" stroke="#008C88"/>
                                    <path class="doc-icon-stroke" fill-rule="evenodd" clip-rule="evenodd" d="M37.034 39.9015H21.5V18.5005H32.286L37.034 23.2475V39.9015Z" stroke="#00563B"/>
                                    <path class="doc-icon-stroke" d="M37.0339 23.2477H32.2859V18.4997" stroke="#00563B"/>
                                    <path class="doc-icon-stroke" d="M23.679 27.0817H34.855" stroke="#00563B"/>
                                    <path class="doc-icon-stroke" d="M23.679 30.0314H34.855" stroke="#00563B"/>
                                    <path class="doc-icon-stroke" d="M23.679 32.9816H34.855" stroke="#00563B"/>
                                    <path class="doc-icon-stroke" d="M23.679 35.9313H34.855" stroke="#00563B"/>
                                </svg>
                            </div>
                            <div class="article-title">
                                <h3 class="text-grey article-title-text">Lorem ipsum dolor sit amet consectur adipiscim</h3>
                            </div>
                            <div>
                                <p class="text-green article-date">Dec 21</p>
                            </div>
                            <div class="article-text">
                                <p class="text-grey">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test divide with clickthroughs from… </p>
                            </div>
                            <div class="read-more-div">
                                <img src='assets/arrow-turq.svg' alt="turquoise arrow"/>
                                <p class="read-more">READ MORE</p>
                            </div>
                        </div>
                    </a>
                </article>
                <article class="article">
                    <a class="article-link" href="#" target="_blank">
                        <div class="article-card-top">
                            <img class="article-image" src="assets/article-two.png" alt="hut with smoke">
                        </div>
                        <div class="article-card-bottom">
                            <div class="article-svg">
                                <svg class="doc-svg" width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect class="doc-icon-rect" x="1.42293" y="29" width="39" height="39" transform="rotate(-45 1.42293 29)" fill="white" stroke="#008C88"/>
                                    <path class="doc-icon-stroke" fill-rule="evenodd" clip-rule="evenodd" d="M37.034 39.9015H21.5V18.5005H32.286L37.034 23.2475V39.9015Z" stroke="#00563B"/>
                                    <path class="doc-icon-stroke" d="M37.0339 23.2477H32.2859V18.4997" stroke="#00563B"/>
                                    <path class="doc-icon-stroke" d="M23.679 27.0817H34.855" stroke="#00563B"/>
                                    <path class="doc-icon-stroke" d="M23.679 30.0314H34.855" stroke="#00563B"/>
                                    <path class="doc-icon-stroke" d="M23.679 32.9816H34.855" stroke="#00563B"/>
                                    <path class="doc-icon-stroke" d="M23.679 35.9313H34.855" stroke="#00563B"/>
                                </svg>
                            </div>
                            <div class="article-title">
                                <h3 class="text-grey article-title-text">Lorem ipsum dolor sit amet consectur adipiscim</h3>
                            </div>
                            <div>
                                <p class="text-green article-date">Dec 21</p>
                            </div>
                            <div class="article-text">
                                <p class="text-grey">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test divide with clickthroughs from… </p>
                            </div>
                            <div class="read-more-div">
                                <img src='assets/arrow-turq.svg' alt="turquoise arrow"/>
                                <p class="read-more">READ MORE</p>
                            </div>
                        </div>
                    </a>
                </article>
                <article class="article">
                    <a class="article-link" href="#" target="_blank">
                        <div class="article-card-top">
                            <img class="article-image" src="assets/article-three.png" alt="industrial pipes">
                        </div>
                        <div class="article-card-bottom">
                            <div class="article-svg">
                                <svg class="doc-svg" width="58" height="58" viewBox="0 0 58 58" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect class="doc-icon-rect" x="1.42293" y="29" width="39" height="39" transform="rotate(-45 1.42293 29)" fill="white" stroke="#008C88"/>
                                    <path class="doc-icon-stroke" fill-rule="evenodd" clip-rule="evenodd" d="M37.034 39.9015H21.5V18.5005H32.286L37.034 23.2475V39.9015Z" stroke="#00563B"/>
                                    <path class="doc-icon-stroke" d="M37.0339 23.2477H32.2859V18.4997" stroke="#00563B"/>
                                    <path class="doc-icon-stroke" d="M23.679 27.0817H34.855" stroke="#00563B"/>
                                    <path class="doc-icon-stroke" d="M23.679 30.0314H34.855" stroke="#00563B"/>
                                    <path class="doc-icon-stroke" d="M23.679 32.9816H34.855" stroke="#00563B"/>
                                    <path class="doc-icon-stroke" d="M23.679 35.9313H34.855" stroke="#00563B"/>
                                </svg>
                            </div>
                            <div class="article-title">
                                <h3 class="text-grey article-title-text">Lorem ipsum dolor sit amet consectur adipiscim</h3>
                            </div>
                            <div>
                                <p class="text-green article-date">Dec 21</p>
                            </div>
                            <div class="article-text">
                                <p class="text-grey">Capitalize on low hanging fruit to identify a ballpark value added activity to beta test divide with clickthroughs from… </p>
                            </div>
                            <div class="read-more-div">
                                <img src='assets/arrow-turq.svg' alt="turquoise arrow"/>
                                <p class="read-more">READ MORE</p>
                            </div>
                        </div>
                    </a>
                </article>
            </div>
            <button class="primary-button" type="button"><img src='assets/arrow-yellow.svg'  alt="yellow arrow"/> VIEW MORE</button>
        </section> <!-- End of media -->
        <footer class="footer"> <!-- Start of footer-->
            <div class="footer-top">
                <div class="email-container">
                    <h2 class="footer-title">Lorem ipsum dolor sit amet, consectetur.</h2>
                    <form class="form" method="POST" action="index.php">
                    <?php
                        if($message_sent):
                    ?>
                        <input class="newsletter-input" name="send-email" placeholder="Thanks we'll be in touch!">
                        <button class="primary-button newsletter-button" type="submit"><img src='assets/arrow-yellow.svg'  alt="yellow arrow"/> SUBSCRIBE NEWSLETTER</button>
                    <?php
                        else:
                    ?>
                        <input class="newsletter-input" name="email" placeholder="Insert your email...">
                        <button class="primary-button newsletter-button" type="submit"><img src='assets/arrow-yellow.svg'  alt="yellow arrow"/> SUBSCRIBE NEWSLETTER</button>
                    <?php
                        endif;
                    ?>
                    </form>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="terms-conditions">
                    <a href="#" target=”_blank” class="terms-conditions-link">
                        <p class="terms-conditions-text">Terms & Conditions</p>
                    </a>
                    <a href="#" target=”_blank” class="terms-conditions-link">
                        <p class="terms-conditions-text">Disclaimer</p>
                    </a>
                </div>
                <div class="logo-container-footer">
                    <img class="logo" src="assets/LOGO.svg" alt="company logo"/>
                    <p>Name of the company lorem ipsum</p>
                </div>
                <div class="social-media">
                    <div class="social-media-top">
                        <!-- I thought about using fontawesome here, but it seemed excessive -->
                        <a href="#" target=”_blank”>
                            <img src="assets/LINKEDIN.svg" alt="Linkedin logo">
                        </a>
                        <a href="#" target=”_blank”>
                            <img class="social-media-image" src="assets/TWITTER.svg" alt="Twitter logo">
                        </a>
                        <a href="#" target=”_blank”>
                            <img class="social-media-image" src="assets/FACEBOOK.svg" alt="Facebook logo">
                        </a>
                    </div>
                    <div class="social-media-bottom">
                        <p>Copyright © 2018 – All rights reserved.</p>
                    </div>
                </div>
            </div>
        </footer> <!-- End of footer -->
    </main> <!-- End of main -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>