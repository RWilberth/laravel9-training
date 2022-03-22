
window.IndexController = function() {

    const deleteProject = function (form) {
        Swal.fire({
            title: 'Do you want to delete the project?',
            showDenyButton: false,
            showCancelButton: true,
            confirmButtonText: 'Delete',
          }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
          });
    }
    const initEvents = function() {
        $('.btn-delete-project').on('click', function(){
            const deleteForm = $(this).siblings('form');
            deleteProject(deleteForm);

        });
    }

    this.init = () => {
        initEvents();
    }
    return this;
};
