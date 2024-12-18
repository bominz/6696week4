<!DOCTYPE html>
<html lang="en">
<head>
     


     <!-- Bootstrap -->
     <!-- Latest compiled and minified CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
     <!-- เพิ่ม sweetaleart  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.min.css">
    <!-- forn -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&family=Noto+Sans+Thai:wght@100..900&family=Sriracha&display=swap" rel="stylesheet">
    <!-- end -->
     <style>
        body{
            font-family: "Noto Sans Thai", serif;
            font-optical-sizing: auto;
            font-weight: <weight>;
            font-style: normal;
            font-variation-settings:
            "wdth" 100;
            margin-left: 100px;
        }
     </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ตัวอย่าง   ภาษา    PHP     </title>
</head>
<body>
    <h1>การเขียนโปรแกรมด้วย PHP</h1>
    664485010 ประกฤษฎิ์ ปลัดโส <br>
    หมู่เรียน 66/96 <br>
    <div class="alert alert-success">
  <strong>Success!</strong> Indicates a successful or positive action.
    </div>
    <button type="button" class="btn btn-success">บันทึกข้อมูล</button>
    <button type="button" class="btn btn-danger">ยกเลิกบันทึกข้อมูล</button> <br>
    <br> <div class="card bg-info text-white">
        <div class="card-body">Info card</div>
        </div> <br>
        
        <div class="card" style="width:400px">
        <img class="card-img-top" src="bom.jpg" alt="Card image">
        <div class="card-body">
        <h4 class="card-title">ประกฤษฎิ์ ปลัดโส</h4>
        <p class="card-text">664485010</p>
        <a href="https://www.youtube.com/" class="btn btn-primary">YouTube</a>
        </div>
        </div>
        <br>
        <button type="button" class="btn btn-outline-primary"id="alert">Good job!</button>
        <button type="button" class="btn btn-outline-primary"id="alert2">ทำได้ดี!</button>
</body>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- aaa -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.all.min.js"></script>
    <script>
        $(function() {
            $('#alert').click(function() {
                Swal.fire(
                    'Good job!',
                    'You clicked the button!',
                    'success'
                );
            });
            $('#alert2').click(function() {
                Swal.fire(
                    'ทำได้ดี!',
                    'คุณคลิกที่ปุ่ม!',
                    'success'
                );
            });
        });
    </script>
</html>