jQuery(document).ready(function ($) {
    function showQuestionTextBox() {
        $('#questionTextBox').fadeIn();
        setTimeout(function () {
            $('#questionTextBox').fadeOut();
        },4000);
    }

    function hideQuestionTextBox() {
        $('#questionTextBox').hide();
    }

    $('#questionShowBtn').click(showQuestionTextBox);

    $('#questionCloseBtn').click(hideQuestionTextBox);
});