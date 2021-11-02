$(() => {
    let searchTimeout;

    $("#order_number").keyup(() => {
        searchKey = $("#order_number").val();
        clearTimeout(searchTimeout);

        searchTimeout = setTimeout(() => {
            getOrderNumber(searchKey);
        }, 400);
    });

    function getOrderNumber(searchKey) {
        $.ajax({
            url: 'search-order-number.php',
            method: 'POST',
            data: {
                get_order: 1,
                search_key: searchKey
            },
            success: function (res) {
                $("#display").html(res);
            }
        });
    }
});