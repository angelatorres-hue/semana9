<?php
// Carga dinámica de la cabecera
if (file_exists(__DIR__ . '/includes/header.php')) {
    require_once __DIR__ . '/includes/header.php';
} elseif (file_exists(__DIR__ . '/include/header.php')) {
    require_once __DIR__ . '/include/header.php';
}

// Carga dinámica de las funciones
if (file_exists(__DIR__ . '/lib/funciones.php')) {
    require_once __DIR__ . '/lib/funciones.php';
} elseif (file_exists(__DIR__ . '/funciones.php')) {
    require_once __DIR__ . '/funciones.php';
}

$resultado = null;
$lado_input = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $lado_input = filter_input(INPUT_POST, 'lado', FILTER_VALIDATE_FLOAT);
    if ($lado_input !== false && $lado_input >= 0) {
        if (function_exists('calcularSuperficieCuadrado')) {
            $resultado = calcularSuperficieCuadrado($lado_input);
        } else {
            $resultado = $lado_input * $lado_input;
        }
    }
}
?>

<!-- Card de Formulario Interactivo -->
<div class="card shadow-sm mb-4">
    <div class="card-header bg-primary text-white fw-bold">
        EJECUCIÓN EN VIVO DE LA APLICACIÓN
    </div>
    <div class="card-body">
        <p class="card-text">En esta página debe tener un formulario interactivo para ver la ejecución de la aplicación:</p>
        
        <form method="POST" action="app_caso1.php" class="row g-3">
            <div class="col-md-6">
                <label for="lado" class="form-label fw-bold">Ingrese el valor del lado (m):</label>
                <input type="number" step="0.01" class="form-control" id="lado" name="lado" value="<?php echo htmlspecialchars((string)$lado_input); ?>" placeholder="Ejemplo: 10" required>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-success fw-bold">Ejecutar y Calcular</button>
            </div>
        </form>

        <?php if ($resultado !== null): ?>
            <div class="alert alert-success mt-4 fs-5 fw-bold">
                Resultado de la Superficie: <?php echo $resultado; ?> m²
            </div>
        <?php endif; ?>
    </div>
</div>

<!-- Panel de Control / Navegación Fluida -->
<div class="d-flex justify-content-between mt-4">
    <a href="<?php echo file_exists(__DIR__ . '/caso01.php') ? 'caso01.php' : 'caso1.php'; ?>" class="btn btn-secondary fw-bold">
        &lt; LINK VOLVER A LA PÁG. ANTERIOR (CASO 1)
    </a>
    <a href="index.php" class="btn btn-primary fw-bold">
        LINK IR A LA PÁGINA PRINCIPAL (MENÚ) &gt;
    </a>
</div>

<?php 
// Carga dinámica del pie de página
if (file_exists(__DIR__ . '/includes/footer.php')) {
    require_once __DIR__ . '/includes/footer.php';
} elseif (file_exists(__DIR__ . '/include/footer.php')) {
    require_once __DIR__ . '/include/footer.php';
}
?>
