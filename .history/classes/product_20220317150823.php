<?php
  include_once "../../lib/database.php";
  include_once "../../helpers/format.php";
// ?>
<?php
  class product
  {
    private $db;
    private $fm;

    public function __construct()
    {
      $this->db = new Database();
      $this->fm = new Format();
    }
    public function insert_product($data, $files){
      $productName = mysqli_real_escape_string($this->db->link, $data['productName']);
      $category = mysqli_real_escape_string($this->db->link, $data['category']);
      $price = mysqli_real_escape_string($this->db->link, $data['price']);
      $quantity = mysqli_real_escape_string($this->db->link, $data['quantity']);
      $productDesc = mysqli_real_escape_string($this->db->link, $data['productDesc']);

      $permited = array('jpg', 'jpeg', 'png', 'gif');
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_temp = $_FILES['image']['tmp_name'];

      $div = explode('.', $file_name);
      $file_ext = strtolower(end($div));
      $unique_image = substr(md5(time()), 0, 10).'.' .$file_ext;
      $uploaded_image = "uploads/".$unique_image;

      if($productName == '' || $category == '' || $price == '' || $quantity == '' || $productDesc == '' || $file_name == '' ){
        $alert = "Cac truong khong dc rong";
        return $alert;
      }else{
        move_uploaded_file($file_temp,  $uploaded_image);
        $query = "INSERT INTO tbl_product(productName,catId,price,quantity,productDesc,image) VALUE('$productName','$category','$price','$quantity','$productDesc','$unique_image') ";
        $result = $this->db->insert($query);
        if($result) {
          $alert = "Thêm san pham moi thành công";
          return $alert;
        } else {
          $alert = "Thêm san pham moi không thành công";
          return $alert;
        }
      }
    }
    public function show_product() {
      $query = "SELECT tbl_product.*, tbl_category.catName
                FROM tbl_product INNER JOIN tbl_category ON tbl_product.catId = tbl_category.catId
                order by tbl_product.productId desc";
      $result = $this->db->select($query);
      return $result;
    }
    public function update_product($data,$files,$productId) {
      $productName = mysqli_real_escape_string($this->db->link, $data['productName']);
      $category = mysqli_real_escape_string($this->db->link, $data['category']);
      $price = mysqli_real_escape_string($this->db->link, $data['price']);
      $quantity = mysqli_real_escape_string($this->db->link, $data['quantity']);
      $productDesc = mysqli_real_escape_string($this->db->link, $data['productDesc']);

      $permited = array('jpg', 'jpeg', 'png', 'gif');
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_temp = $_FILES['image']['tmp_name'];

      $div = explode('.', $file_name);
      $file_ext = strtolower(end($div));
      $unique_image = substr(md5(time()), 0, 10).'.' .$file_ext;
      $uploaded_image = "uploads/".$unique_image;

      if($productName == '' || $category == '' || $price == '' || $quantity == '' || $productDesc == ''){
        $alert = "Cac truong khong dc rong";
        return $alert;
      }else {
        if(empty($file_name)) {
          if($file_size > 1048567) {
          echo "imge size fail";
        }elseif(in_array($file_ext, $permited) === false) {
          echo "You can upload only:-". implode('.', $permited);
        }
        }
      }

      else{
        $query = "UPDATE tbl_category SET catName='$catName' WHERE catId='$catId' ";
        $result = $this->db->update($query);
        if($result) {
          $alert = "Danh mục được cập nhật thành công";
          return $alert;
        } else {
          $alert = "Danh mục cập nhật không thành công";
          return $alert;
        }
      }
    }
    public function delete_product($catId) {
      $query = "DELETE FROM tbl_category WHERE catId='$catId' ";
      $result = $this->db->delete($query);
      if($result) {
        $alert = "Danh mục được xóa thành công";
        return $alert;
      } else {
         $alert = "Danh mục xóa không thành công";
        return $alert;
      }
    }
    public function getProductById($productId) {
      $query = "SELECT * FROM tbl_product WHERE productId='$productId' ";
      $result = $this->db->select($query);
      return $result;
    }
  }
?>