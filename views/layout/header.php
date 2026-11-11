<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Мій блог</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <style>
        body { font-family: sans-serif; margin: 40px; background-color: #fafafa; }
        header { text-align: center; }
    </style>
</head>
<body>
    <header>
        <h1 class="text-primary">Мій блог</h1>
        <hr>
    </header>

    <form action="index.php" method="GET" class="d-flex gap-2">
        <input type="text" name="search" class="form-control" placeholder="Пошук постів..." 
        value="<?= htmlspecialchars($_GET['search'] ?? '') ?>">
        <button type="submit" class="btn btn-outline-primary">Шукати</button>
        <?php if (!empty($_GET['search'])): ?>
            <a href="index.php" class="btn btn-outline-secondary">Скинути</a>
        <?php endif; ?>
    </form>
    <hr>