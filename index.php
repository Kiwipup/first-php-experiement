<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="main.css" type="text/css">

    <title>My first php exercise</title>
  </head>

  <body class="container text-center">

    <?php
    $concepts = ['find sum of array', 'find length of array', 'find absolute value of integer', 'declaring variables', 'writing functions', 'find range of values'];
    $javascript = ['.reduce()', 'array.length', 'Math.abs()', 'let, var, and const', 'function functionName()', 'must use regEx'];
    $php = ['array_sum()', 'sizeof(array) || count(array)', 'abs(num or variable)', '$variableName', 'function functionName()', 'range()'];
    $colors = ["lightyellow", "lightgreen", "lightblue", "lavender", "lightpink", "teal"];
    ?>

    <h1>My first PHP exercise</h1>
    <div class="row mt-4">
      <div class="col-4 ">
        <h3 class="border">Concepts</h3>
          <ul class="list-unstyled">

            <?php for ($i = 0; $i < sizeof($concepts); $i++) { ?>
              <li class="p-4" style="background-color: <?=$colors[$i]?>"> -- <?=$concepts[$i] ?> </li>
          <?php  } ?>

          </ul>
      </div>
      <div class="col-4 ">
        <h3 class="border">In Javascript</h3>
        <ul class="list-unstyled">

          <?php for ($i = 0; $i < sizeof($javascript); $i++) { ?>
            <li class="p-4" style="background-color: <?=$colors[$i]?>"> -- <?=$javascript[$i] ?> </li>
        <?php  } ?>

        </ul>
      </div>
      <div class="col-4 ">
        <h3 class="border">In PHP</h3>
        <ul class="list-unstyled">

          <?php for ($i = 0; $i < sizeof($php); $i++) { ?>
            <li class="p-4" style="background-color: <?=$colors[$i]?>"> -- <?=$php[$i] ?> </li>
        <?php  } ?>

        </ul>
      </div>

    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>
</html>
