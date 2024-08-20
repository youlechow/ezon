<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Webinar 线上研讨会</title>
    <link rel="icon" href="/images/logo_transparent.ico">
    <style>/* desktop */
    #background-video {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 66vh; /* 设置高度为视口高度的50% */
        object-fit: fill; /* 强制视频填充整个元素 */
        z-index: -1; /* 确保视频在内容的后面 */
        opacity: 0.7;
    }
        .desktop .header {
            height: 6vh;
            position: relative;
            text-align: center;
        }
        .desktop .title {
            font-size: 32px;
            color: #234;
        }
        .desktop img.background {
            position: absolute;
            z-index: -1;
            width: 100%;
            opacity: 0.7;
        }
        .desktop .background {
            height: 50%;
        }
        .desktop .back {
            padding: 25px;
            margin-top: -20px;
            font-size: 20px;
        }
        .desktop .content-1 { 
            text-align:center;
            font-size: 36px;
            color: #FF7400;
        }
        .desktop .content-1 strong span.red {
            color: red;
        }
        .desktop .content-1 strong span.gray {
            color: #51A8F9;
        }
        .desktop .content-1 strong span.blue {
            color: blue;
        }
        .desktop .signup-button {
            border: none;
            border-radius: 20px;
            width: 40vh;
            background: #FF7400;
            color: white;
            z-index: -999;
            font-size:30px;
            transition:transform 1.0s ease;
        }
        .desktop .signup-button:hover{
            transform:scale(1.1);
        }
        .desktop .logo-img {
            padding: 10vh;
            width: 40%;
        }
        .desktop .overlay-img {
            width: 40%;
            height: 80%;
            opacity: 0.8;
            position: absolute;
            z-index: -999;
        }
        .desktop .event-details {
            font-size: 30px;
            margin-left:10px;
            color:white;
        }
        .desktop .hide{
            opacity:0.0;
        }
        .desktop .bg-blue {
            background-color: #87E2FF;
        }
        .desktop .content-1-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 60vh;
            padding: 0 10%;
        }
        .content-1-wrapper {
            flex: 1;
            text-align: center;
        }
        .content-1-image {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .responsive-image {
            max-height: 50vh;
            margin-left: 10%;
        }
        .desktop .content-2-container {
            height: 120vh;
            width: 100%;
            position: relative;
        }
        .desktop .content-2-image {
            opacity: 0.6;
            height: 100%;
            width: 100%;
            position: absolute;
            z-index: -999;
        }
        .desktop .content-2-logo {
            float: left;
            height: 80%;
            width: 50%;
            text-align:center;
            margin-top: 10vh;
        }
        .desktop .content-2-box {
            background-color: #87E2FF;
            float: left;
            margin-top: 30vh;
            margin-left: 10vh;
            height: 50vh;
            width: 60vh;
            border-radius: 10px;
        }
        .desktop .content-2-poster{
            height:100%;
            margin-left:10%;
        }
        .desktop .content-3-container {
            height: 70vh;
            width: 100%;
        }
        .desktop .content-3-title {
            text-align: center;
            font-size: 50px;
            margin-bottom:3%;
        }
        .desktop .content-3-box {
            height: 40vh;
            width: 35vh;
            background-color: #87E2FF;
            border-radius: 10px;
            text-align: center;
        }
        .desktop .content-3-box-title {
            font-size: 40px;
            color: #FF7400;
        }
        .desktop .content-3-box-text {
            font-size: 32px;
        }
        .desktop .content-3-box-desc {
            font-size: 22px;
            color: white;
        }
        .desktop .content-4-container {
            height: 70vh;
            width: 100%;
            background-color: #87E2FF;
        }
        .desktop .content-4-left {
            width: 50%;
            height: 100%;
            float: left;
            margin-top: 10vh;
        }
        .desktop .content-4-left-title {
            font-size: 36px;
            color: white;
        }
        .desktop .content-4-left-desc {
            font-size: 30px;
            line-height: 1.8;
            color: #FF7400;
        }
        .desktop .content-4-right {
            text-align:center;
            width: 50%;
            height: 100%;
            float: left;
        }
        .desktop .content-5-container {
            height: 130vh;
            width: 100%;
        }
        .desktop .content-5-title {
            text-align: center;
            font-size: 50px;
            margin-bottom:3%;
        }
        .desktop .content-5-subtitle {
            color: #FF7400;
        }
        .desktop .content-5-box {
            height: 55vh;
            width: 50vh;
            background-color: #87E2FF;
            border-radius: 10px;
            text-align: center;
            transition: transform 0.3s ease;
        }
        .content-5-box:hover {
            transform:scale(1.2);
        }
        .desktop .content-5-box-img-top {
            margin-top: -10%;
        }
        .desktop .content-5-box-img-middle {
            height: 60%;
        }
        .desktop .content-5-box-text {
            font-size: 20px;
            color: white;
        }
        .desktop .content-7-container {
            height: 120vh;
            width: 100%;
            background-color: #87E2FF;
        }
        .desktop .content-7-header {
            text-align: center;
            font-size: 40px;
            background-color: #87E2FF;
            margin-top: 1%;
            color: #FF7400;
            width: 40%;
            height: 10vh;
        }
        .desktop .content-7-img-container {
            margin-top: 10vh;
        }
        .desktop .content-7-img {
            width: 30%;
            font-size: 30px;
        }
        .desktop .content-8-container {
            height: 70vh;
            width: 100%;
        }
        .desktop .content-8-box {
            width: 50%;
            height: 50vh;
            float: left;
            margin-top: 10vh;
            background-color: #87E2FF;
            border-radius: 20px;
            text-align: center;
        }
        .desktop .content-8-box-text {
            font-size: 26px;
            color: white;
        }
        .desktop .content-8-box-highlight {
            color: #FF7400;
        }
        .desktop .speaker{
            height:60%;
            float:right;
        }

        @media screen and (max-width: 1400px) {
            .desktop .header {
            height: 6vh;
            position: relative;
            text-align: center;
        }
        .desktop .title {
            font-size: 28px;
            color: #234;
        }
        .desktop img.background {
            position: absolute;
            z-index: -1;
            width: 100%;
            opacity: 0.7;
        }
        .desktop .background {
            height: 50%;
        }
        .desktop .back {
            padding: 25px;
            margin-top: -20px;
            font-size: 20px;
        }
        .desktop .content-1 {
            text-align: center;
            font-size: 28px;
            color: #FF7400;
        }
        .desktop .content-1 strong span.red {
            color: red;
        }
        .desktop .content-1 strong span.gray {
            color: #51A8F9;
        }
        .desktop .content-1 strong span.blue {
            color: blue;
        }
        .desktop .signup-button {
            border: none;
            border-radius: 20px;
            width: 40vh;
            background: linear-gradient(to right, #A93DCF, #FF00AE);
            color: white;
            z-index: -999;
            font-size:30px
        }
        .desktop .logo-img {
            padding: 10vh;
            width: 40%;
        }
        .desktop .overlay-img {
            width: 40%;
            height: 80%;
            opacity: 0.8;
            position: absolute;
            z-index: -999;
        }
        .desktop .event-details {
            font-size: 24px;
            margin-left:10px;
            color:white;
        }
        .desktop .hide{
            opacity:0.0;
        }
        .desktop .bg-blue {
            background-color: #87E2FF;
        }
        .desktop .content-1-container {
            height: 50vh;
        }
        .desktop .content-2-container {
            height: 120vh;
            width: 100%;
            position: relative;
        }
        .desktop .content-2-image {
            opacity: 0.6;
            height: 100%;
            width: 100%;
            position: absolute;
            z-index: -999;
        }
        .desktop .content-2-logo {
            float: left;
            height: 80%;
            width: 50%;
            text-align:center;
            margin-top: 10vh;
        }
        .desktop .content-2-box {
            background-color: #87E2FF;
            float: left;
            margin-top: 30vh;
            margin-left: 10vh;
            height: 50vh;
            width: 25%;
            border-radius: 10px;
        }
        .desktop .content-2-poster{
            height:100%;
            width:auto;
            margin-left:10%;
        }
        .desktop .content-3-container {
            height: 70vh;
            width: 100%;
        }
        .desktop .content-3-title {
            text-align: center;
            font-size: 50px;
            margin-bottom:3%;
        }
        .desktop .content-3-box {
            height: 40vh;
            width: 35vh;
            background-color: #87E2FF;
            border-radius: 10px;
            text-align: center;
        }
        .desktop .content-3-box-title {
            font-size: 36px;
            color: #FF7400;
        }
        .desktop .content-3-box-text {
            font-size: 28px;
        }
        .desktop .content-3-box-desc {
            font-size: 18px;
            color: white;
        }
        .desktop .content-4-container {
            height: 70vh;
            width: 100%;
            background-color: #87E2FF;
        }
        .desktop .content-4-left {
            width: 50%;
            height: 100%;
            float: left;
            margin-top: 10vh;
        }
        .desktop .content-4-left-title {
            font-size: 32px;
            color: white;
        }
        .desktop .content-4-left-desc {
            font-size: 26px;
            line-height: 1.8;
            color: #FF7400;
        }
        .desktop .content-4-right {
            text-align:center;
            width: 50%;
            height: 100%;
            float: left;
        }
        .desktop .content-5-container {
            height: 130vh;
            width: 100%;
        }
        .desktop .content-5-title {
            text-align: center;
            font-size: 50px;
            margin-bottom:3%;
        }
        .desktop .content-5-subtitle {
            color: #FF7400;
        }
        .desktop .content-5-box {
            height: 55vh;
            width: 50vh;
            background-color: #87E2FF;
            border-radius: 10px;
            text-align: center;
        }
        .desktop .content-5-box-img-top {
            margin-top: -10%;
        }
        .desktop .content-5-box-img-middle {
            height: 60%;
        }
        .desktop .content-5-box-text {
            font-size: 16px;
            color: white;
        }
        .desktop .content-7-container {
            height: 120vh;
            width: 100%;
            background-color: #87E2FF;
        }
        .desktop .content-7-header {
            text-align: center;
            font-size: 40px;
            background-color: #87E2FF;
            margin-top: 1%;
            color: #FF7400;
            width: 40%;
            height: 10vh;
        }
        .desktop .content-7-img-container {
            margin-top: 10vh;
        }
        .desktop .content-7-img {
            width: 40%;
            font-size: 30px;
        }
        .desktop .content-8-container {
            height: 70vh;
            width: 100%;
        }
        .desktop .content-8-box {
            width: 50%;
            height: 50vh;
            float: left;
            margin-top: 10vh;
            background-color: #87E2FF;
            border-radius: 20px;
            text-align: center;
        }
        .desktop .content-8-box-text {
            font-size: 22px;
            color: white;
        }
        .desktop .content-8-box-highlight {
            color: #FF7400;
        }
        .desktop .speaker{
            height:100%;
        }
        }
    </style>
    <style>/* mobile */
    .mobile .header {
            height: 6vh;
            position: relative;
            text-align: center;
        }
        .mobile .title {
            font-size: 20px;
            color: #234;
        }
        .mobile img.background {
            position: absolute;
            z-index: -1;
            width: 100%;
            opacity: 0.7;
        }
        .mobile .background {
            height: 50%;
        }
        .mobile .back {
            padding: 25px;
            margin-top: -20px;
            font-size: 20px;
        }
        .mobile .content-1 {
            text-align: center;
            font-size: 26px;
            color: #FF7400;
        }
        .mobile .content-1 strong span.red {
            color: red;
        }
        .mobile .content-1 strong span.gray {
            color: #51A8F9;
        }
        .mobile .content-1 strong span.blue {
            color: blue;
        }
        .mobile .signup-button {
            border: none;
            border-radius: 20px;
            width: 40vh;
            background: linear-gradient(to right, #A93DCF, #FF00AE);
            color: white;
            z-index: -999;
            font-size:28px;
        }
        .mobile .logo-img {
            padding: 10vh;
            width: 40%;
        }
        .mobile .overlay-img {
            width: 40%;
            height: 80%;
            opacity: 0.8;
            position: absolute;
            z-index: -999;
        }
        .mobile .event-details {
            font-size: 23px;
            margin-left:10px
            color:white;
            position: relative;
        }
        .mobile .hide{
            opacity:0.0;
        }
        .mobile .bg-blue {
            background-color: #87E2FF;
        }
        .mobile .content-1-container {
            height: 39vh;
            width:100%
        }
        .mobile .content-2-container {
            height: 105vh;
            width: 100%;
            position: relative;
        }
        .mobile .content-2-logo {
            float: left;
            height: 80%;
            width: 50%;
            text-align:center;
            margin-top: 10vh;
        }
        .mobile .content-2-box {
            background-color: #87E2FF;
            height: 50vh;
            width: 60vh;
            border-radius: 10px;
        }
        .mobile .content-2-poster{
            height:100%;
        }
        .mobile .content-3-container {
            height: 140vh;
            width: 100%;
            background-color: white;
        }
        .mobile .content-3-title {
            text-align: center;
            font-size: 30px;
            margin-bottom:3%;
        }
        .mobile .content-3-box {
            height: 40vh;
            width: 35vh;
            background-color: #87E2FF;
            border-radius: 10px;
            text-align: center;
        }
        .mobile .content-3-box-title {
            font-size: 40px;
            color: #FF7400;
        }
        .mobile .content-3-box-text {
            font-size: 32px;
        }
        .mobile .content-3-box-desc {
            font-size: 20px;
            color: white;
        }
        .mobile .content-4-container {
            text-align:center;
            height: 65vh;
            width: 100%;
            background-color: #87E2FF;
        }
        .mobile .content-4-left{
            text-align:center;
        }
        .mobile .content-4-left-title {
            font-size: 26px;
            color: white;
        }
        .mobile .content-4-left-desc {
            font-size: 28px;
            line-height: 1.8;
            color: #FF7400;
        }
        .mobile .content-4-right {
            width: 50%;
            height: 100%;
            float: left;
        }
        .mobile .content-5-container {
            height: 235vh;
            width: 100%;
            background-color: white;
        }
        .mobile .content-5-title {
            text-align: center;
            font-size: 30px;
            margin-bottom:3%;
        }
        .mobile .content-5-subtitle {
            color: #FF7400;
        }
        .mobile .content-5-box {
            height: 55vh;
            width: 50vh;
            background-color: #87E2FF;
            border-radius: 10px;
            text-align: center;
        }
        .mobile .content-5-box-img-top {
            margin-top: -10%;
        }
        .mobile .content-5-box-img-middle {
            height: 60%;
        }
        .mobile .content-5-box-text {
            font-size: 20px;
            color: white;
        }
        .mobile .content-7-container {
            height: 60vh;
            width: 100%;
            background-color: #87E2FF;
        }
        .mobile .content-7-header {
            text-align: center;
            font-size: 40px;
            background-color: #87E2FF;
            margin-top: 1%;
            color: #FF7400;
            height: 10vh;
        }
        .mobile .content-7-img-container {
            margin-top: 10vh;
        }
        .mobile .content-7-img {
            width: 30%;
            font-size: 30px;
        }
        .mobile .content-8-container {
            height: 70vh;
            width: 100%;
        }
        .mobile .content-8-box {
            width: 100%;
            height: 55vh;
            margin-top: 10vh;
            background-color: #87E2FF;
            border-radius: 20px;
            text-align: center;
        }
        .mobile .content-8-box-text {
            font-size: 26px;
            color: white;
        }
        .mobile .content-8-box-highlight {
            color: #FF7400;
        }
        .mobile .speaker{
            height:90%;
        }

        @media screen and (max-width:360px){
            .mobile .header {
            height: 6vh;
            position: relative;
            text-align: center;
        }
        .mobile .title {
            font-size: 18px;
            color: #234;
        }
        .mobile img.background {
            position: absolute;
            z-index: -1;
            width: 100%;
            opacity: 0.7;
        }
        .mobile .background {
            height: 50%;
        }
        .mobile .back {
            padding: 25px;
            margin-top: -20px;
            font-size: 20px;
        }
        .mobile .content-1 {
            text-align: center;
            font-size: 24px;
            color: #FF7400;
        }
        .mobile .content-1 strong span.red {
            color: red;
        }
        .mobile .content-1 strong span.gray {
            color: #51A8F9;
        }
        .mobile .content-1 strong span.blue {
            color: blue;
        }
        .mobile .signup-button {
            border: none;
            border-radius: 20px;
            width: 40vh;
            background: linear-gradient(to right, #A93DCF, #FF00AE);
            color: white;
            z-index: -999;
            font-size:28px;
        }
        .mobile .logo-img {
            padding: 10vh;
            width: 40%;
        }
        .mobile .overlay-img {
            width: 40%;
            height: 80%;
            opacity: 0.8;
            position: absolute; 
            z-index: -999;
        }
        .mobile .event-details {
            font-size: 23px;
            margin-left:10px
            color:white;
            position: relative;
        }
        .mobile .hide{
            opacity:0.0;
        }
        .mobile .bg-blue {
            background-color: #87E2FF;
        }
        .mobile .content-1-container {
            height: 34vh;
            width:100%
        }
        .mobile .content-2-container {
            height: 95vh;
            width: 100%;
            position: relative;
        }
        .mobile .content-2-logo {
            float: left;
            height: 80%;
            width: 50%;
            text-align:center;
            margin-top: 10vh;
        }
        .mobile .content-2-box {
            background-color: #87E2FF;
            height: 50vh;
            width: 60vh;
            border-radius: 10px;
        }
        .mobile .content-2-poster{
            height:100%;
        }
        .mobile .content-3-container {
            height: 140vh;
            width: 100%;
            background-color: white;
        }
        .mobile .content-3-title {
            text-align: center;
            font-size: 30px;
            margin-bottom:3%;
        }
        .mobile .content-3-box {
            height: 40vh;
            width: 35vh;
            background-color: #87E2FF;
            border-radius: 10px;
            text-align: center;
        }
        .mobile .content-3-box-title {
            font-size: 40px;
            color: #FF7400;
        }
        .mobile .content-3-box-text {
            font-size: 32px;
        }
        .mobile .content-3-box-desc {
            font-size: 20px;
            color: white;
        }
        .mobile .content-4-container {
            text-align:center;
            height: 60vh;
            width: 100%;
            background-color: #87E2FF;
        }
        .mobile .content-4-left{
            text-align:center;
        }
        .mobile .content-4-left-title {
            font-size: 24px;
            color: white;
        }
        .mobile .content-4-left-desc {
            font-size: 28px;
            line-height: 1.8;
            color: #FF7400;
        }
        .mobile .content-4-right {
            width: 50%;
            height: 100%;
            float: left;
        }
        .mobile .content-5-container {
            height: 235vh;
            width: 100%;
            background-color: white;
        }
        .mobile .content-5-title {
            text-align: center;
            font-size: 30px;
            margin-bottom:3%;
        }
        .mobile .content-5-subtitle {
            color: #FF7400;
        }
        .mobile .content-5-box {
            height: 55vh;
            width: 50vh;
            background-color: #87E2FF;
            border-radius: 10px;
            text-align: center;
        }
        .mobile .content-5-box-img-top {
            margin-top: -10%;
        }
        .mobile .content-5-box-img-middle {
            height: 60%;
        }
        .mobile .content-5-box-text {
            font-size: 20px;
            color: white;
        }
        .mobile .content-7-container {
            height: 60vh;
            width: 100%;
            background-color: #87E2FF;
        }
        .mobile .content-7-header {
            text-align: center;
            font-size: 30px;
            background-color: #87E2FF;
            margin-top: 1%;
            color: #FF7400;
            height: 10vh;
        }
        .mobile .content-7-img-container {
            margin-top: 10vh;
        }
        .mobile .content-7-img {
            width: 30%;
            font-size: 30px;
        }
        .mobile .content-8-container {
            height: 70vh;
            width: 100%;
        }
        .mobile .content-8-box {
            width: 100%;
            height: 55vh;
            margin-top: 10vh;
            background-color: #87E2FF;
            border-radius: 20px;
            text-align: center;
        }
        .mobile .content-8-box-text {
            font-size: 26px;
            color: white;
        }
        .mobile .content-8-box-highlight {
            color: #FF7400;
        }
        .mobile .speaker{
            height:90%;
        }
        }
    </style>
    <script>
        function detectDevice() {
            if (/Mobi|Android|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
                document.body.classList.add('mobile');
                document.querySelector('.desktop').style.display = 'none';
            } else {
                document.body.classList.add('desktop');
                document.querySelector('.mobile').style.display = 'none';
            }
        }

        window.onload = detectDevice;
    </script>
    
</head>
<body>
    <div class="desktop">
        <!-- Desktop layout -->
        <div class="header">
            <div class="title position-absolute top-0 start-50 translate-middle-x">
                <strong style="color:white">Webinar 线上研讨会</strong>
            </div>
        </div>

        <!-- Content 1 -->
        <div class="content-1-container">
        <video  id="background-video" src="{{asset('images/video1.mp4')}}" autoplay loop muted></video>
            <div class="content-1-wrapper">
                <div class="content-1"> 
                    <strong>                
                        养生排毒新科技
                        <br><span class="text-white text-underline">天天光疗万症可调</span>
                        <br>光疗奇迹，健康无敌！
                        <br><span class="text-white">体验天天光疗</span>
                        <br><span >排毒养生，百病自消！</span>
                        <br>
                        <a href="{{ route('signup', ['id' => 'healthcare']) }}">
                            <button class="signup-button" style="margin-top:10px">我也要报名讲座<br>快让我加入！</button>
                        </a>
                    </strong>
                </div>
            </div>
            <div class="content-1-image">
                <img src="{{asset('images/PIC-1.png')}}" alt="光疗图片" class="responsive-image">
            </div>
        </div>


        <!-- Content 2 -->
        <div class="content-2-container">
            <img src="{{asset('images/bg1.jpg')}}" alt="" class="content-2-image">   
            <div class="content-2-logo">
                <img src="{{asset('images/')}}" alt="" class="content-2-poster">
            </div>
            <div class="content-2-box shadow-lg rounded">
                <p class="event-details">
                    <br>
                    <br>平台：<a href="https://www.youtube.com/@ezonberhad3406" target="_blank" class="text-white">Ezon Berhad Youtube</a>
                    <br><span class="hide">地点：</span><a href="https://www.facebook.com/ezon.ezon.564" target="_blank" class="text-white">Ezon berhad Facebook</a>
                    <br>
                    <div class="text-center">
                        <a href="{{ route('signup', ['id' => 'healthcare']) }}">
                            <button class="signup-button ">我也要报名讲座<BR>快让我加入！</button>
                        </a>
                    </div>
                </p>    
            </div>
        </div>

        <!-- Content 3
        <div class="content-3-container">
            <img src="{{asset('images/bg.png')}}" alt="" style="position:absolute;z-index:-1;width:100%;opacity:0.7">
            <div class="content-3-title">
                <strong>你是否遇到了这些问题？</strong>
            </div>
            <div class="container">
                <div class="d-flex justify-content-evenly mt-10 ">
                    <div class="p-2">
                        <div class="content-3-box shadow-lg rounded">
                            <strong class="content-3-box-title"></strong>
                            <br><strong class="content-3-box-text"></strong>
                            <span class="content-3-box-desc">
                                <br>
                                <br>
                                <br>
                            </span>
                        </div>
                    </div>
                    <div class="p-2">
                        <div class="content-3-box shadow-lg rounded">
                            <strong class="content-3-box-title"></strong> 
                            <br><strong class="content-3-box-text"></strong>
                            <span class="content-3-box-desc">
                                <br>
                                <br>
                            </span>
                        </div>
                    </div>
                    <div class="p-2">
                        <div class="content-3-box shadow-lg rounded">
                            <strong class="content-3-box-title"></strong>
                            <br><strong class="content-3-box-text"></strong>
                            <span class="content-3-box-desc">
                                <br>
                                <br>
                                <br>
                                <br>
                                <br>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        -->
        <!-- Content 4 -->
        <div class="content-4-container">
            <div class="container">
                <div class="content-4-left">
                    <span class="content-4-left-title">来！加入这个讲座，你将会学到：</span>
                    <span class="content-4-left-desc">
                        <br>·光疗新科技
                        <br>·如何活化细胞
                        <br>·非药物治疗的可能性
                        <br>·可用资源的介绍
                        <br><strong></strong>
                    </span>
                    <div>
                        <a href="{{ route('signup', ['id' => 'healthcare']) }}">
                            <button class="signup-button ">我也要报名讲座<BR>快让我加入！</button>
                        </a>
                    </div>
                </div>
                <div class="content-4-right">
                    <img src="{{asset('images/L05_10.png')}}" alt="" style="height:60vh;margin-top:5%">
                </div>
            </div>
        </div>

        <!-- Content 5 -->
        <div class="content-5-container">
            <img src="{{asset('images/bg1.png')}}" alt="" style="position:absolute;z-index:-999;width:100%;height:130%;opacity:0.3">
            <div class="content-5-title">
                <br>
                <strong>为什么你一定要参加</strong>
                <br>
                <span class="content-5-subtitle">
                不要再因为严重疾病而放弃人生的快乐和自由！
                    <br>
                    加入我们，了解如何掌控健康，重拾幸福生活。
                </span>
            </div>
                <div class="d-flex justify-content-evenly mt-10">
                    <div class="p-2">
                        <div class="content-5-box">
                            <div>
                                <img src="{{asset('images/No1.png')}}" alt="" class="content-5-box-img-top">
                            </div>
                            <div class="content-5-box-img-middle">
                                <img src="{{asset('images/heart.png')}}" alt="" style="height:90%">
                            </div>
                            <div>
                                <strong class="content-5-box-text">预防疾病 <br>掌握健康</strong>
                            </div>
                        </div>
                    </div>
                    <div class="p-2">
                        <div class="content-5-box">
                            <div>
                                <img src="{{asset('images/No2.png')}}" alt="" class="content-5-box-img-top">
                            </div>
                            <div class="content-5-box-img-middle">
                                <img src="{{asset('images/travel.jpg')}}" alt="" style="width:80%">
                            </div>
                            <div>
                                <strong class="content-5-box-text">让自己活得更自在</strong>
                            </div>
                        </div>
                    </div>
                    <div class="p-2">
                        <div class="content-5-box">
                            <div>
                                <img src="{{asset('images/No3.png')}}" alt="" class="content-5-box-img-top">
                            </div>
                            <div class="content-5-box-img-middle">
                                <img src="{{asset('images/product2_mb.png')}}" alt="" style="height:100%">
                            </div>
                            <div>
                                <strong class="content-5-box-text">教会你如何使用“光" <br>来确保你 99%掌握自己的健康</strong>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-evenly" style="margin-top:5vh">
                    <div class="p-2">
                        <a href="{{ route('signup', ['id' => 'healthcare']) }}">
                                <button class="signup-button ">我也要报名讲座<BR>快让我加入！</button>
                        </a>
                    </div>
                </div>
        </div>

        <!-- Content 7 -->
        <div class="content-7-container">
            <div class="d-flex justify-content-evenly">
                <div class="content-7-header">
                    大家好 我是Ikaxa
                </div>
            </div>
            <div class="container">
                <div class="d-flex justify-content-center content-7-img-container">
                    <div class="p-2">
                        <img src="{{asset('images/IKAXA_f.png')}}" alt="" class="speaker">
                    </div>
                    <div class="p-2 content-7-img">
                        <br>
                        <br>
                        <br>-马来西亚十大杰出成就奖
                        <br><span style="color:#FF7400">-台湾公益金奖</span>
                        <br>-国际诚信企业金剑奖
                        <br><span style="color:#FF7400">-LAE 能量转导师</span>
                        <br>-排毒新人王
                    </div>
                </div>
            </div>
        </div>

        <!-- Content 8 -->
        <div class="content-8-container">
            <div class="d-flex justify-content-center">
                <div class="content-8-box" style="align-content:center" >
                    <div class="content-8-box-text" >
                        <strong class="content-8-box-highlight">马上领取你的免费位子！</strong>
                        <br>我们将一步步教你如何预防疾病
                        <br>让你重新找回健康
                        <br>不再承受病痛的折磨
                        <br>享受越活越快乐的生活！
                        <br><strong class="content-8-box-highlight">我们不见不散！</strong>
                    </div>
                    <div class="p-20">
                        <a href="{{ route('signup', ['id' => 'healthcare']) }}">
                            <button class="signup-button ">我也要报名讲座<BR>快让我加入！</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mobile">
        <!-- Mobile layout -->
        <div class="header">
            <div class="title position-absolute top-0 start-50 translate-middle-x">
                <strong>Webinar 线上研讨会</strong>
            </div>
        </div>

        <!-- Content 1 -->
        <div class="content-1-container bg-blue">
            <div class="content-1">
                <strong>
                        养生排毒新科技
                        <br><span class="text-white text-underline">天天光疗万症可调</span>
                        <br>光疗奇迹，健康无敌！
                        <br><span class="text-white">体验天天光疗</span>
                        <br><span >排毒养生，百病自消！</span>
                    <br>
                    <a href="{{ route('signup', ['id' => 'healthcare']) }}">
                        <button class="signup-button">我也要报名讲座<BR>快让我加入！</button>
                    </a>
                </strong>
            </div>
        </div>

        <!-- Content 2 -->
        <div class="content-2-container">
            <img src="{{asset('images/.jpg')}}" alt="" style="width:100%;padding:10px">
            <div style="height:30vh;width:100%;background:#87E2FF">
            <p class="event-details">
                    <br>平台：<a href="https://www.youtube.com/@ezonberhad3406" target="_blank" class="text-white">Ezon Berhad Youtube</a>
                    <br><span class="hide">地点：</span><a href="https://www.facebook.com/ezon.ezon.564" target="_blank" class="text-white">Ezon berhad Facebook</a>
                    <br>
                    <div class="text-center">
                        <a href="{{ route('signup', ['id' => 'healthcare']) }}">
                            <button class="signup-button ">我也要报名讲座<BR>快让我加入！</button>
                        </a>
                    </div>
                </p>
            </div>
        </div>

        <!-- Content 3 
        <div class="content-3-container">
            <div class="content-3-title">
                <strong>你是否遇到了这些问题？</strong>
            </div>
            <div class="container">
                <div class="d-flex justify-content-evenly mt-10 flex-wrap">
                    <div class="p-2">
                        <div class="content-3-box">
                            <strong class="content-3-box-title">问题1</strong>
                            <br><strong class="content-3-box-text">高血压</strong>
                            <span class="content-3-box-desc">
                                <br>循环系统内
                                <br>血压高于正常
                                <br>大于等于
                                <br>140/90毫米汞柱
                            </span>
                        </div>
                    </div>
                    <div class="p-2">
                        <div class="content-3-box">
                            <strong class="content-3-box-title">问题2</strong>
                            <br><strong class="content-3-box-text">高血糖</strong>
                            <span class="content-3-box-desc">
                                <br>血液中葡萄糖含量
                                <br>高于正常值
                            </span>
                        </div>
                    </div>
                    <div class="p-2">
                        <div class="content-3-box">
                            <strong class="content-3-box-title">问题3</strong>
                            <br><strong class="content-3-box-text">高血脂</strong>
                            <span class="content-3-box-desc">
                                <br>血中胆固醇过高
                                <br>或
                                <br>甘油三酯过高
                                <br>或
                                <br>高密度脂蛋白胆固醇过低
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        -->

        <!-- Content 4 -->
        <div class="content-4-container">
            <div class="container">
                <div class="content-4-left">
                    <span class="content-4-left-title">来！ 在这个讲座里你将会学到</span>
                    <span class="content-4-left-desc">
                        <br>·光疗新科技
                        <br>·如何活化细胞
                        <br>·非药物治疗的可能性
                        <br>·可用资源的介绍
                    </span>
                    <div>
                        <a href="{{ route('signup', ['id' => 'healthcare']) }}">
                            <button class="signup-button ">我也要报名讲座<BR>快让我加入！</button>
                        </a>
                    </div>
                </div>
                <div class="content-4-right">
                    
                </div>
            </div>
        </div>

        <!-- Content 5 -->
        <div class="content-5-container">
            <div class="content-5-title">
                <br>
                <strong>为什么你一定要参加</strong>
                <br>
                <span class="content-5-subtitle">
                    不要再让自己因为患上严重疾病
                    <br>
                    就这样放弃你的人生的快乐和自由
                </span>
            </div>
            <div class="container">
                <div class="d-flex justify-content-evenly mt-10 flex-wrap">
                    <div class="p-2" style="margin-top: 10%">
                        <div class="content-5-box">
                            <div>
                                <img src="{{asset('images/No1.png')}}" alt="" class="content-5-box-img-top">
                            </div>
                            <div class="content-5-box-img-middle">
                                <img src="{{asset('images/three_high.png')}}" alt="" style="height:100%">
                            </div>
                            <div>
                                <strong class="content-5-box-text">预防疾病 <br>掌握健康</strong>
                            </div>
                        </div>
                    </div>
                    <div class="p-2" style="margin-top: 10%">
                        <div class="content-5-box">
                            <div>
                                <img src="{{asset('images/No2.png')}}" alt="" class="content-5-box-img-top">
                            </div>
                            <div class="content-5-box-img-middle">
                                <img src="{{asset('images/health.jpg')}}" alt="" style="width:80%">
                            </div>
                            <div>
                                <strong class="content-5-box-text">让自己活得更自在</strong>
                            </div>
                        </div>
                    </div>
                    <div class="p-2" style="margin-top: 10%">
                        <div class="content-5-box">
                            <div>
                                <img src="{{asset('images/No3.png')}}" alt="" class="content-5-box-img-top">
                            </div>
                            <div class="content-5-box-img-middle">
                                <img src="{{asset('images/product2_mb.png')}}" alt="" style="width:80%">
                            </div>
                            <div>
                                <strong class="content-5-box-text">教会你如何使用“光" <br>来确保你 99%掌握自己的健康</strong>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-evenly">
                    <div class="p-2">
                        <a href="{{ route('signup', ['id' => 'healthcare']) }}">
                            <button class="signup-button ">我也要报名讲座<BR>快让我加入！</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content 7 -->
        <div class="content-7-container">
            <div class="d-flex justify-content-evenly">
                <div class="content-7-header">
                    大家好 我是Ikaxa
                </div>
            </div>
            <img src="{{asset('images/Ikaxa_f.png')}}" alt="" style="width:50%;float:left">
            -马来西亚十大杰出成就奖
            <br>-台湾公益金奖
            <br>-国际诚信企业金剑奖
        </div>

        <!-- Content 8 -->
        <div class="content-8-container">
            <div class="d-flex justify-content-center">
                <div class="content-8-box">
                    <div class="content-8-box-text">
                        <strong class="content-8-box-highlight">马上领取你的免费位子！</strong>想·  
                        <br>我们将一步步教你如何预防疾病
                        <br>让你重新找回健康
                        <br>不再承受病痛的折磨
                        <br>享受越活越快乐的生活！
                        <br><strong class="content-8-box-highlight">我们到时见！</strong>
                    </div>
                    <div class="p-20">
                        <a href="{{ route('signup', ['id' => 'healthcare']) }}">
                            <button class="signup-button ">我也要报名讲座<BR>快让我加入！</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
.