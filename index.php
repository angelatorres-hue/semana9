<?php 
// Verifica la existencia del archivo de cabecera en include o includes
if (file_exists(__DIR__ . '/includes/header.php')) {
    require_once __DIR__ . '/includes/header.php';
} elseif (file_exists(__DIR__ . '/include/header.php')) {
    require_once __DIR__ . '/include/header.php';
}
?>

<!-- Contenedor Menú Principal (Dashboard) -->
<div class="card shadow mb-4">
    <div class="card-header bg-primary text-white text-center fw-bold fs-4">
        MENÚ PRINCIPAL
    </div>
    <div class="card-body bg-light">
        <h5 class="fw-bold text-secondary mb-3">RESOLUCIÓN DE EJERCICIOS</h5>

        <!-- Caso 01 -->
        <div class="card mb-3 border-secondary">
            <div class="card-body">
                <h5 class="card-title fw-bold text-dark">CASO 01: Superficie del Cuadrado</h5>
                <p class="card-text mb-2">
                    <strong>Enunciado detallado:</strong> Calcular la superficie del cuadrado dado el valor de uno de sus lados...
                </p>
                <!-- Redirecciona dinámicamente a caso01.php o caso1.php -->
                <a href="<?php echo file_exists(__DIR__ . '/caso01.php') ? 'caso01.php' : 'caso1.php'; ?>" class="btn btn-primary btn-sm">Ver Caso Práctico</a>
            </div>
        </div>

        <!-- Caso 02 -->
        <div class="card mb-3 border-secondary">
            <div class="card-body">
                <h5 class="card-title fw-bold text-dark">CASO 02: Complex Algebra Problem Title</h5>
                <p class="card-text mb-2">
                    <strong>Enunciado detallado:</strong> Calcular la superficie del cuadrado dado el valor de uno de sus lados...
                </p>
                <button class="btn btn-secondary btn-sm" disabled>Ver Caso Práctico</button>
            </div>
        </div>

        <!-- Caso N -->
        <div class="card mb-3 border-secondary">
            <div class="card-body">
                <h5 class="card-title fw-bold text-dark">CASO N: Advanced Algorithm Challenge Title</h5>
                <p class="card-text mb-2">
                    <strong>Enunciado detallado:</strong> Calcular la superficie del cuadrado dado el valor de uno de sus lados...
                </p>
                <button class="btn btn-secondary btn-sm" disabled>Ver Caso Práctico</button>
            </div>
        </div>
    </div>
</div>

<!-- Pie de Menú: Datos del Alumno -->
<div class="card shadow">
    <div class="card-body bg-light">
        <div class="row g-3">
            <div class="col-md-4">
                <label class="form-label fw-bold">APELLIDOS Y NOMBRES:</label>
                <input type="text" class="form-control" placeholder="Sample Name">
            </div>
            <div class="col-md-4">
                <label class="form-label fw-bold">SEMESTRE:</label>
                <input type="text" class="form-control" placeholder="Sample Semester">
            </div>
            <div class="col-md-4">
                <label class="form-label fw-bold">TURNO:</label>
                <input type="text" class="form-control" placeholder="Sample Turn">
            </div>
        </div>
    </div>
</div>

<?php 
// Carga del pie de página
if (file_exists(__DIR__ . '/includes/footer.php')) {
    require_once __DIR__ . '/includes/footer.php';
} elseif (file_exists(__DIR__ . '/include/footer.php')) {
    require_once __DIR__ . '/include/footer.php';
}
?>