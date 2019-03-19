<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <center><?= $this->flash->output() ?></center>
        <title>Travel1 Project</title>
    </head>
    <body>
        <?= $this->getContent() ?>
    </body>

    <!-- [FOOTER]
    =============================================================================================================================-->
    <footer class="footer">
        <div class="container">
            <div class="footer-info col-md-12 text-center">
                <ul>
                    <li><a href="#">Gambia</a></li><br>
                    <li><a href="#">+905488235777</a></li><br>
                    <li><a href="#">info@centreforexcellenceconsultancy.com</a></li><br>
                </ul>
            </div>
        </div>

        <section class="sub-footer">
            <div class="container">
                <div class="copyright-text col-md-6 col-sm-6 col-xs-12">
                    <p>© <?php echo date("Y"); ?> Centre For Excellence Consultancy. All rights reserved.</p>
                </div>
                <div class="designed-by col-md-6 col-sm-6 col-xs-12">
                    <p>Developed By: <a href="http://www.technoparcsystems.com/en.php" target="_blank">TechnoParc Systems</a></p>
                </div>
            </div>
        </section>
    </footer>

    <!-- [/FOOTER]
    =============================================================================================================================-->

</html>
