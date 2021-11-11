<!DOCTYPE html>
<html lang="en">
<head>
    <title>Praktikum Modul 2</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <!-- Bootstrap & Jquery Script -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <div class="container my-5 shadow-lg rounded">
        <h1 class="text-center py-5">REGISTRATION FORM</h1>
        <form class="needs-validation p-sm-5 p-5" action="https://getbootstrap.com/docs/4.6/components/forms/#form-groups">
            <div class="form-group">
              <label for="name"><Strong> Name: </Strong></label>
              <input type="text" class="form-control" id="name" placeholder="Enter your name..." required pattern="[a-zA-z][a-zA-z\s]*" title="Enter only letters!">
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="form-group">
              <label for="address"><Strong> Address: </Strong></label>
              <input type="text" class="form-control" id="address" placeholder="Enter your address..." required>
            </div>
            <div class="form-group">
              <label for="email"><Strong> E-mail Address: </Strong></label>
              <input type="email" class="form-control" id="email" placeholder="Enter your e-mail..." required>
            </div>
            <div class="form-group">
              <label for="password"><Strong> Password: </Strong></label>
              <input type="password" class="form-control" id="password" placeholder="Enter your password..." required minlength="8" maxlength="16">
            </div>
            <div class="form-group">
              <label for="tel"><Strong> Telephone: </Strong></label>
              <input type="tel" class="form-control" id="tel" placeholder="Enter your telephone number..." required minlength="7" pattern="[0-9]*" title="Enter only telephone numbers!">
            </div>
            <div class="form-group">
              <label for="course"><Strong> Select your course: </Strong></label>
                <select class="form-control" name="course" id="course" required>
                    <option value=""></option>
                    <option value="BTECH">BTECH</option>
                    <option value="BBA">BBA</option>
                    <option value="BCA">BCA</option>
                    <option value="B.COM">B.COM</option>
                    <option value="GEEKFORGEEKS">GEEKFORGEEKS</option>
                </select>
            </div>
            <div class="form-group">
                <label for="zipcode"><Strong> Zip Code: </Strong></label>
                <input type="text" class="form-control" id="zipcode" placeholder="Enter your telephone number..." required pattern="[0-9]{6}" title="Enter only 6 Zip Code numbers!">
              </div>
              <div class="d-flex py-2">
                  <button type="submit" class="btn btn-primary">Send</button>
                  <button type="reset" class="btn btn-danger ml-auto justify-content-end">Reset</button>
              </div>
          </form>
    </div>




</body>
</html>
