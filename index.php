<?php include_once('functions.php'); ?>


<!DOCTYPE html>
<html>

    <head>
        <meta name="viewport" content="width=device-width">
        <!-- Style Guide Boilerplate Styles -->
        <link rel="stylesheet" href="css/styleguide.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body>

        <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light text-center">
          <p class="oqea-brand p-0 m-0 text-center">Oqea Style Guide</p>
        </nav>

        <div class="container">
            <h1 class="page-header pt-4">Foundation</h1>
            <?php showFoundation(); ?>
        </div>

        <div class="container">
            <h1 class="page-header">Base Styles</h1>
            <?php showMarkup('base'); ?>
        </div>

        <div class="sg-pattern-styles">
            <h1 class="page-header">Patterns<small> - Design and mark-up patterns unique to your site.</small></h1>
            <?php showMarkup('patterns'); ?>
        </div>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="js/sg-plugins.js"></script>
        <script src="js/sg-scripts.js"></script>


    </body>

</html>