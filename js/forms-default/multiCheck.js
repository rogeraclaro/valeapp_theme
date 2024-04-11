jQuery(document).ready(function ($) {
    var MultiCheck = {
        qty_msg: 'Servicios seleccionados: $qty',
        el: $("div[data-multicheck-id]"),
        el_data: {
            this_is_a_template: {
                qty_el: 1,
                qty_selected: 0
            }
        },
        refreshCount: function (multicheckId) {
            const multiCheckWrapper = $(`div[data-multicheck-id=${multicheckId}]`);
            $(multiCheckWrapper).attr("data-multicheck-qtyMsg", MultiCheck.qty_msg.replace('$qty', MultiCheck.el_data[multicheckId].qty_selected))
        },
        selectAllChecks: (multicheckId) => (checkEvent) => {
            MultiCheck.el_data[multicheckId].qty_selected = checkEvent.target.checked? MultiCheck.el_data[multicheckId].qty_el : 0;
            MultiCheck.refreshCount(multicheckId)
            $(`div[data-multicheck-id=${multicheckId}]`).find("input[type='checkbox']").each((__, checkInput) => {
                $(checkInput).prop('checked', checkEvent.target.checked)
            });
        },
        onCheck: (multicheckId) => (checkEvent) => {
            if (checkEvent.target.checked) {
                MultiCheck.el_data[multicheckId].qty_selected++;
            } else {
                if (MultiCheck.el_data[multicheckId].qty_selected === MultiCheck.el_data[multicheckId].qty_el)
                    $(`div[data-multicheck-id=${multicheckId}]`).find("input[data-multicheck-selectAll='true']").each((__, checkInput) => {
                        $(checkInput).prop('checked', false)
                    });
                MultiCheck.el_data[multicheckId].qty_selected--;
            }
            MultiCheck.refreshCount(multicheckId)
        },
        init: function () {
            $(MultiCheck.el).each((__, multiCheckWrapper) => {
                const multicheckId = $(multiCheckWrapper).attr('data-multicheck-id');
                $(multiCheckWrapper).attr("data-multicheck-qtyMsg", MultiCheck.qty_msg.replace('$qty', 0))
                const allInputs = $(multiCheckWrapper).find("input[type='checkbox']");
                $(allInputs).each((___, checkInput) => {
                    if ($(checkInput).is('[data-multicheck-selectAll="true"]')) {
                        $(checkInput).change(MultiCheck.selectAllChecks(multicheckId))
                    } else {
                        if (MultiCheck.el_data[multicheckId]) {
                            MultiCheck.el_data[multicheckId].qty_el++;
                        } else {
                            MultiCheck.el_data[multicheckId] = { ...MultiCheck.el_data.this_is_a_template };
                        }
                        $(checkInput).change(MultiCheck.onCheck(multicheckId))
                    }
                })
            })
        }
    }

    MultiCheck.init();
});