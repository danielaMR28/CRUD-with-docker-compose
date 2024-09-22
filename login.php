<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleccionar Rol</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f4f4f4;
            padding-top: 50px;
        }
        .container {
            text-align: center;
        }
        .card {
            cursor: pointer;
            transition: transform 0.3s ease;
            margin: 10px; /* Espaciado entre tarjetas */
        }
        .card:hover {
            transform: scale(1.05);
        }
        .card img {
            height: 350px; /* Altura fija */
            width: 100%; /* Ancho completo */
            object-fit: cover; /* Cubre el área sin deformar */
        }
    </style>
</head>
<body>

<div class="container">
    <h1 class="mb-5">Citas Torre Médica</h1> <!-- Título agregado -->
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card" onclick="selectRole('paciente')">
                <img src="paciente.jpeg" class="card-img-top" alt="Paciente">
                <div class="card-body">
                    <h5 class="card-title">Paciente</h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" onclick="showModal()">
                <img src="doctor.avif" class="card-img-top" alt="Doctor">
                <div class="card-body">
                    <h5 class="card-title">Doctor</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<form id="roleForm" action="index.php" method="post" style="display: none;">
    <input type="hidden" name="role" id="roleInput">
</form>

<!-- Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Iniciar Sesión - Doctor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="doctorLoginForm">
                    <div class="mb-3">
                        <label for="username" class="form-label">Usuario</label>
                        <input type="text" class="form-control" id="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="password" required>
                    </div>
                    <button type="button" class="btn btn-primary" onclick="validateLogin()">Iniciar Sesión</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function selectRole(role) {
        document.getElementById('roleInput').value = role;
        document.getElementById('roleForm').submit();
    }

    function showModal() {
        var modal = new bootstrap.Modal(document.getElementById('loginModal'));
        modal.show();
    }

    function validateLogin() {
        var username = document.getElementById('username').value;
        var password = document.getElementById('password').value;

        // Validar las credenciales
        if (username === 'admin' && password === 'admin') {
            document.getElementById('roleInput').value = 'admin';
            document.getElementById('roleForm').submit();
        } else {
            alert('Usuario o contraseña incorrectos.');
        }
    }
</script>

</body>
</html>
