<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>คำนวณหาพื้นที่สี่เหลี่ยม</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand">คำนวณหาพื้นที่สี่เหลี่ยม</a>
    </nav><br>

    <div class="container-lg border">
        <h1>กรุณากรอกข้อมูล</h1>
        <form action="index.php" method="post">
            <div class="col-md-3">
                <label for="width">ความกว้าง:</label>
                <input type="number" id="width" name="width" required class="form-control">
            </div>
            <br>
            <div class="col-md-3">
                <label for="height">ความสูง:</label>
                <input type="number" id="height" name="height" required class="form-control">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">คำนวณ</button>
        </form>
    </div>

    <?php
    if (isset($_POST["width"]) && isset($_POST["height"])) {
        $width = $_POST["width"];
        $height = $_POST["height"];

        $area = $width * $height;
        
        echo "<p>พื้นที่สี่เหลี่ยมคือ: $area ตารางหน่วย</p>";
    }
    ?>
</body>
</html>
