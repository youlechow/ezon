<!doctype html>
<html>
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
            background-color: #aac1d4;
        }
        .logo-container {
            height: 10vh;
        }
        .logo {
            height: 100%;
            margin-left: 10vh;
        }
        .title {
            font-size: 30px;
            margin-top: 15px;
            color: #234;
        }
        @media screen and (max-width:500px) {
            img {
            height: 7vh;
        }
        .background {
            position: absolute;
            z-index: -10;
            height: 100%;
            width: 100%;
            background-color: #aac1d4;
        }
        .logo-container {
            height: 10vh;
        }
        .logo {
            height: 100%;
            margin-left: 5vh;
        }
        .title {
            font-size: 18px;
            margin-top: 15px;
            color: #234;
        }
        }
    </style>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    
    <!-- background -->
    <div class="background"></div>

    <!-- logo -->
    <div class="position-relative logo-container">
        <a href="../live/healthcare">
            <img src="{{ asset('images/logo_transparent.png') }}" alt="Ezon" class="position-absolute top-0 start-0 translate-middle-x logo">
        </a>
        <div class="position-absolute top-0 start-50 translate-middle-x title">
            <strong>Webinar 线上研讨会</strong>
        </div>
    </div>

    <div class="container">
        <form action="{{ route('record') }}" method="POST">
            @csrf
            <fieldset>
                <div class="mb-3">
                    <label for="seminar" class="form-label">讲座主题</label>
                    <input type="text" class="form-control" id="seminar" name="seminar" value="{{ $id == 'healthcare' ? '养生排毒新科技  天天光疗万症可调' : $id }}" readonly>
                </div>
            </fieldset>
            <div class="mb-3">
                <label for="chineseName" class="form-label">姓名 (中)</label>
                <input type="text" class="form-control" id="chineseName" name="chineseName" required>
            </div>
            <div class="mb-3">
                <label for="englishName" class="form-label">Name （英）</label>
                <input type="text" class="form-control" id="englishName" name="englishName" required>
            </div>
            <div class="mb-3">
                <label for="contactNo" class="form-label">联络号码 Contact Number</label>
                <input type="number" class="form-control" id="contactNo" name="contactNo" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
