@extends('admin.master')
 @section('content')

 <div class="content-page">
     <div class="content">

         <!-- Start Content-->
         <div class="row">
             <div class="col-lg-12">
                 <div class="card-box order-card-box">
                     <h4>Order Details</h4>
                     <div class="row">
                         <div class="col-lg-12">
                             <div class="divider"></div>
                         </div>
                         <div class="col-lg-3 offset-6 col-sm-6 offset-sm-0 col-xs-12 offset-xs-0">
                             <div class="order-status-action">
                                 <h5>Payment Status</h5>
                                 <select class="form-control payment-status-select">
                                     <option>Paid</option>
                                     <option>Unpaid</option>
                                 </select>
                             </div>
                         </div>

                         <div class="col-lg-3 col-sm-6">
                             <div class="order-status-action">
                                 <h5>Delivery Status</h5>
                                 <select class="form-control delivery-status-select">
                                     <option>Pending</option>
                                     <option>On Review</option>
                                     <option>On Delivery</option>
                                     <option>Delivered</option>
                                 </select>
                             </div>
                         </div>
                         <div class="col-lg-12">
                             <div class="divider"></div>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-lg-3 col-sm-6">
                             <div class="order-person-info">
                                 <h5> customer name </h5>
                                 <p>superadmin@admin.com</p>
                                 <p> customer phone_number </p>
                                 <p> customer delivery_address </p>
                             </div>
                         </div>

                         <div class="col-lg-3 offset-6 col-sm-6 order-details-col">
                             <div class="order-details-info">
                                 <ul>
                                     <li>
                                         <span class="left">Order #</span>
                                         <span class="right">
                                             <span class="order-number">UIUY01254879</span>
                                         </span>
                                     </li>
                                     <li>
                                         <span class="left">Order Status</span>
                                         <span class="right">
                                             <span class="order-status pending">pending</span>
                                         </span>
                                     </li>
                                     <li>
                                         <span class="left">Order Date</span>
                                         <span class="right">
                                             27-07-2019 00:07 AM
                                         </span>
                                     </li>
                                     <li>
                                         <span class="left">Total amount</span>
                                         <span class="right">৳ 345.00</span>
                                     </li>
                                     <li>
                                         <span class="left">Payment method</span>
                                         <span class="right">Cash on delivery</span>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-lg-12">

                             <div class="table-responsive order-list-table">
                                 <table class="table">
                                     <thead>
                                         <tr>
                                             <th class="number">#</th>
                                             <th class="description">DESCRIPTION</th>
                                             <th class="quantity">QTY</th>
                                             <th class="price">PRICE</th>
                                             <th class="total">TOTAL</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                         <tr>
                                             <td class="number">1</td>
                                             <td class="description">
                                                 <span class="product-name">Demo Product 006</span>
                                                 <span class="product-color-size">
                                                    black - xl
                                                 </span>
                                             </td>
                                             <td class="quantity">3</td>
                                             <td class="price">৳ 345.00</td>
                                             <td class="total">৳ 1345.00</td>
                                         </tr>
                                     </tbody>
                                 </table>
                             </div>

                         </div>

                     </div>
                     <div class="row">

                         <div class="col-lg-4 offset-8 order-sub-total-col">
                             <div class="order-details-info order-sub-total-info">
                                 <ul>
                                     <li>
                                         <span class="left">Sub Total :</span>
                                         <span class="right">৳ 345.00</span>
                                     </li>
                                     <li>
                                         <span class="left">Tax :</span>
                                         <span class="right">৳ 0.00</span>
                                     </li>
                                     <li>
                                         <span class="left">Shipping :</span>
                                         <span class="right"> ৳ 20.00 </span>
                                     </li>
                                     <li>
                                         <span class="left">TOTAL :</span>
                                         <span class="right">
                                             <span class="total-amount-bold">
                                                 ৳ 345.00
                                             </span>
                                         </span>
                                     </li>
                                 </ul>
                             </div>
                         </div>
                     </div>

                     <div class="row">

                         <div class="col-lg-12 text-right">
                             <a class="order-details-print">
                                 <i class="fas fa-print"></i>
                             </a>
                         </div>
                     </div>

                 </div>
             </div>
         </div>

     </div>
 </div>
 </div>

@endsection
