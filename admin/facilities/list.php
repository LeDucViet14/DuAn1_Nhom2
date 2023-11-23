<div class="row">
<div class="col-lg-10 ms-auto p-4 overflow-hidden">
<div class="row2">
         <div class="row2 font_title">
          <h1>DANH SACH FACILITIES</h1>
         </div>
         <div class="row2 form_content">
           <div class="row2 mb10 formds_loai">
           <table class="table">
            <tr>
                <th></th>
                <th>#</th>
                <th>Icon</th>
                <th>Name</th>
                <th>Decsciption</th>
                <th></th>
            </tr>
            <?php
                foreach ($listfacilities as $facilities){
                extract($facilities);
                $suafacilities="index.php?act=suafacilities&id=".$id;
                $xoafacilities="index.php?act=xoafacilities&id=".$id;
                $hinhpath="../upload/".$icon;
                if(is_file($hinhpath)){
                  $hinhicon="<img src='".$hinhpath."' height='50'>";
                }else{
                  $hinhicon="no photo";
                }
                echo '<tr>
                <td><input type="checkbox" name="" id=""></td>
                <td>'.$id.'</td>
                <td>'.$hinhicon.'</td>
                <td>'.$name.'</td>
                <td>'.$description.'</td>
                <td><a href="'.$suafacilities.'"><input type="button" value="Sửa"></a>   <a href="'.$xoafacilities.'"><input type="button" value="Xóa"></a></td>
            </tr>';

            }
            ?>
           
            
           </table>
           </div>
           <div class="row mb10 ">
         <input class="mr20" type="button" value="CHỌN TẤT CẢ">
         <input  class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
        <a href="index.php?act=addfacilities"> <input  class="mr20" type="button" value="NHẬP THÊM"></a>
           </div>
          </form>
         </div>
        </div>
         </div>
        </div>
        </div>