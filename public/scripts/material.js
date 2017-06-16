$(document).ready(function() {
    $('#farm').DataTable( {
        "order": [[ 5, "desc" ]],
        "oLanguage": {
        "sSearch": "ตัวกรอง, ค้นหาข้อมูล: ",
        "sInfo": "กำลังแสดงทั้งหมด _TOTAL_ รายการ (_START_ ถึง _END_)",
        "sLengthMenu": "แสดง _MENU_ รายการ"
        }
    } );
} );