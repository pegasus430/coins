<!-- create.blade.php -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laravel 5 CRUD Tutorial With Example From Scratch </title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
      <h2>Create A Form</h2><br  />
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
        </div><br />
      @endif
      @if (\Session::has('success'))
        <div class="alert alert-success">
          <p>{{ \Session::get('success') }}</p>
        </div><br />
      @endif
      <form method="post" action="{{url('forms')}}">
        {{csrf_field()}}
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <label for="CoinName">CoinName:</label>
            <input type="text" class="form-control" name="coinname">
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="CoinPrice">CoinPrice:</label>
              <input type="text" class="form-control" name="coinprice">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4" style="margin-left:38px">

                 <lable>Keep</lable>
                   <input type="radio" name="radio" value="keep">
                 <lable>Port</lable>
                     <input type="radio" name="radio" value="port">
            </div>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4" style="margin-left:38px">
                <lable>Level</lable>
                <select name="dropdown">
                  <option value="beginner">Beginner</option>
                  <option value="intermediate">Intermediate</option>
                  <option value="advance">Advance</option>  
                </select>
            </div>
        </div>
         <div class="row">
          <div class="col-md-4"></div>
            <div class="form-group col-md-4" style="margin-left:38px">

               <lable>Exchanges :</lable>
               <div class="checkbox">
                  <label><input type="checkbox" value="coindesk" name="option[]">Coindesk</label>
               </div>
                <div class="checkbox">
                   <label><input type="checkbox" value="coinbase" name="option[]">CoinBase</label>
              </div>
               <div class="checkbox">
                  <label><input type="checkbox" value="zebpay" name="option[]">Zebpay</label>
               </div>
            </div>
        </div>

        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success" style="margin-left:38px">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </body>
</html>