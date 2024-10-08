<?php
$private_ip = file_get_contents('http://169.254.169.254/latest/meta-data/local-ipv4');

$instance_id = file_get_contents('http://169.254.169.254/latest/meta-data/instance-id');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valen 2nd TeraLab!</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f9;
            font-family: Arial, sans-serif;
        }
        .container {
            text-align: center;
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
            font-size: 36px;
        }
        p {
            color: #555;
            font-size: 20px;
        }
        .info {
            margin-top: 20px;
            font-size: 18px;
            color: #444;
        }
        .highlight {
            font-weight: bold;
            color: #007bff;
        }
        .footer {
            margin-top: 40px;
            font-size: 14px;
            color: #aaa;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>¡Hola TeraMundo V1.0!</h1>
        <p>Bienvenido al servidor web.</p>
        <div class="info">
            <p>Este es el servidor con ID: <span class="highlight"><?php echo $instance_id; ?></span></p>
            <p>IP privada: <span class="highlight"><?php echo $private_ip; ?></span></p>
        </div>
        <div class="footer">
            <p>Amazon EC2 - ECS Cluster</p>
        </div>
    </div>
</body>
</html>
