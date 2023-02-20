<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Successfully Saved</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>

    <script>
      Swal.fire({
  title: '<strong>Data Success</strong>',
  icon: 'success',
  html:
    'The Avaya Data Was Successfully Stored, ' ,
  showCloseButton: true,

  focusConfirm: false,
  confirmButtonText:
    '<a href="../../"><i class="fa fa-thumbs-up"></i> Great!</a>',
  confirmButtonAriaLabel: 'Thumbs up, great!',
 
 
})
    </script>
    
</body>
</html>