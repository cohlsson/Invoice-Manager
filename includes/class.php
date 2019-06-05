<?php
// Class to render certain HTML elements
class htmlElement{
  public function renderHead(){
    $head="
    <!DOCTYPE html>
    <html lang='en' dir='ltr'>
      <head>
        <meta charset='utf-8'>
        <title>Invoice Manager</title>
        <!-- Bootstrap css and js cdn -->
        <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
        <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>
      </head>
    ";
    echo $head;
  }
  public function renderLogin(){
    $loginform="
      <body>
        <div class='container'>
          <div class='col-sm-12'>
            <h1>You gotta log in first yo!</h1>
            <form>
              <div class='form-group'>
                <label for='email'>Email</label>
                <input type='email' class='form-control' id='email' name='email' aria-describedby='email' placeholder='Enter email'>
              </div>
              <div class='form-group'>
                <label for='pw'>Password</label>
                <input type='password' class='form-control' id='pw' name='pw' aria-describedby='password' placeholder='Password'>
              </div>
              <button type='submit' class='btn btn-primary'>Login</button>
            </form>
          </div>
        </div>
      </body>
    </html>
    ";
    echo $loginform;
  }
}
?>
