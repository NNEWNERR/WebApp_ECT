<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webboard Kakkak</title>
</head>

<body>
    <h1 style="text-align: center;">Webboard Kakkak</h1>
    <hr>

    <div align="center">
        ต้องการดูกระทู้หมายเลข <?php echo $_GET["id"]; ?><br>
    </div>
    <br>
    <table style="border: 2px solid black; width: 20%" align="center">
        <tr>
            <td colspan="2" style="background-color: #85C1E9;">เข้าสู่ระบบ</td>
        </tr>
        <tr>
            <td><textarea name="textarea" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td align="center"><button> ส่งข้อความ</button></td>
        </tr>
        <tr>
            <td align="center"><a href="index.html">กลับไปหน้าหลัก</a></td>
        </tr>

    </table>
</body>

            <li><a href="post.php?id=5">กระทู้ที่ 5</a></li>
</html>