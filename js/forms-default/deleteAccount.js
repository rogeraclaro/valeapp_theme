let selectedIds = [];

jQuery('.EliminarCuenta-input').change(function () {
    updateSelection();
});

function updateSelection() {
    let selectedCount = 0;
    selectedIds = [];

    jQuery('.EliminarCuenta-input').each(function () {
        if (jQuery(this).prop('checked')) {
            selectedCount++;
            selectedIds.push(jQuery(this).attr('id'));
        }
    });
    jQuery('#selectedCount').text(selectedCount);
}

jQuery('#ConfirmDelete').click(function () {
    console.log('IDs seleccionados:', selectedIds);
});