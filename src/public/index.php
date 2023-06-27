<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Random number generator</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
  <div class="bg-dark text-white" style="height: 100vh;">
    <div class="container">
      <h1 class="text-center">Random Number Generator</h1>
      <form name="form" method="post">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Dice to roll</label>
          <input type="text" name="rolls" class="form-control" id="exampleInputEmail1" placeholder="Enter dice to roll">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">The sides of the dice</label>
          <select class="form-select" name="type" aria-label="Default select example">
            <option selected value="4">d4</option>
            <option value="6">d6</option>
            <option value="8">d8</option>
            <option value="10">d10</option>
            <option value="12">d12</option>
            <option value="20">d20</option>
          </select>
        </div>
        <div class="text-center"><button type="submit" class="btn btn-primary">Roll</button></div>
      </form>
      <!-- Output Dice -->
      <?php
        if (isset($_POST["rolls"]) && isset($_POST["type"])):
          $rolls = (int) $_POST["rolls"];
          $type = (int)$_POST["type"];

          if($rolls < 1) {
            return;
          }

          $result = [];
          $total = 0;

          for ($i = 0; $i < $rolls; $i++) {
            $result[] = rand(0, $type);
          }

          $total = array_sum($result);
        
      ?>

      <ul>
        <li>Number of dice rolled is: <?= $rolls ?></li>
        <li>The type of dice rolled is: <?= $type ?></li>
        <li>The dice rolled: <?= implode(', ', $result) ?></li>
        <li>Your Total Score: <?= $total ?></li>
      </ul>
      <?php endif ?>

    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>