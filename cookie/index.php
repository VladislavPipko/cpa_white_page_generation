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

    <style>
        .policy-content{
            display:flex;
        }
        .contaier-p { 
            flex:3;
        }
    </style>
</head>
    
    <?php include '../components/header/index.php'; ?>

<body>

    <div class="content container">
        <div class="policy-content">
            <div class="contaier-p">
        <h2>Cookie Privacy Policy</h2>
         <p><strong>What information do we collect?</strong></p>
        <p>We collect information from you when you visit our site. When submitting or registering on our site, you may be asked to enter your: name or e-mail address. You may, however, visit our site anonymously.</p>
        <p><strong>What do we use your information for?</strong></p>
        <p>Any of the information we collect from you may be used in one of the following ways:</p>
        <p>-To improve our website</p>
        <p>-To improve customer service</p>
        <p><strong>How do we protect your information?</strong></p>
        <p>We implement a variety of security measures to maintain the safety of your personal information when you place an order or enter, submit, or access your personal information.</p>
        <p><strong>Cookies</strong></p>
        <p>Cookies are small files that a site or its service provider transfers to your computers hard drive through your Web browser (if you allow) that enables the sites or service providers systems to recognize your browser and capture and remember certain information</p>
        <p>We use cookies to understand and save your preferences for future visits.

</p>
        <p><strong>Online Privacy Policy Only</strong></p>
        <p>This online privacy policy applies only to information collected through our website and not to information collected offline.</p>
        <p><strong>Changes to our Privacy Policy</strong></p>
        <p>If we decide to change our privacy policy, we will post those changes on this page.</p>
        <p><strong>Are Cookies Used on the Site?</strong></p>
        <p>If you have any questions and suggestions regarding our Privacy Policy Statement, please contact us and we will get back to you very soon.

</p>
        <p><strong>CONTACT INFORMATION
</strong></p>
        <p>Mailing address: 1589 Pickens Way, Denison, TX 75020
</p>
        <p>Phone: 903-415-5784
</p>
        <p>1589 Pickens Way
</p>
        <p>Denison, TX, 75020
</p>
        <p>US</p>
       
        </div>    
        <div class="right-content" id="mini-news-template">
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
</div>
</body>

    <?php include '../components/footer/index.php'; ?>

<script src="../script/newsTemplateView.js"></script>
<script src="../script/settings.js"></script>
<script src="../script/service.js"></script>
<script src="../script/main.js"></script>

</html>