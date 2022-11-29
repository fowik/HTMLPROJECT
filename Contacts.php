<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/nav-bar.css">
    <link rel="stylesheet" href="./css/Contact.css">
    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
    <script src="jquery.js" defer></script>
    <title>Document</title>
</head>
<body>
    <div class="wrapper">
        <?php include 'views/Nav-Bar.html'?>

        <div class="main">
        
        <form action="contact.php" method="POST" style="margin-top: 100px">
            <div class="background">
                <div class="container">
                    <div class="screen">
                        <div class="screen-header">
                            <div class="screen-header-left">
                            <div class="screen-header-button close"></div>
                            <div class="screen-header-button maximize"></div>
                            <div class="screen-header-button minimize"></div>
                        </div>
                        <div class="screen-header-right">
                            <div class="screen-header-ellipsis"></div>
                            <div class="screen-header-ellipsis"></div>
                            <div class="screen-header-ellipsis"></div>
                        </div>
                    </div>
                    <div class="screen-body">
                        <div class="screen-body-item left">
                            <div class="app-title">
                            <span>CONTACT</span>
                            <span>ME</span>
                            </div>
                            <div class="app-contact">CONTACT INFO : +371 28646683</div>
                        </div>
                        <div class="screen-body-item">
                        <div class="app-form">
                            <div class="app-form-group">
                                <input class="app-form-control" type="text" id="name" name="visitor_name" placeholder="ILYA RIMSHA">
                            </div>
                            <div class="app-form-group">
                                <input class="app-form-control" type="email" id="email" name="visitor_email" placeholder="E-MAIL">
                            </div>
                            <div class="app-form-group">
                                <input class="app-form-control" type="text" id="title" name="email_title" required placeholder="Title">
                            </div>
                            <div class="app-form-group message">
                            <textarea id="message" name="visitor_message" placeholder="Say whatever you want." required></textarea>
                            </div>
                            <div class="app-form-group buttons">
                                <button class="app-form-button">CANCEL</button>
                                <button class="app-form-button">SEND</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        </div>
    </div>

    <?php include 'views/Footer.html'?>

</body>
</html>