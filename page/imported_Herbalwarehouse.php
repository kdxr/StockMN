<?php
if(!isset($_SESSION["token"])) 
	exit(0);
?>
<?php include ('template/left_menu.php'); ?>
<div class="c-wrapper c-fixed-components">
<?php include ('template/top_menu.php'); ?>
 <div class="c-body">
        <main class="c-main">
          <div class="container-fluid">
		 
            <div class="fade-in">
              <div class="row justify-content-end">
			  
					<div class="col-md-auto mb-1" id="herbal"><!--offset-md-10--> 
						<button class="btn btn-sm btn-square btn-behance" data-toggle="modal" data-target="#addherbal" type="button">
							<svg class="c-icon mr-2">
							<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-arrow-thick-top"></use>
							</svg>
							<span>เพิ่มรายการยาสมุนไพร</span>
						</button>
					</div>
					
					
					<div class="col-lg-12 mb-3">
						<table class="table table-responsive-sm table-hover table-outline mb-0" id="bodyforadd">
                        <thead class="thead-dark">
                          <tr>
                            <th>ชื่อผลิตภัณฑ์</th>
							<th>คู่ค้า</th>
							<th>หมายเลขล็อตสินค้า</th>
                            <th class="text-center">จำนวน</th>
							<th class="text-center">หน่วยนับ</th>
                            <th>ราคา(บาท)</th>
                            <th class="text-right">วันหมดอายุ</th>
							<th class="text-right"></th>
                          </tr>
                        </thead>
                        <tbody>
                         
                        </tbody>
                      </table>
					</div>
					
					<div class="col-lg-12 mb-3" >
						<div class="card">
							<div class="card-body">
							  <div class="row">
									<div class="form-group col-sm-12">
										<button class="form-control bg-info text-white" type="button" id="addsql">บันทึกลงฐานข้อมูล</button>
									</div>
								</div>
							</div>
						</div>
				    </div>
					
					
            </div>
          </div>
        
      </div>
	  </main>
	  <?php include ('template/ending.php'); ?>
	  </div>
	 </div>