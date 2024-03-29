<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wild Template</title>
    <link rel="icon" type="image/png" href="/favicon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/bulma@0.7.5/css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
<?php include("header.php") ?>


<div class="container">
    <div class="column is-12">
        <section class="hero is-info is-bold is-small">
            <div class="hero-body">
                <div class="container">
                    <?php
                    function mailcheck()
                    {
                        if (preg_match(" #^[^\W][a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\@[a-zA-Z0-9_]+(\.[a-zA-Z0-9_]+)*\.[a-zA-Z]{2,4}$# " ,$_GET['mailAdresse'])) {
                            $message = '<h1 class="title">Bonjour '.  $_GET['clientFirstname'].' '.$_GET['clientName'].' '. $_GET['mailAdresse']. ' votre
                            message a bien été envoyé </h1>';
                        }
                        elseif ($_GET['mailAdresse'] === ''){
                            $message = 'Veuillez renseigner votre adresse mail s\'il vous plait';
                        }
                        else  {
                            $message = '<h1 class="title">Veuillez saisir une adresse mail valide !</h1>';
                        }
                        return $message;
                    }

                    echo mailcheck();
                    ?>


                </div>
            </div>
        </section>
    </div>
</div>

<?php include("footer.php") ?>
</body>
</html>