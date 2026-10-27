<?php require_once __DIR__ . '/../configu/app.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME; ?></title>
    <!-- Bootstrap 5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Prism.js CSS (Tema oscuro estilo VS Code / Okaidia) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/themes/prism-okaidia.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        pre[class*="language-"] { border-radius: 8px; max-height: 400px; }
    </style>
</head>
<body>
<div class="container py-4">
