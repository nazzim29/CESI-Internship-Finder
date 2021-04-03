<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>401 - Not Authorized</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:700,900" rel="stylesheet">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="\css/error.css" />
    <link rel="manifest" href="\manifest.json">
    <link rel="apple-touch-icon" href="GHIS2-96x96.png">
  <meta name="apple-mobile-web-app-status-bar" content="white">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="theme-color" content="white">
  <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>

    <div id="notfound">
        <div class="notfound">
            <div class="notfound-404">
                <h1>401</h1>
            </div>
            <h2>NOT AUTHORIZED</h2>
            <p>This server could not verify that you are authorized to access the document requested</p>
            <a href="#">Go To Homepage</a>
        </div>
    </div>
<script>
      if ('serviceWorker' in navigator) {
        window.addEventListener('load', () => {
          navigator.serviceWorker
            .register('/sw.js')
            .then(registration => {
              console.log(`Service Worker enregistré!Ressource:${ registration.scope }`);
              })
            .catch(err => {
              console.log(`Echec de l'enregistrement du Service Worker: ${ err }`);
            });
        });
      }
    </script>
</body>

</html>