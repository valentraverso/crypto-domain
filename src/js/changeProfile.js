const btnSubmit = document.querySelector('#btnSubmitChanges');
const btnDeleteUser = document.querySelector('#btnDeleteUser');

function submitForm(e) {
    e.preventDefault();
    Swal.fire({
        title: 'Do you want to save the changes?',
        showDenyButton: true,
        showCancelButton: false,
        confirmButtonText: 'Accept',
        denyButtonText: 'No',
        customClass: {
            actions: 'my-actions',
            cancelButton: 'order-1 right-gap',
            confirmButton: 'order-2',
            denyButton: 'order-3',
        }
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById("formChangeUser").submit();
        } else if (result.isDenied) {
            Swal.fire('Changes are not saved', '', 'info')
        }
    })
}
function deleteUser(){
    Swal.fire({
        title: 'Are you sure you want to delete your account?',
        showDenyButton: true,
        showCancelButton: false,
        confirmButtonText: 'Accept',
        denyButtonText: 'No',
        customClass: {
            actions: 'my-actions',
            cancelButton: 'order-1 right-gap',
            confirmButton: 'order-2',
            denyButton: 'order-3',
        }
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.replace('http://localhost/assembler/develop-your-project-in-php/src/funcs/disactivateUser.php');
        } else if (result.isDenied) {
            Swal.fire('You still in the crew baby, lets Go!🚀', '', 'info')
        }
    })
}
btnSubmit.addEventListener('click', submitForm);
btnDeleteUser.addEventListener('click', deleteUser);