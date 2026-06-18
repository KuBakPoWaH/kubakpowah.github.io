<!DOCTYPE html>
<html lang="en">
<head>
    <title>EVE Online Ops Center</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@5.3.0/dist/cyborg/bootstrap.min.css">
    <style>
        body { background-color: #060606; color: #00d4ff; }
        .card { border: 1px solid #00d4ff; background: #111; margin-bottom: 20px; }
        .btn-primary { background-color: #005f73; border: none; }
    </style>
</head>
<body class="container py-5">
    <h1 class="mb-4 text-uppercase">Project Discovery: Ops Center</h1>

    <div class="row">
        <div class="col-md-6">
            <div class="card p-3">
                <h3>Navigation & Intel</h3>
                <div class="d-grid gap-2">
                    <a href="https://evemaps.dotlan.net/" class="btn btn-primary" target="_blank">DOTLAN Maps</a>
                    <a href="https://zkillboard.com/" class="btn btn-primary" target="_blank">zKillboard</a>
                    <a href="https://evemarketer.com/" class="btn btn-primary" target="_blank">EVE Marketer</a>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card p-3">
                <h3>Mission Briefs & Files</h3>
                <ul class="list-group">
                    <?php
                    $files = array_diff(scandir('./files'), array('.', '..'));
                    foreach($files as $file) {
                        echo "<li class='list-group-item bg-transparent'><a href='./files/$file' class='text-info'>$file</a></li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
