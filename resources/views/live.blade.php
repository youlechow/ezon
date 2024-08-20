<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Live</title>
    <link rel="icon" href="/images/logo_transparent.ico">
    <style>
        img {
            height: 8vh;
        }
        .background {
            position: absolute;
            z-index: -10;
            height: 100%;
            width: 100%;
            background-color: #EFFFDE;
        }
        .logo {
            height: 10vh;
        }
        .webinar-title {
            font-size: 30px;
            font-weight: bold;
            margin-left:0px;
            margin-top: 15px;
            color: #234;
        }
        .coming-soon {
            height: 8vh;
            color: #234;
            margin-left:5px;
        }
        .content-image {
            border: 1px solid black;
            border-radius: 10px;
        }
        .content-text {
            font-size: 30px;
            text-align: center;
            margin-top: 15px;
            margin-left: 15px;
        }
        .details-button {
            height: 20px;
            width: 95px;
            margin-top: 30vh;
            margin-left: -23px;
        }
        .logoImage{
            height:100%;
            margin-left:10vh;
        }
        .contentBackground{
            height:100%;
            width: auto;
            border-radius:10px;
        }
        .page{
            height:100%;
        }
        .btnContent{
            font-size:20px;
            border: 2px solid #234;
            border-radius:10px;
            padding:4px
        }
        
        @media screen and (max-width: 400px){
            img {
            height: 8vh;
        }
        .background {
            position: absolute;
            z-index: -10;
            height: 100%;
            width: 100%;
            background-color: #EFFFDE;
        }
        .logo {
            height: 7vh;
            margin-left:-20px;
        }
        .webinar-title {
            font-size: 15px;
            margin-top: 10px;
            color: #234;
        }
        .coming-soon {
            height: 5vh;
            color: #234;
        }
        .content-image {
            border: 1px solid black;
            border-radius: 10px;
        }
        .content-text {
            font-size: 5px;
            text-align: center;
            margin-top: 15px;
            margin-left: 5px;
        }
        .details-button {
            height: 5px;
            width: 60px;
            margin-top: 9vh;
            margin-left: -15px;
        }
        .logoImage{
            height:100%;
            margin-left:10vh;
        }
        .contentBackground{
            height:100%;
            width: auto;
            border-radius:10px;
        }
        .page{
            height:100%;
        }
        .btnContent{
            font-size:7px;
            border: 1px solid #234;
            border-radius:10px;
            padding:4px
        }
        .coming-text{
            font-size:15px;
        }
        }

        @media screen and (max-width: 600px){
            img {
            height: 6vh;
        }
        .background {
            position: absolute;
            z-index: -10;
            height: 100%;
            width: 100%;
            background-color: #EFFFDE;
        }
        .logo {
            height: 6vh;
            margin-left:-20px;
        }
        .webinar-title {
            font-size: 20px;
            margin-top: 10px;
            color: #234;
        }
        .coming-soon {
            height: 3vh;
            color: #234;
        }
        .content-image {
            border: 1px solid black;
            border-radius: 10px;
        }
        .content-text {
            font-size: 15px;
            text-align: center;
            margin-top: 15px;
            margin-left: 5px;
        }
        .details-button {
            height: 5px;
            width: 60px;
            margin-top: 11vh;
            margin-left: -15px;
        }
        .logoImage{
            height:100%;
            margin-left:10vh;
        }
        .contentBackground{
            height:100%;
            width: auto;
            border-radius:10px;
        }
        .page{
            height:100%;
        }
        .btnContent{
            font-size:7px;
            border: 1px solid #234;
            border-radius:10px;
            padding:4px
        }
        .coming-text{
            font-size:15px;
        }
        }
        
    </style>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <!-- Background -->
    <div class="background"></div>
    
    <!-- Logo and Title -->
    <div class="position-relative logo">
        <img src="{{ asset('images/logo_transparent.png') }}" alt="Ezon" class="position-absolute top-0 start-0 translate-middle-x logoImage" >
        <div class="position-absolute top-0 start-50 translate-middle-x webinar-title">
            <strong>Webinar 线上研讨会</strong>
        </div>
    </div>
    
    <!-- Content -->
    <div class="container page">
        <div class="position-relative coming-soon">
            <h1 class="position-absolute top-0 start-50 translate-middle-x coming-text">Coming Soon</h1>
        </div>
        <div class="vstack gap-3">
            <div class="p-2 position-relative" >
                <div class="ratio ratio-21x9 content-image">
                    <img src="{{ asset('images/1.png') }}" alt="" class="contentBackground">
                    <div class="position-absolute top-0 start-0 content-text">
                        解密<br>告别三高 <br>无药生活
                    </div>
                    <div class="position-absolute bottom-0 start-50 details-button">
                        <a href="live/healthcare" class="btnContent" tabindex="-1" role="button" >更多详情</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
