<div class="container">
    <div id="content">

        <div class="table-responsive">
            <!-- Shop Products Table -->
                <table class="shop_table beta-shopping-cart-table" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="product-name">#</th>
                            <th class="product-name">Product</th>
                            <th class="product-price">Price</th>
                            <th class="product-remove">Remove</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $url = ASSET_URL.'assets';
                            $counter = 1; 
                            $total = 0;
                            foreach($cart as $value){
                                //$title = $value->book_title;
                                $id = $value->book_id;
                                $this->load->model("get_books");
                                $CI =& get_instance();
                                $book_results = $CI->get_books->getSpecific($id);
                                //$price = $value->book_price;
                                foreach($book_results as $row){
                                    $book_id = $row->book_id;
                                    $title = $row->book_title;
                                    $img = $row->book_image;
                                    $author = $row->book_author;
                                    $isbn = $row->ISBN_number;
                                    $price = $row->book_price;
                                    $delete_href = site_url('cart/delete/'.$book_id);
                                    echo"
                                    <tr class='cart_item'>
                                    <td>$counter </td>
                                    <td class='product-name'>
                                    <div class='media'>
                                    <img height='50' width='50' class='pull-left' src='$url/img/uploads/$img' alt=''>
                                    <div class='media-body'>
                                    <p class='font-large table-title'>$title</p>
                                    <p class='table-option'>$author</p>
                                    <p class='table-option'>$isbn</p>
                                    </div>
                                    </div>
                                    </td>

                                    <td class='product-price'>
                                    <span class='amount'>KES $price</span>
                                    </td>

                                    <td class='product-remove'>
                                    <a href='$delete_href' class='remove' title='Remove this item'><i class='fa fa-trash-o'></i></a>
                                    </td>
                                    ";
                                    $total = $total + $price;
                                    $counter = $counter + 1;   
                                }
                            }
                            ;
                        ?>
                    </tbody>

                    <tfoot>
                        <tr>
                            <td colspan="6" class="actions">
                                <a href="<?php $string = site_url('home'); echo"$string"; ?>" class="beta-btn primary">Continue Shopping<i class="fa fa-chevron-right"></i></a> 
                                <a href="<?php $string11 = site_url('checkout'); echo"$string11"; ?>" class="beta-btn primary" name="proceed">Proceed to Checkout <i class="fa fa-chevron-right"></i></a>
                            </td>
                        </tr>
                    </tfoot>
                </table>
                <!-- End of Shop Table Products -->
        </div>


        <!-- Cart Collaterals -->
        <div class="cart-collaterals">

            <div class="cart-totals pull-right">
                <div class="cart-totals-row"><h5 class="cart-total-title">Cart Totals</h5></div>
                <div class="cart-totals-row"><span>Cart Subtotal:</span> <span>KES <?php echo $total ?></span></div>
                <div class="cart-totals-row"><span>Order Total:</span> <span>KES <?php echo $total ?></span></div>
            </div>

            <div class="clearfix"></div>
        </div>
        <!-- End of Cart Collaterals -->
        <div class="clearfix"></div>

    </div> <!-- #content -->
    </div> <!-- .container -->