const BTN_DELETE = document.querySelectorAll('.btn_notas_delet');
const BTN_CONFIRM_DELETE = document.getElementById('btn_confirm_notas_delet');

let idNotaDelet = 0;

BTN_DELETE.forEach(res => {
    res.addEventListener('click', () => {

        idNotaDelet = res.dataset.id;
        $('#modal_notas_delet').modal('show')
    
    });
});

if (BTN_CONFIRM_DELETE !== null) {
    BTN_CONFIRM_DELETE.addEventListener('click', () => {
        let formNotasDelet = document.getElementById(`form_notas_delet_${idNotaDelet}`);
        formNotasDelet.submit();
    });   
}