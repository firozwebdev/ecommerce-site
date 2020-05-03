<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
    <h1 style="text-align:center;"></h1>
    <table  border="1">
      <!-- For test  -->
        <thead>
          <tr>
              <th>Id</th>
              <th>Coustomer Name</th>
              <th>Product Name</th>
              <th>Product Qty</th>
              <th>Product Price</th>
              <th>Location</th>

              <th>Customer Phone </th>
          </tr>
      </thead>
      <tbody>
          @foreach($del_orders as $data)

          <tr>

              <th scope="row">{{$data->id}}</th>
              <td>{{$data->customer->name}}</td>
              <td>
                  <?php
                      $name = json_decode($data->product_name);
                                      ?>
                      <ul>
                          @foreach($name as $value)
                          <li>{{ $value }}</li>
                          @endforeach
                      </ul>
              </td>
              <td>
                  <?php
                      $quantity = json_decode($data->product_qty);
                                      ?>
                      <ul>
                          @foreach($quantity as $qty)
                          <li>{{ $qty }}</li>
                          @endforeach
                      </ul>
              </td>
              <td>{{$data->total_price}}</td>
              <td>{{$data->delivery_address}}</td>
              <td>{{$data->phone_number}}</td>
            </tr>
            @endforeach

  </tbody>
</table>
</body>

</html>
