<html>
  <head>
  <?php include '../inc/head.php'; ?>
  </head>

  <header>
    <?php include '../inc/header.php'; ?>
  </header>

  <body>
    <?php $pageTitle = "Home"; ?>
    <h3><?php echo $pageTitle?></h3>


    <p><?php 
    use Codenixsv\CoinGeckoApi\CoinGeckoClient;
    $client = new CoinGeckoClient();
    $data = $client->ping();?>
        <h3><?php echo $data?></h3>

Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor consequuntur corrupti laudantium doloribus laborum vero accusantium rerum deserunt voluptatem dolorem, tempore temporibus magnam commodi dolore explicabo tempora eius, facilis sit.</p>
  </body>

  <footer>
   <?php 
    include ('../inc/footer.php'); 
   ?>
  </footer>
</html>
