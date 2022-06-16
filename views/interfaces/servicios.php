<html>

<head>
    <title> UTA </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <h2>Reporte de bares</h2>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "utaestudiantes";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    $mysqli = new mysqli($servername, $username, $password, $dbname);
    if (!$mysqli) {
        die("Error en la conexión" . mysqli_connect_error());
    }

    $sql = "select * from bar";
    $respuesta = $conn->query($sql);
    $result = array();

    while ($estudiantes = $respuesta->fetch_assoc()) {
        array_push($result, $estudiantes);
    }

    ?>
    <?php if (count($result) > 0) : ?>
        <table class="table">
            <thead>
                <tr>
                    <th><?php echo implode('</th><th>', array_keys(current($result))); ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result as $row) : array_map('htmlentities', $row); ?>
                    <tr>
                        <td><?php echo implode('</td><td>', $row); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>

</body>

</html>