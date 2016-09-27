<!DOCTYPE HTML>
<html lang = "en">
    <!-- BEGIN head -->
    <head>
        <title>Bangabani | Homepage</title>
        <!-- Meta Tags -->
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo base_url('assets/site/css/main-stylesheet.css'); ?>" />
        <link rel="stylesheet" href="<?php echo base_url('assets/site/css/style.css'); ?>" />


        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    </head>
    <!-- BEGIN body -->
    <body>
        <?= $contents ?>
    </body>


    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.welcome_text').addClass('show');
            $('img.plane').addClass('show');
            $('.btn.your_profile').css({'display': 'inline-block', 'opacity': '1'});
        })
    </script>
</html>
