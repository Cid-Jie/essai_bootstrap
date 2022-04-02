<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Workshop bootstrap</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <main>
      <?php include 'header.php'; ?>

      <section>
        <h2>Journey into Bootstrap classes</h2>
        <div class="all_cards">

          <div class="card" style="width: 18rem">
          <a href="card.php">
            <img
              src="images/cat.jpg"
              class="card-img-top"
              alt="..."
            /></a>
            <div class="card-body">
              <h5 class="card-title">Visit Components lake</h5>
              <p class="card-text">
                Some quick example text to build on the card title and make up
                the bulk of the card's content.
              </p>
              <a href="card.php" class="btn btn-primary">Read more</a>
            </div>
          </div>

          <div class="card" style="width: 18rem">
          <a href="card2.php">
            <img
              src="images/bee.jpg"
              class="card-img-top"
              alt="..."
            /></a>
            <div class="card-body">
              <h5 class="card-title">Facing Cascade Style Sheet</h5>
              <p class="card-text">Some quick example text.</p>
              <a href="card2.php" class="btn btn-primary">Read more</a>
            </div>
          </div>

          <div class="card" style="width: 18rem">
          <a href="card3.php">
            <img
              src="images/hare.jpg"
              class="card-img-top"
              alt="..."
            /></a>
            <div class="card-body">
              <h5 class="card-title">Contemplate Form Inputs river</h5>
              <p class="card-text">Make up the bulk of the card's content.</p>
              <a href="card3.php" class="btn btn-primary">Read more</a>
            </div>
          </div>

          <div class="card" style="width: 18rem">
          <a href="card4.php">
            <img
              src="images/blue-throat.jpg"
              class="card-img-top"
              alt="..."
            /></a>
            <div class="card-body">
              <h5 class="card-title">Enjoy Responsive Layout land</h5>
              <p class="card-text">
                Build on the card title and make up the bulk of the card's
                content.
              </p>
              <a href="card4.php" class="btn btn-primary">Read more</a>
            </div>
          </div>
          
        </div>
      </section>

      <section class="second_content">
        <h3>The CSS frameworks are very useful</h3>
        <p>Learning them comes with practice</p>
      </section>
    </main>

    <?php include 'footer.php'; ?>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
