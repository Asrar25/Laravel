<style>
.container {
  padding: 2rem 0rem;
}

h4 {
  margin: 2rem 0rem 1rem;
}

.table-image {
  td, th {
    vertical-align: middle;
  }
}
.atag{
    text-decoration: none;
    background-color: rgb(111, 241, 111);
    width:80px;
    height:100px;
    color:black;
    border-radius: 5px;font-size: 20px;
    font-weight: 400;
}
.dtag{
    text-decoration: none;
    background-color: rgb(221, 39, 39);
    width:80px;
    height:100px;
    color:black;
    border-radius: 5px;font-size: 20px;
    font-weight: 400;
}
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<div style="background-color:blue;height:80px;">
<h2 style="text-align:center">ProdZ</h2>
</div>
<div class="container">
    <div class="row">
      <div class="col-12">
          <table class="table table-image"  style="text-align:center;">
            <thead>
              <tr>
                <th scope="col">SI</th>
                <th scope="col">IMAGE</th>
                <th scope="col">NAME</th>
                <th scope="col">BRAND</th>
                <th scope="col">PRICE</th>
                <th scope="col">QTY</th>
                <th scope="col">OPERATE</th>

              </tr>
            </thead>
            <tbody>
              <tr>
            @foreach($details as $detail)
            <tr>
                <td>{{$detail['id']}}</td>
                <td class="w-25"><img src="{{$detail['image']}}" style="heigth:100px;width:100px;"/></td>
                <td><a href="/product/{{$detail['product_name']}}">{{$detail['product_name']}}</a></td>
                <td>{{$detail['model']}}</td>
                <td>{{$detail['price']}}</td>
                <td>{{$detail['quantity']}}</td>
                <td><a class="atag" href="">Update</a><a href="" class="dtag">Delete</a></td>
            </tr>
        @endforeach
            </tbody>
          </table>
      </div>
    </div>
  </div>
