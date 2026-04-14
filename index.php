<?php include 'persona.php'; ?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>DB Persona</title>
</head>
<body class="container mt-4">
    <div class="mb-5" style="max-width: 500px; margin: 0 auto;">
            <form method="POST">
                <input type="number" name="id" class="form-control mb-1" placeholder="ID">
                <input type="text" name="nome" class="form-control mb-1" placeholder="Nome">
                <input type="text" name="cognome" class="form-control mb-1" placeholder="Cognome">
                <input type="email" name="email" class="form-control mb-1" placeholder="Email">
                <input type="date" name="data_nascita" class="form-control mb-3">
                
                <button type="submit" name="azione" value="CREATE" class="btn btn-primary w-100 mb-2">Inserisci</button>
                <button type="submit" name="azione" value="UPDATE" class="btn btn-primary w-100 mb-2">Aggiorna</button>
                <button type="submit" name="azione" value="DELETE" class="btn btn-danger w-100 d-block mx-auto">Elimina</button>
            </form>

            <hr>

            <form method="GET" class="d-flex gap-1">
                <input type="hidden" name="azione" value="READ">
                <input type="number" name="id_ricerca" class="form-control form-control-sm" placeholder="ID...">
                <button type="submit" class="btn btn-dark btn-sm">Cerca</button>
                <a href="index.php" class="btn btn-secondary btn-sm">Reset</a>
            </form>

        <div class="col-md-8">
            <table class="table table-sm table-bordered">
                <tr class="table-light"><th>ID</th><th>Nome</th><th>Cognome</th><th>Email</th></tr>
                    <?php foreach ($risultati as $r): ?>
                    <tr>
                    <td><?= $r['id'] ?></td>
                    <td><?= $r['nome'] ?></td>
                    <td><?= $r['cognome'] ?></td>
                    <td><?= $r['email'] ?></td>
                </tr>
                    <?php endforeach; ?>
            </table>
        </div>
    </div>

</body>
</html>


