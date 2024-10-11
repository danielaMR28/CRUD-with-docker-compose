<?php
session_start();
$_SESSION['enviar']=false; 

// Conexión a la base de datos
$connect = mysqli_connect('db', 'php_docker', 'password', 'php_docker');
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservaciones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            padding: 50px 0;
        }

        h1 {
            text-align: center;
        }

        .form--container {
            width: 40%;
            padding: 20px;
            margin: 0 auto;
        }

        .info--container {
            width: 100%;
            margin-bottom: 16px;
            display: flex;
            gap: 70px;
        }

        .info-sub-container {
            width: 50%;
        }

        #patient_name {
            width: 100%;
        }
    </style>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</head>
    <body>
        <div class="container mt-5">
            <h2>Hacer una nueva reservación</h2>
            <form action="" method="post" class="mb-4">
                <!-- Nombre del huesped -->
                <div class="info--container">
                    <div class="info-sub-container">
                        <label for="guest_name" class="form-label">Nombre:</label>
                        <input type="text" id="guest_name" name="guest_name" class="form-control" required>
                    </div>

                    <div class="info-sub-container">
                        <label for="guest_lastName" class="form-label">Apellido:</label>
                        <input type="text" id="guest_lastName" name="guest_lastName" class="form-control" required>
                    </div>
                </div>
                
                <!-- Correo Electronico y telefono del huesped -->
                <div class="info--container">
                    <div class="info-sub-container">
                        <label for="guest_email" class="form-label">Correo Electrónico:</label>
                        <input type="email" id="guest_email" name="guest_email" class="form-control" required>
                    </div>

                    <div class="info-sub-container">
                        <label for="guest_phone" class="form-label">Teléfono:</label>
                        <input type="number" id="guest_phone" name="guest_phone" class="form-control" required>
                    </div>
                </div>
                
                <!-- Tipo de habitacion a seleccionar -->
                <div class="mb-3">
                    <label for="room_type" class="form-label">Tipo de Habitación (sencilla o doble):</label>
                    <input type="text" id="room_type" name="room_type" class="form-control" required>
                </div>

                <!-- Fechas deseadas por el usuario -->
                <div class="mb-3">
                    <label for="reservation_arrive_date" class="form-label">Fecha de Llegada:</label>
                    <input type="date" id="reservation_arrive_date" name="reservation_arrive_date" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="reservation_departure_date" class="form-label">Fecha de Salida:</label>
                    <input type="date" id="reservation_departure_date" name="reservation_departure_date" class="form-control" required>
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Agregar Cita</button>
            </form>
        </div>
    </body>
</html>
