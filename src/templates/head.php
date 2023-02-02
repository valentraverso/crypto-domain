<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="./src/js/navbar.js"></script>
    <script>
        tailwind.config = {
          theme: {
            extend: {
              colors: {
                yellow: '#F9ED69', 
                orange: '#F08A5D',
                maroon: '#B83B5E',
                purple: '#6A2C70',
              }
            }
          }
        }
      </script>
    <title><?php echo $pageTitle; ?></title>
    <link rel="icon" type="image/x-icon" href="./img/logo.png">
</head>