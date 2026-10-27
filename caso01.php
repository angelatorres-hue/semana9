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

$lado = 10;
$area = function_exists('calcularSuperficieCuadrado') ? calcularSuperficieCuadrado($lado) : ($lado * $lado);
?>

<div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="fw-bold">CASO 1: Superficie del Cuadrado</h2>
    <a href="index.php" class="btn btn-secondary fw-bold">VOLVER Pág. PRINCIPAL</a>
</div>

<!-- Enunciado -->
<div class="card mb-4 border-secondary">
    <div class="card-header bg-light fw-bold">ENUNCIADO:</div>
    <div class="card-body">
        Calcular la superficie del cuadrado dado el valor de uno de sus lados de <?php echo $lado; ?> metros.
    </div>
</div>

<div class="row">
    <!-- Visualizador de Código estilo VS Code -->
    <div class="col-md-7">
        <div class="card shadow-sm mb-3">
            <div class="card-header bg-secondary text-white fw-bold">
                VISUALIZACIÓN DE CÓDIGOS (PHP)
            </div>
            <div class="card-body p-0">
<pre class="m-0"><code class="language-php">&lt;?php
// Muestra la superficie del cuadrado
// aplicando valores

function calcularSuperficieCuadrado($lado) {
    $area = $lado * $lado;
    return $area;
}

$lado = 10;
$area = calcularSuperficieCuadrado($lado);

// Result
return $area;
?&gt;</code></pre>
            </div>
        </div>
    </div>

    <!-- Área de Resultados -->
    <div class="col-md-5">
        <div class="card shadow-sm mb-3">
            <div class="card-header bg-light fw-bold">
                ÁREA DE RESULTADOS (Cálculo de Área)
            </div>
            <div class="card-body text-center">
                <table class="table table-bordered align-middle">
                    <tbody>
                        <tr><td>0.01</td><td>100 m²</td></tr>
                        <tr><td>0.02</td><td>100 m²</td></tr>
                        <tr><td>0.03</td><td>100 m²</td></tr>
                        <tr><td>0.04</td><td>100 m²</td></tr>
                        <tr><td>0.05</td><td>100 m²</td></tr>
                        <tr><td>0.06</td><td>30 m²</td></tr>
                        <tr><td>0.07</td><td>0 m²</td></tr>
                    </tbody>
                </table>
                <hr>
                <h4 class="fw-bold my-3">Área Calculada: <?php echo $area; ?> m²</h4>
            </div>
        </div>
    </div>
</div>

<!-- Botón de acceso a Aplicación -->
<div class="d-grid gap-2 mt-2">
    <a href="app_caso1.php" class="btn btn-primary btn-lg fw-bold">ACCEDER A LA APLICACIÓN (PÁG. 3)</a>
</div>

<?php 
// Carga dinámica del pie de página
if (file_exists(__DIR__ . '/includes/footer.php')) {
    require_once __DIR__ . '/includes/footer.php';
} elseif (file_exists(__DIR__ . '/include/footer.php')) {
    require_once __DIR__ . '/include/footer.php';
}
?>