<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
    *{
      margin: 0;
      padding: 0;
      outline: none;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }
    body{
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 100vh;
      padding: 10px;
      font-family: 'Poppins', sans-serif;
      background-color: white;
    }
    .container{
      max-width: 800px;
      background: #fff;
      width: 800px;
      padding: 25px 40px 10px 40px;
      box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
    }
    .container .text{
      text-align: center;
      font-size: 41px;
      font-weight: 600;
      font-family: 'Poppins', sans-serif;
      background: -webkit-linear-gradient(right, #56d8e4, #9f01ea, #56d8e4, #9f01ea);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }
    .container form{
      padding: 30px 0 0 0;
    }
    .container form .form-row{
      display: flex;
      margin: 32px 0;
    }
    form .form-row .input-data{
      width: 100%;
      height: 40px;
      margin: 0 20px;
      position: relative;
    }
    form .form-row .textarea{
      height: 70px;
    }
    .input-data input,
    .textarea textarea{
      display: block;
      width: 100%;
      height: 100%;
      border: none;
      font-size: 17px;
      border-bottom: 2px solid rgba(0,0,0, 0.12);
    }
    .input-data input:focus ~ label, .textarea textarea:focus ~ label,
    .input-data input:valid ~ label, .textarea textarea:valid ~ label{
      transform: translateY(-20px);
      font-size: 14px;
      color: #3498db;
    }
    .textarea textarea{
      resize: none;
      padding-top: 10px;
    }
    .input-data label{
      position: absolute;
      pointer-events: none;
      bottom: 10px;
      font-size: 16px;
      transition: all 0.3s ease;
    }
    .textarea label{
      width: 100%;
      bottom: 40px;
      background: #fff;
    }
    .input-data .underline{
      position: absolute;
      bottom: 0;
      height: 2px;
      width: 100%;
    }
    .input-data .underline:before{
      position: absolute;
      content: "";
      height: 2px;
      width: 100%;
      background: #3498db;
      transform: scaleX(0);
      transform-origin: center;
      transition: transform 0.3s ease;
    }
    .input-data input:focus ~ .underline:before,
    .input-data input:valid ~ .underline:before,
    .textarea textarea:focus ~ .underline:before,
    .textarea textarea:valid ~ .underline:before{
      transform: scale(1);
    }
    .submit-btn .input-data{
      overflow: hidden;
      height: 45px!important;
      width: 25%!important;
    }
    .submit-btn .input-data .inner{
      height: 100%;
      width: 300%;
      position: absolute;
      left: -100%;
      background: -webkit-linear-gradient(right, #56d8e4, #9f01ea, #56d8e4, #9f01ea);

    }

    .submit-btn .input-data input{
      background: none;
      border: none;
      color: #fff;
      font-size: 17px;
      font-weight: 500;
      text-transform: uppercase;
      letter-spacing: 1px;
      cursor: pointer;
      position: relative;
      z-index: 2;
    }
    @media (max-width: 700px) {
      .container .text{
        font-size: 30px;
      }
      .container form{
        padding: 10px 0 0 0;
      }
      .container form .form-row{
        display: block;
      }
      form .form-row .input-data{
        margin: 35px 0!important;
      }
      .submit-btn .input-data{
        width: 40%!important;
      }
    }
    .firstdiv{

      height:80px;
      margin-left:20px;
      width: 70%;
      padding: 10px;
      display:flex;
      gap:30px;
    text-decoration: none;
    }




        </style>
    <div class="container">
        <div class="divb" style="height:50px;background:-webkit-linear-gradient(right, #56d8e4, #9f01ea, #56d8e4, #9f01ea);color: #fff;">
    <h3 style="text-align:center;position:relative;top:10px;">ADD Product</h3><a class="backbtn" href="/home" role="button" style="position:relative;left:90%;bottom:30%;text-decoration: none;">Back</a>
        </div>
        <form action="addproduct" method="post">
            @csrf

           <div class="form-row">

              <div class="input-data">
                 <input type="text"  name="product_name">
                 <div class="underline"></div>
                 <label for="">Name</label>
              </div>
              <div class="input-data">
                 <input type="text"  name="model">
                 <div class="underline"></div>
                 <label for="">Brand</label>
              </div>
           </div>
           <div class="form-row">
              <div class="input-data">
                 <input type="text" name="price">
                 <div class="underline"></div>
                 <label for="">Price</label>
              </div>
              <div class="input-data">
                 <input type="text"  name="quantity">
                 <div class="underline"></div>
                 <label for="">Quantity</label>
              </div>
           </div>
           <div class="form-row">
            <div class="input-data">
               <input type="file"  name="image">
               <div class="underline"></div>
               <label for="">Product Image</label>
            </div>
         </div>

           <div class="form-row">
           <div class="input-data textarea">
              <div class="form-row submit-btn">
                 <div class="input-data">
                    <div class="inner"></div>
                    <input type="submit" value="Save">
                 </div>
              </div>
        </form>
        </div>
