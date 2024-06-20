
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

    <div style=" background:linear-gradient(115deg, #56d8e4 10%, #9f01ea 90%);height:80px;">
    <h2 style="text-align:center">ProdZ</h2><a class="btn btn-primary" href="/home" role="button" style="position: absolute;
  right: 50px;top:20px;">Back</a>
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
                  </tr>
                </thead>
                <tbody>
            <tr>
                <td class="w-25">{{$product['id']}}</td>
                <td><img src="/images/{{$product['image']}}" style="heigth:100px;width:100px;"/></td>
                <td>{{$product['product_name']}}</td>
                <td>{{$product['model']}}</td>
                <td>{{$product['price']}}</td>
                <td>{{$product['quantity']}}</td>
            </tr>
                </tbody>
              </table>
          </div>
        </div>
      </div>

