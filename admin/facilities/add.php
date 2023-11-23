<div class="row">
<div class="col-lg-10 ms-auto p-4 overflow-hidden">
<div class="row2">
         <div class="row2 font_title">
          <h1>THÊM MỚI Facilities</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=addfacilities" method="POST" enctype="multipart/form-data">
           <div class="row2 mb10">
            <label>Icon </label> <br>
            <input type="file" name="hinhicon" placeholder="nhập vào hình">
           </div>
           <div class="row2 mb10">
            <label>Name </label> <br>
            <input type="text" name="tenfacilities" placeholder="nhập vào ten">
           </div>
           <div class="row2 mb10">
            <label>Description </label> <br>
            <textarea name="mota" cols="30" rows="10"></textarea>
           </div>
           <div class="row mb10 ">
         <input class="mr20" type="submit" name="themmoi" value="THÊM MỚI">
         <input  class="mr20" type="reset" value="NHẬP LẠI">

         <a href="index.php?act=listfacilities"><input  class="mr20" type="button" value="DANH SÁCH"></a>
           </div>
           <?php
              if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
           ?>
          </form>
         </div>
        </div>
 
     <!-- END HEADER -->

       
    </div>
</div>
</div>    