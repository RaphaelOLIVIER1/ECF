<?php
include_once "../php/config.php";
$sql_matin = mysqli_query($conn, 'SELECT * FROM horraire_matin');
$sql_soir = mysqli_query($conn, 'SELECT * FROM horraire_soir');
$row = mysqli_fetch_assoc($sql_matin);
$row2 = mysqli_fetch_assoc($sql_soir);
?>

<footer class=" bg-dark text-light text-center">
    <!-- Grid container -->
    <div class="container p-4">
        <table id="horraire" class="display text-light">
            <thead>
                <tr>
                    <th>jour</th>
                    <th>matin</th>
                    <th>après-midi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="col">Lundi</td>
                    <td scope="col"><?php echo $row['lundi'] ?></td>
                    <td scope="col"><?php echo $row2['lundi'] ?></td>
                </tr>
                <tr>
                    <td scope="col">Mardi</td>
                    <td scope="col"><?php echo $row['mardi'] ?></td>
                    <td scope="col"><?php echo $row2['mardi'] ?></td>
                </tr>
                <tr>
                    <td scope="col">Mercredi</td>
                    <td scope="col"><?php echo $row['mercredi'] ?></td>
                    <td scope="col"><?php echo $row2['mercredi'] ?></td>
                </tr>
                <tr>
                    <td scope="col">Jeudi</td>
                    <td scope="col"><?php echo $row['jeudi'] ?></td>
                    <td scope="col"><?php echo $row2['jeudi'] ?></td>
                </tr>
                <tr>
                    <td scope="col">Vendredi</td>
                    <td scope="col"><?php echo $row['vendredi'] ?></td>
                    <td scope="col"><?php echo $row2['vendredi'] ?></td>
                </tr>
                <tr>
                    <td scope="col">Samedi</td>
                    <td scope="col"><?php echo $row['samedi'] ?></td>
                    <td scope="col"><?php echo $row2['samedi'] ?></td>
                </tr>
                <tr>
                    <td scope="col">Dimanche</td>
                    <td scope="col">fermer</td>
                    <td scope="col">fermer</td>
                </tr>
            </tbody>
        </table>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js" integrity="sha512-57oZ/vW8ANMjR/KQ6Be9v/+/h6bq9/l3f0Oc7vn6qMqyhvPd1cvKBRWWpzu0QoneImqr2SkmO4MSqU+RpHom3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>