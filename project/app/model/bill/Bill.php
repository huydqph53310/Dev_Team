<?php
// bill sẽ sau sản phẩm
// list sản phẩm sẽ được đổ về khi người dùng nhấn vào mục tích
class Bill
{
    public $id, $idkhachhang, $listsanpham, $ghichu;

    public function __construct($id = null, $idkhachhang = null, $listsanpham = null, $ghichu = null)
    {
        $this->id = $id;
        $this->idkhachhang = $idkhachhang;
        $this->listsanpham = $listsanpham;
        $this->ghichu = $ghichu;
    }
}
