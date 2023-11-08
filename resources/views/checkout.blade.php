<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Checkout</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" >
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
    </head>
    <body>
        <div class="container">
           <div class="row">
                <h1>Laravel Payment Integration </h1>
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Stripe Payment Integration
                        </div>
                        <div class="card-body">
                            <table class="table table-hover table-condensed" id="cart">
                                <thead>
                                    <tr>
                                        <th style="width:50%">Product</th>
                                        <th style="width:10%">Price</th>
                                        <th style="width:8%">Quantity</th>
                                        <th style="width:22%">subtotal</th>
                                        <th style="width:10%"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td data-th="Product">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <h4 class="nomargin">Jewelery Gold</h4>
                                                </div>

                                            </div>
                                        </td>

                                        <td data-th="Price"></td>
                                        <td data-th="Quantity">
                                            <input type="number" value="1" class="form-control quantity cart_update" min="1">
                                        </td>
                                        <td data-th="subtotal" class="text-center">$50</td>
                                        <td data-th="" class="actions">
                                            <button class="btn btn-danger btn-sm cart_remove"><i class="fa fa-trash-o"></i>Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="5" style="text-align: right;">
                                            <h3><strong>Total 6$ </strong></h3>
                                        </td>
                                    </tr>
                                    <tr>
                                      <td colspan="5" style="text-align: right;">
                                      <form action="/session" method="POST">
                                          @csrf
                                          <input type="hidden" name="total" value="100">
                                          <input type="hidden" name="product" value="Laptop Hp ">
                                          <button class="btn btn-success" type="submit" id="checkout-live-button"><i class="fa fa-money"></i>Checkout</button>
                                      </form>  
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div> 
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
    </body>
</html>