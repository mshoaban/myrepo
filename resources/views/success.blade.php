<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-6 text-center">
                <h1>Success</h1>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-2 text-center">
                <a href="{{ route('product.index') }}" class="btn btn-primary">
                    <i class="fa fa-arrow-left"></i> Back to Products
                </a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        // Automatically trigger a SweetAlert notification on page load
        Swal.fire({
            icon: 'success',
            title: 'Payment Successful',
            text: 'Your payment has been processed successfully.'
        });
    </script>
</body>
</html>
