<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h3>Halo, {{ $user->email }}</h3>

<table>
  <tr>
    <th>Make</th>
    <th>Model</th>
    <th>Produced On</th>
  </tr>
  <tr>
    <td>{{ $user->make }}</td>
    <td>{{ $user->model }}</td>
    <td>{{ $user->produced_on }}</td>
  </tr>
</table>

</body>
</html>