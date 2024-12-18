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
<h1>บันทึกข้อมูลคอมพิวเตอร์ของคุณ</h1>    
<form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">CPU_ID: ใช้เป็นรหัสประจำตัวของแต่ละรุ่น เพื่อความสะดวกในการค้นหาและอ้างอิง</label>
    <input type="text" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">ยี่ห้อ</label>
    <select id="inputState" class="form-select">
      <option selected>Intel</option>
      <option>AMD</option>
    </select>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">รุ่น: ชื่อรุ่นที่ผู้บริโภคเรียกกันทั่วไป</label>
    <input type="text" class="form-control" id="inputEmail4">
  </div>

  <div class="col-md-4">
    <label for="inputState" class="form-label">เจเนอเรชั่น</label>
    <select id="inputState" class="form-select">
      <option selected>i3</option>
      <option>i5</option><option>i7</option><option>i9</option>
    </select>
  </div>
  <div class="col-4">
    <label for="inputAddress" class="form-label">จำนวนคอร์</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="6">
  </div>
  <div class="col-4">
    <label for="inputAddress" class="form-label">จำนวนเธรด</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="6">
  </div>
  
  <div class="col-4">
    <label for="inputAddress" class="form-label">ราคา: ราคาโดยประมาณ อาจมีการปรับเปลี่ยนตามช่วงเวลาและร้านค้า</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="เช่น 10,000">
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">GPU_ID: รหัสประจำตัวของการ์จอ (Primary Key) ใช้สำหรับระบุแต่ละรุ่นของการ์จออย่างชัดเจน</label>
    <input type="text" class="form-control" id="inputEmail4">
  </div>
  
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">รุ่น: ชื่อรุ่นของการ์จอ</label>
    <input type="text" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputState" class="form-label">ยี่ห้อ</label>
    <select id="inputState" class="form-select">
      <option selected>NVIDIA</option>
      <option>AMD</option>
    </select>
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">ซีรีส์</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="6RTX 40, RX 7900">
  </div>
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary"id="alert">บันทึกข้อมูล</button> <button type="reset" class="btn btn-danger">เคลียร์</button>
  </div>
</form>

<h1>โดย นายประกฤษฎิ์ ปลัดโส <br>
    664485010
</h1>
    

</body>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- aaa -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.10/dist/sweetalert2.all.min.js"></script>
    <script>
        $(function() {
            $('#alert').on('click', function(e) {
      e.preventDefault();
      var form = $('.pt_upld_page_frm');
      swal.fire({
        title: "คุณต้องการบันทึกข้อมูลหรือไม่?",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "ใช่ทำการบันทึกข้อมูล!",
        closeOnConfirm: false
      }, function(isConfirm) {
        console.log("sdfsf");
        if (isConfirm) form.submit();
      });
    });
        });
    </script>
</html>