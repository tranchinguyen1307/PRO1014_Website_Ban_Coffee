<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<?php include "particals/header.php" ?>

<!doctype html>
<html lang="en">


	<body>
		<div class="untree_co-section">
		    <div class="container">
		      <div class="row mb-5">
		        <div class="col-md-12">
		          <div class="border p-4 rounded" role="alert">
		            Returning customer? <a href="#">Click here</a> to login
		          </div>
		        </div>
		      </div>
		      <div class="row">
		        <div class="col-md-6 mb-5 mb-md-0">
		          <h2 class="h3 mb-3 text-black">Chi tiết thanh toán</h2>
		          <div class="p-3 p-lg-5 border bg-white">
		            <div class="form-group">
		              <label for="c_country" class="text-black">Tỉnh/ Thành Phố <span class="text-danger">*</span></label>
		              <select id="c_country" class="form-control">
		                <option value="1">Chọn 1 Tỉnh/ Thành phố:</option>    
		                <option value="2">Cần Thơ</option>    
		                <option value="3">An Giang</option>    
		                <option value="4">Cà Mau</option>    
		                <option value="5">Hồ Chí Minh</option>    
		                <option value="6">Hậu Giang</option>    
		                <option value="7">Sóc Trăng</option>        
		              </select>
		            </div>
		            <div class="form-group row">
		              <div class="col-md-6">
		                <label for="c_fname" class="text-black">Tên khách hàng<span class="text-danger">*</span></label>
		                <input type="text" class="form-control" id="c_fname" name="c_fname">
		              </div> 
		            </div>

		            <div class="form-group row">
		              <div class="col-md-12">
		                <label for="c_address" class="text-black">Quận/ Huyện: <span class="text-danger">*</span></label>
		                <input type="text" class="form-control" id="c_address" name="c_address" placeholder="Hãy điền Quận/Huyện vào đây:">
		              </div>
		            </div>

		            <div class="form-group mt-3">
		              <input type="text" class="form-control" placeholder="Điền Số nhà, Tên đường, phường,..">
		            </div>

		            
		            <div class="form-group row mb-5">
		              
		              <div class="col-md-6">
		                <label for="c_phone" class="text-black">Số điện thoại: <span class="text-danger">*</span></label>
		                <input type="text" class="form-control" id="c_phone" name="c_phone" placeholder="Điền số điện thoại:">
		              </div>
		            </div>

		            <div class="form-group">
		              <label for="c_order_notes" class="text-black">Ghi chú đặt hàng</label>
		              <textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control" placeholder="Viết ghi chú của bạn ở đây..."></textarea>
		            </div>

		          </div>
		        </div>
		        <div class="col-md-6">
		          <div class="row mb-5">
		            <div class="col-md-12">
		              <h2 class="h3 mb-3 text-black"><Table>Thông tin đơn hàng:</Table></h2>
		              <div class="p-3 p-lg-5 border bg-white">
		                <table class="table site-block-order-table mb-5">
		                  <thead>
		                    <th>Tên món/ số lượng</th>
		                    <th>Giá</th>
		                  </thead>
		                  <tbody>
		                    <tr>
		                      <td>Top Up T-Shirt <strong class="mx-2">x</strong> 1</td>
		                      <td>$250.00</td>
		                    </tr>
		                    <tr>
		                      <td>Polo Shirt <strong class="mx-2">x</strong>   1</td>
		                      <td>$100.00</td>
		                    </tr>
		                    <tr>
		                      <td class="text-black font-weight-bold"><strong>Tạm tính</strong></td>
		                      <td class="text-black">$350.00</td>
		                    </tr>
                            <label for="c_code" class="text">nhập mã giảm giá của bạn nếu có:</label>
		                    <div class="input-group w-75 couponcode-wrap">
		                        <input type="text" class="form-control me-2" id="c_code" placeholder="Mã giảm giá" aria-label="Coupon Code" aria-describedby="button-addon2">
		                         <div class="input-group-append">
		                            <button class="btn btn-black btn-sm" type="button" id="button-addon2">Áp dụng</button>
		                         </div>
		                    </div>
		                    <tr>
		                      <td class="text-black font-weight-bold"><strong>Tổng thanh toán</strong></td>
		                      <td class="text-black font-weight-bold"><strong>$350.00</strong></td>
		                    </tr>
		                  </tbody>
		                </table>

		                <div class="form-group">
		                  <button class="btn btn-black btn-lg py-3 btn-block" onclick="window.location='thankyou.html'">đặt hàng</button>
		                </div>

		              </div>
		            </div>
		          </div>

		        </div>
		      </div>
		      <!-- </form> -->
		    </div>
		  </div>
	</body>
</html>
<?php include "particals/footer.php"; ?>