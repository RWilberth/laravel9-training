window.CreateController = function() {

    const initFormFields = function() {
        $('#plannedStart').datepicker({
            dateFormat: "dd/mm/yy"
        });
        $('#plannedEnd').datepicker({
            dateFormat: "dd/mm/yy"
        });
    }

    this.init = () => {
        initFormFields();
    }
    return this;
};
