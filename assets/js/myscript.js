const flashData = $('.flash-data').data('flashdata');

if (flashData) {
    Swal.fire({
        title: 'Data Mahasiswa ',
        text: 'Success ' + flashData,
        type: 'success'  
    });
}

// button-delete
$('.button-delete').on('click', function (e) {

    e.preventDefault();
    const href = $(this).attr('href');

    Swal.fire({
            title: 'Are you sure?',
            text: "Data Mahasiswa will be deleted!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
                if (result.value) {
                    document.location.href = href;
                } 
            })
      });