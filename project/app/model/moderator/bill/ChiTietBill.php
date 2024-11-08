<?php
// chi tiết bill hoạt động khi người dùng cần gọi đến chi tiết
// các bảng chỉ đổ về từ các dữ liệu cần thôi :))

class ChitietBill
{
    public $id, $idkhachang, $listsanpham, $idbill;
    public function __construct($id = null, $idkhachang = null, $listsanpham = null, $idbill = null)
    {
        $this->id = $id;
        $this->idkhachang = $idkhachang;
        $this->listsanpham = $listsanpham;
        $this->idbill = $idbill;
    }
}
