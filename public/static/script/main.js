$(() => {
    $('table#enable').DataTable();

    // Edit Model
    $('.customer#editModel').on('show.bs.modal', (e) => {
        var cusID = $(e.relatedTarget).data('cus-id');
        var cusName = $(e.relatedTarget).data('cus-name');
        var cusAddress = $(e.relatedTarget).data('cus-add');
        var cusTel = $(e.relatedTarget).data('cus-tel');
        var cusDisable = $(e.relatedTarget).data('cus-dis');

        $(e.currentTarget).find('input[name="id"]').val(cusID);
        $(e.currentTarget).find('input[name="name"]').val(cusName);
        $(e.currentTarget).find('textarea[name="address"]').text(cusAddress);
        $(e.currentTarget).find('input[name="tel"]').val(cusTel);
        $(e.currentTarget).find('select[name="isdisable"]').val(cusDisable);
    });

    $('.order#editModel').on('show.bs.modal', (e) => {
        var orID = $(e.relatedTarget).data('or-id');

        $(e.currentTarget).find('input[name="id"]').val(orID);
    });

    $('.shipping#editModel').on('show.bs.modal', (e) => {
        var id = $(e.relatedTarget).data('sip-id');
        var name = $(e.relatedTarget).data('sip-name');
        var cost = $(e.relatedTarget).data('sip-cost');
        var dis = $(e.relatedTarget).data('sip-dis');

        $(e.currentTarget).find('input[name="id"]').val(id);
        $(e.currentTarget).find('input[name="name"]').val(name);
        $(e.currentTarget).find('input[name="cost"]').val(cost);
        $(e.currentTarget).find('select[name="isdisable"]').val(dis);
    });

    $('.seller#editModel').on('show.bs.modal', (e) => {
        var empID = $(e.relatedTarget).data('emp-id');
        var empName = $(e.relatedTarget).data('emp-name');
        var empTelNo = $(e.relatedTarget).data('emp-tel');
        var empEmail = $(e.relatedTarget).data('emp-email');
        var empUsername = $(e.relatedTarget).data('emp-user');
        var empDisable = $(e.relatedTarget).data('emp-dis');

        $(e.currentTarget).find('input[name="id"]').val(empID);
        $(e.currentTarget).find('input[name="name"]').val(empName);
        $(e.currentTarget).find('input[name="tel"]').val(empTelNo);
        $(e.currentTarget).find('input[name="email"]').val(empEmail);
        $(e.currentTarget).find('input[name="username"]').val(empUsername);
        if (empDisable) {
            $(e.currentTarget).find('select[name="isdisable"]').val(empDisable);
        }
        if (empID == 1) {
            $(e.currentTarget).find('button[name="fire"]').attr('disabled', true);
        } else {
            $(e.currentTarget).find('button[name="fire"]').attr('disabled', false);
        }
    });

    $('.product#editModel').on('show.bs.modal', (e) => {
        var proID = $(e.relatedTarget).data('pro-id');
        var proName = $(e.relatedTarget).data('pro-name');
        var proSkin = $(e.relatedTarget).data('pro-skin');
        var proSize = $(e.relatedTarget).data('pro-size');
        var proColor = $(e.relatedTarget).data('pro-color');
        var proPrice = $(e.relatedTarget).data('pro-price');
        var proDisable = $(e.relatedTarget).data('pro-dis');

        $(e.currentTarget).find('input[name="id"]').val(proID);
        $(e.currentTarget).find('input[name="name"]').val(proName);
        $(e.currentTarget).find('input[name="skin"]').val(proSkin);
        $(e.currentTarget).find('input[name="size"]').val(proSize);
        $(e.currentTarget).find('input[name="color"]').val(proColor);
        $(e.currentTarget).find('input[name="price"]').val(proPrice);
        $(e.currentTarget).find('select[name="isdisable"]').val(proDisable);
    });

    $('.promotion#editModel').on('show.bs.modal', (e) => {
        var proID = $(e.relatedTarget).data('pro-id');
        var proName = $(e.relatedTarget).data('pro-name');
        var proStart = $(e.relatedTarget).data('pro-start');
        var proEnd = $(e.relatedTarget).data('pro-end');
        var proPrice = $(e.relatedTarget).data('pro-price');
        var proDisable = $(e.relatedTarget).data('pro-dis');

        $(e.currentTarget).find('input[name="id"]').val(proID);
        $(e.currentTarget).find('input[name="name"]').val(proName);
        $(e.currentTarget).find('input[name="start"]').val(proStart);
        $(e.currentTarget).find('input[name="end"]').val(proEnd);
        $(e.currentTarget).find('input[name="price"]').val(proPrice);
        $(e.currentTarget).find('select[name="isdisable"]').val(proDisable);
    });

    $('.stockin#addModel2').on('show.bs.modal', (e) => {
        var stockDate = $(e.relatedTarget).data('stock-date');

        $(e.currentTarget).find('input[name="date"]').val(stockDate);
    });

    $('button.logout').click(() => {
        window.location.replace('./auth/logout');
    });
});

const menuBar = $("nav.menubar");
let isMenuMaximize = true;
function toggleMenu() {
    if (isMenuMaximize) {
        menuBar.addClass('mini-bar');
    } else {
        menuBar.removeClass('mini-bar');
    }

    isMenuMaximize = !isMenuMaximize;
}