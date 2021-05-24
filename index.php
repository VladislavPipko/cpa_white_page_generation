<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News about</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/mobile.css">

</head>
    
    <?php include './components/header/index.php'; ?>

<body>

    <div class="content container">
    <div class="main-content" id="news-template">
        
    </div>
    
    <div class="right-content" id="mini-news-template">
    <div class="search-form">
            <input type="text" id="search" placeholder="search...">
            <button style="border:0; margin-top: 10px" onclick="setNewSearch()">start searching!</button>
        </div>
        <div class="tag-template">
            <button onclick="setNew('sport')">#sport</button>
            <button onclick="setNew('bitcoin')">#bitcoin</button>
            <button onclick="setNew('buisness')">#buisness</button>
            <button onclick="setNew('news')">#news</button>
            <button onclick="setNew('eat')">#eat</button>
            <button onclick="setNew('animals')">#animals</button>
            <button onclick="setNew('cats')">#cats</button>
            <button onclick="setNew('cnn')">#cnn</button>
            <button onclick="setNew('phones')">#phones</button>
        </div>

        <div class="theme-title" id="theme-title">
        </div>

    </div> 
    </div>

</body>

    <?php include './components/footer/index.php'; ?>

<script src="./script/newsTemplateView.js"></script>
<script src="./script/settings.js"></script>
<script src="./script/service.js"></script>
<script src="./script/main.js"></script>

</html>