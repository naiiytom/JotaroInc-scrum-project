new SlimSelect({
    select: 'select#customerID'
});

new SlimSelect({
    select: 'select#shipping'
});

new SlimSelect({
    select: 'select#promotionID'
});

new SlimSelect({
    select: 'select#product'
});

$('table').DataTable({
    'searching': false,
    'paging': false,
    'ordering': false,
    'info': false
});

const selector = $('select[name="product"]');
const quantity = $('input[name="quantity"]');
const tableBody = $('tbody#order_details');
const cart = [];

$(() => {
    $('.addToCart').click(() => {
        const product = products.filter((data) => data.ProductID === +selector.val())[0];
        const pCart = cart.filter((data) => data.item.ProductID === product.ProductID);
        const pQuantity = quantities.filter((data) => data.ProductID === product.ProductID)[0];
        const quanVal = quantity.val() ? +quantity.val() : 1;

        if (+(pQuantity.Quantity) < quanVal) {
            alert('ไม่สามารถเพิ่มได้เนื่องจากสินค้าไม่พอ');
            return;
        }

        if (pCart.length > 0) {
            if (quanVal !== pCart[0].quantity) {
                pCart[0].quantity = quanVal;
            }
        } else {
            cart.push({
                item: product,
                quantity: quanVal
            });
        }

        quantity.val(1);

        showChat();
    });

    $('button.checkout').click(() => {
        if (confirm('ยืนยันการทำรายการ')) {
            if (cart.length <= 0) {
                return alert('ไม่มีสินค้าในตะกร้า');
            }

            // Building JSON
            const soldto = +($('select[name="customerID"]').val());
            const promotion = +($('select[name="promotionID"]')).val();
            const shipme = +($('select[name="shipping"]').val());

            const realCart = [];
            for (const item of cart) {
                realCart.push({
                    productID: item.item.ProductID,
                    quantity: item.quantity
                });
            }

            const data = {
                SoldTo: soldto,
                ShipMethod: shipme,
                items: realCart
            };

            if (promotion !== -1) {
                data['promotionID'] = promotion;
            } else {
                data['promotionID'] = null;
            }

            // Sending POST To PHP
            const form = $(`<form action="${targetURL}" method="post">` +
                `<input type="text" name="data" value='${JSON.stringify(data)}' />` +
                '</form>');
            $('body').append(form);
            $(form).submit();
        }
    });
});

function onDelete(e) {
    const pid = $(e).data('pid');
    const product = products.filter((data) => data.ProductID === +pid);

    if (product.length > 0) {
        const index = cart.findIndex((value) => {
            return value.item.ProductID === pid;
        });
        cart.splice(index, 1);
    }

    showChat();
}

function showChat() {
    let str = '';

    for (const element of cart) {
        str += `<tr><th scope="row">${element.item.ProductID}</th><td>${element.item.Name} ${element.item.Skin} ${element.item.Size}</td>`;
        str += `<td>${element.quantity}</td><td>${element.item.Price}</td><td>${element.item.Price * element.quantity}</td>`;

        const btn = $("<button></button>", {
            'class': 'btn btn-danger',
            'type': 'button',
            'data-pid': element.item.ProductID,
            'onClick': 'onDelete(this)'
        });
        btn.html('ลบ');
        str += `<td>${btn[0].outerHTML}</td></tr>`;
    }

    tableBody.html(str);
}