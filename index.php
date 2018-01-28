<html>
 <head>
 <title>PHP Application</title>
 </head>
 <body bgcolor=Yellow>
 <h1>Congratulations! This is production Version: CHANGEIT </h1>
        <p>Your <em>PHP</em> application is now running on kubernetes</p>
        <p>You are running PHP version <?= phpversion() ?></p>
        <p>You are running PHP on HOST: <?= gethostname() ?> </p>
 </body>
</html>

