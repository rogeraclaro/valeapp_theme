jQuery(document).ready(function ($) {
    function updateCheckMarkRadioAsStar(radioWrapper) {
        let stopCheckMarks = false;
        $(radioWrapper).find("ul label").each((__, radioLabel) => {
            if (!stopCheckMarks) {
                stopCheckMarks = $(radioLabel).is(".selected");
                $(radioLabel).removeClass("radioAsStars-unchecked")
                $(radioLabel).addClass("radioAsStars-checked")
            } else {
                $(radioLabel).removeClass("radioAsStars-checked")
                $(radioLabel).addClass("radioAsStars-unchecked")
            }
        })
    }
    function onRadioAsStarClick(radioClicked) {
        const currentWrapper = $(".radioAsStars[data-radioAsStar-id='" + radioClicked.target.getAttribute("data-radioAsStar-wrapperId") + "']");
        updateCheckMarkRadioAsStar(currentWrapper)
    }

    const allRadioWrappers = $(".radioAsStars");
    if (allRadioWrappers) {
        allRadioWrappers.each((radioWrapperidx, radioWrapper) => {
            // $(radioWrapper).data('radioAsStar-id', radioWrapperidx);
            $(radioWrapper).attr("data-radioAsStar-id", radioWrapperidx);
            updateCheckMarkRadioAsStar(radioWrapper)
            $(radioWrapper).find("ul input").each((__, radioBtn) => {
                $(radioBtn).attr('data-radioAsStar-wrapperId', radioWrapperidx);
                $(radioBtn).change(onRadioAsStarClick);
            })
        })
    }
});