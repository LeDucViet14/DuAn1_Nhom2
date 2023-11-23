<?php
function insert_facilities($icon,$name,$description){
    $sql="insert into facilities(icon,name,description) values('$icon','$name','$description')";
    pdo_execute($sql);

}
function delete_facilities($id){
    $sql="delete from facilities where id=".$id;
    pdo_execute($sql);
}
function loadall_facilities(){
    $sql="select * from facilities order by id desc";
    $listfacilities=pdo_query($sql);
    return $listfacilities;
}
function loadone_facilities($id){
    $sql="select * from facilities where id=".$id;
    $facilities=pdo_query_one($sql);
    return $facilities;
}
// function loadall_facilities($id){
//     $sql="select * from facilities where id=".$id;
//     return $facilities;
// }
function update_facilities($id,$hinhicon,$tenfacilities,$mota){
    if($hinhicon!="")
    $sql="update facilities set name='".$tenfacilities."', icon='".$hinhicon."', description='".$mota."' where id=".$id;
else
    $sql="update facilities set name='".$tenfacilities."', icon='".$hinhicon."', description='".$mota."' where id=".$id;
    pdo_execute($sql);
}


?>