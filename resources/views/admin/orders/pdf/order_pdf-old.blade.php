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
              <th>Customer Name</th>
              <th>Customer Phone number</th>
          </tr>
      </thead>
    <tr>
      <td>{{$pen_orders->customer->name}}</td>
      <td>  {{$pen_orders->customer->email}}</td>
      <td>{{$pen_orders->customer->phone_number}}</td>
      <td>{{$pen_orders->customer->delivery_address}}</td>
</th>
    </tr>
  </tbody>
</table>
</body>

</html>
