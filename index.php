<?php
include_once 'app/functions.php';

$obj = file_get_contents('https://devtest.hackerusa.com');
$decoded_json = json_decode($obj, true);


$head1Items = $decoded_json['heading1'];
$head2Items = $decoded_json['heading2'];
$paragrahItems = $decoded_json['paragrah'];
$listItems = $decoded_json['list'];
$boldItems = $decoded_json['bold'];
$buttonItems = $decoded_json['button'];

$popHead = $decoded_json['popup']['heading'];
$popArr1 = $decoded_json['popup']['labels']['name'];
$popArr2 = $decoded_json['popup']['labels']['phone'];
$popArr2d2 = $decoded_json['popup']['labels']['email'];
$popButt = $decoded_json['popup']['button'];
$popDis = $decoded_json['popup']['disclaimer'];






?>


<!doctype html>
<html lang="en">

<head>

    <title>test</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <div class="container-fluid vh-100">
        <div class="first">

        </div>
        <h1>
            <?php echo $head1Items . '<br>' . $head2Items; ?>
        </h1>
        <p class="para"> <?php echo $paragrahItems; ?></p>

        <div>
            <?php foreach ($listItems as $item) : ?>
                <div class="row">
                    <div class="check-mark col col-auto">
                        &nbsp;
                    </div>

                    <div class="col list flex-grow-1"><?php echo $item; ?></div>
                </div><br>
            <?php endforeach; ?>
        </div>

        <p> <span class="bold1"> <?php echo $boldItems[0]; ?></span> <br><span class="bold2"><?php echo $boldItems[1]; ?></span></p>

        <div class="butt-loc" name="clickme" id="clickme">
            <?php foreach ($buttonItems as $butt) : ?>
                <div class="row press-butt ">

                    <div class="col butt "><?php echo $butt; ?></div>

                </div>
            <?php endforeach; ?>
        </div>
        <div class="arrow">

        </div>



        <div class="pop-div">
            <div>
                <form class="form " action="#" method="post" id="popdiv">

                    <label for="headline" class="pop-head"><?php echo $popHead; ?></label><br>
                    <label for="name" class="fname"><?php echo $popArr1; ?></label><br>
                    <span class="nameErr">* <?php echo $nameErr; ?></span>
                    <input type="text" name="fname"><br>
                    <label for="phone" class="phone"><?php echo $popArr2; ?></label><br>
                    <span class="phoneErr">* <?php echo $phoneErr; ?></span>
                    <input type="tel" name="phone" pattern="[0-9]{3}-[0-9]{7}"><br>
                    <label for=" email" class="email"><?php echo $popArr2d2; ?></label><br>
                    <span class="emailErr">* <?php echo $emailErr; ?></span>
                    <input type="email" name="email" id=""><br><br>
                    <button type="submit" name="submit" class="subButt"><?php echo $popButt; ?></button>

                </form>
            </div>
        </div>




    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="./JS/test.js"></script>
</body>


</html>

<?php
include 'template/footer.php';

?>