<?php
require_once __DIR__.'/vendor/autoload.php'; // Load các Class, không cần phải require.

use App\core\Database as DB;
use App\Controllers\BaseController as BC;
use App\Models\BaseModel as BM;
$db = new DB();

$db->Hi();

echo "<h2>$db->name</h2>";

echo '<hr>';

BC::home(); // gọi phương thức tĩnh của BaseController

BM::home(); // gọi phương thức tĩnh của BaseModel

echo '<hr>';

$C = new BC();

echo '<hr>';
// Public : Truy cập bất kì đâu miễn nó được khởi tạo, từ đó có thể lấy được thuộc tính và phương thức của Class được khởi tạo
// Protected : Có thể truy cập vào chính lớp đó và lớp kế thừa. ví dụ bên Class Database
// Private : Chỉ truy cập vào chính lớp đó.


?>

<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<h6>Tôi là giao diện</h6>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>