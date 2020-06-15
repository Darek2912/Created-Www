<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DarekRadelczuk</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:600&display=swap" rel="stylesheet">
</head>
<body>
    <div>
        <section class="container">
            <article class="row">
                <section class="col">
                <h1>Glosowanie</h1>
                <form class="form-group" method="POST" action="">
                    <div>
                        <input type="number" placeholder="Wpisz ID..." class="form-control" name="number" />
                    </div>
                    <div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="glos" id="option1" value="Adam">
                        <label class="form-check-label" for="Option1">Pawel</label>
                    </div>
                    <div class="form-check">
                        <input class="from-check-input" type="radio" name="glos" id="option2" value="Jan">
                        <label class="form-check-label" for="option2">Kamil</label>
                    </div>
                    <div class="form-check">
                        <input class="from-check-input" type="radio" name="glos" id="option2" value="Jan">
                        <label class="form-check-label" for="option2">Michał</label>
                    </div>
                    <div class="form-check">
                        <input class="from-check-input" type="radio" name="glos" id="option2" value="Jan">
                        <label class="form-check-label" for="option2">Arek</label>
                    </div>
                    <div class="form-check">
                        <input class="from-check-input" type="radio" name="glos" id="option2" value="Jan">
                        <label class="form-check-label" for="option2">Mateusz</label>
                    </div>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success">Glosuj</button>
                    </div>
                </form>
            </article>
        </section>
        <?php 
            if(isset($_POST['number']) && isset($_POST['glos'])){
                $z = $_POST['number'];
                $y = $_POST['glos'];
                $conn = mysqli_connect('localhost', 'root', "", 'test');
                $x = "INSERT INTO glosy (glos_id, glos) VALUES ('$z', '$y')";
                
                if(mysqli_query($conn, $x)){
                    echo "<p class='alert alert-success'><span class='alert-heading'>GLOS ODDANY DZIEKUJEMY!</span></p>";
                  }else{
                    echo "<p class='alert alert-danger'><span class='alert-heading'>Cos poszlo nie tak...</span></p>";
                  }
            }else{
                return false;
            }
        ?>
    </div>
</body>
</html>