
<!DOCTYPE html>
<html>
    <head>
        <title>SIGKB</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=News+Cycle:wght@400;700&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="style2.css"/>
        <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.bootstrap5.css"/>

        
    </head>
        
    <body><br>
    <h2 align="center" style="color:white"> Data Tabular Luas Lahan Sawah Kabupaten Boalemo</h2> 
    <form action="tabular.php" method="get">
	<p align="center" style="color:white"><label></label>
	<input type="text" name="cari" size="30" autofocus placeholder="masukkan nama kecamatan..." autocomplete="off">
	<input type="submit" value="cari"></p>  
    </form>
    <?php 
    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        echo "<b style='color:white'>Hasil Pencarian : ".$cari."</b>";
    }
    ?>

    <table id="example" class="table table-success table-striped table-hover ">
    <thead>
        <tr>
            <th>No.</th>
            <th>Kecamatan</th>
            <th>Luas (Km)</th>
        </tr> 
           
    </thead>
    <tbody>
        
    <tr>
        <td>1.</td>
        <td>Bulotadaa Timur</td>
        <td>54.02598</td>
    </tr>
    <tr>
        <td>2.</td>
        <td>Dembe II</td>
        <td>24.074825</td>
    </tr>
    <tr>
        <td>3.</td>
        <td>Dembe Jaya</td>
        <td>33.784236</td>
    </tr>
    <tr>
        <td>4.</td>
        <td>Dulomo Selatan</td>
        <td>87.87612</td>
    </tr>
    <tr>
        <td>5.</td>
        <td>Dulomo Utara</td>
        <td>74.776249</td>
    </tr>
    <tr>
        <td>6.</td>
        <td>Heledulaa Utara</td>
        <td>19.49867</td>
    </tr>
    <tr>
        <td>7.</td>
        <td>Moodu</td>
        <td>36.692098</td>
    </tr>
    <tr>
        <td>8.</td>
        <td>Tanggikiki</td>
        <td>44.729115</td>
    </tr>
    <tr>
        <td>9.</td>
        <td>Wongkaditi Barat</td>
        <td>38.899443</td>
    </tr>
    <tr>
        <td>10.</td>
        <td>Wongkaditi Timur</td>
        <td>45.63856</td>
    </tr>
    </tbody>
    <tfoot>
        <tr>
            <td></td>
            <th>Total</th>
            <th>459.995296</th>
        </tr>
    </tfoot>
</table>
        <center>
            <button class="spasial"><strong><a href="index.php">
            Kembali</a></strong></button>
        </center>

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.7/js/dataTables.bootstrap5.js"></script>        

<script >
    new DataTable('#example');

</script>

    </body>
</html>