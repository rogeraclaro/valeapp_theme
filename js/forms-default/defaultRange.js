jQuery(document).ready(function ($) {
    function updateProgressBar(rangeChanged) {
        const tempSliderValue = rangeChanged.target.value;
        const progress = (tempSliderValue / rangeChanged.target.max) * 100;
        $("#" + rangeChanged.target.id).css("background", `linear-gradient(to right, #59ab9f ${progress}%, #ccc ${progress}%)`);
    }
    function updateProgressBarValue(rangeChanged) {
        $("div[data-defaultRange-rangeId='" + rangeChanged.target.id + "']").attr("data-defaultRange-rangeValue", rangeChanged.target.value + "€");
    }
    const allRangesWrapper = $(".defaultRange .acf-range-wrap");
    if (allRangesWrapper) {
        allRangesWrapper.each((__, rangeWrapper) => {
            const rangeInput = $(rangeWrapper).find("input[type='range']");
            $(rangeInput).change(updateProgressBar);
            $(rangeInput).on('input', updateProgressBarValue);
            $(rangeWrapper).attr("data-defaultRange-rangeMin", $(rangeInput).prop('min') + "€");
            $(rangeWrapper).attr("data-defaultRange-rangeValue", $(rangeInput).val() + "€");
            $(rangeWrapper).attr("data-defaultRange-rangeId", $(rangeInput).attr("id"));
        })
    }
});