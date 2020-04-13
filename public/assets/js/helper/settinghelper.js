
  import * as YearBudget from './yearbudget.js'

  $(document).on("click",".useyear",function(e){
    var id = e.currentTarget.getAttribute('data-data');
    Swal.fire({
            title: `เปลี่ยนปีงบประมาณ!`,
            text: `ต้องการเปลี่ยนปีงบประมาณ ${e.currentTarget.getAttribute('data-data')} หรือไม่? `,
            type: 'info',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            confirmButtonText: 'เรียกคิว',
            cancelButtonText: 'ยกเลิก',
            closeOnConfirm: false,
            closeOnCancel: false
        }).then((result) => {
        if (result.value) {
            YearBudget.selectYear($(this).data('id')).then(data => {
                console.log(data);
                let html='';
                data.forEach(function (yearbudget,index) {
                    var badge = ``;
                    if(yearbudget.status == 1){
                        badge = `<span class="badge badge-flat border-success text-success-600">ใช้งาน</span>`
                    }
                    html += `<tr>
                                 <td>${index + 1} </td>
                                 <td>${yearbudget.name} </td>
                                 <td> ${badge} </td>               
                                 <td>                                                                                                      
                                    <a href="#" class="badge bg-teal useyear" data-id="${yearbudget.id}" data-data="${yearbudget.name}">ใช้ปีงบประมาณ</a>                                       
                                    <a href="${route.url}/setting/general/yearbudget/delete/${yearbudget.id}" data-data="ปีงบประมาณ ${yearbudget.name}" onclick="confirmation(event)" class=" badge bg-danger">ลบ</a>
                                 </td>
                            <tr>`
                    });
                 $("#table_yearbudget").html(html);

            })
            .catch(error => {
            })
            // window.location.href = urlToRedirect;
        }
    });
});

$(document).on("click","#modal_add_yearbudget",function(e){
    if ($("#yearbudget").val() =='' ) return;
    YearBudget.addYear($("#yearbudget").val()).then(data => {
        console.log(data);
        let html='';
        data.forEach(function (yearbudget,index) {
            var badge = ``;
            if(yearbudget.status == 1){
                badge = `<span class="badge badge-flat border-success text-success-600">ใช้งาน</span>`
            }
            html += `<tr>
                         <td>${index + 1} </td>
                         <td>${yearbudget.name} </td>
                         <td> ${badge} </td>               
                         <td>                                                                                                      
                            <a href="#" class="badge bg-teal useyear" data-id="${yearbudget.id}" data-data="${yearbudget.name}">ใช้ปีงบประมาณ</a>                                       
                            <a href="${route.url}/setting/general/yearbudget/delete/${yearbudget.id}" data-data="ปีงบประมาณ ${yearbudget.name}" onclick="confirmation(event)" class=" badge bg-danger">ลบ</a>
                         </td>
                    <tr>`
            });
         $("#table_yearbudget").html(html);

    })
    .catch(error => {
    })
}); 