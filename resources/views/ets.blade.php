<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Peserta Vaksinasi</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <!-- Bootstrap & Jquery Script -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        button:hover{
            transition: all .3s ease;
            transform: scale(1.025);
        }

        .container{
            border: 2px solid black;
        }
    </style>
</head>
<body>

    <!-- form container -->
    <div class="container my-5">
            <div class="id my-2">
                <p class="m-0"><strong> Muhammad Ridho Waradana </strong></p>
                <p class="m-0"><strong> Ridho </strong></p>
                <p class="m-0"><strong> 5026201084 </strong> </p>
            </div>

            <!-- form vaksin -->
            <form action="https://getbootstrap.com/docs/4.6/components/forms/" class="needs-validation px-sm-1 pb-sm-1" novalidate>
                <h1 class="form-title text-center my-4">
                    Form Input Peserta Vaksinasi
                </h1>

                <!-- input nama -->
                <div class="form-group row">
                  <label for="nama" class="col-md-3 col-form-label"><strong> Nama Peserta <span class="d-md-none d-inline">:</span></strong></label>
                  <div class="col-1 text-center d-md-inline d-none">
                    <strong>:</strong>
                  </div>
                  <div class="col-md-8">
                      <input type="text" class="form-control" id="nama" placeholder="Tulis nama lengkapmu di sini.." required minlength="10" pattern="[a-zA-z][a-zA-z\s]*">
                      <div class="valid-feedback">
                        Sudah benar!
                      </div>
                      <div class="invalid-feedback">
                        Mohon masukkan namamu menggunakan huruf!
                      </div>
                  </div>
                </div>

                <!-- input NIK -->
                <div class="form-group row">
                  <label for="nik" class="col-md-3 col-form-label"><strong>NIK <span class="d-md-none d-inline">:</span></strong></label>
                  <div class="col-1 text-center  d-md-inline d-none">
                    <strong>:</strong>
                  </div>
                  <div class="col-md-8">
                      <input type="text" class="form-control" id="nik" placeholder="Tulis NIK-mu di sini" required pattern="[0-9]*" minlength="16" maxlength="16">
                      <div class="valid-feedback">
                        Sudah benar!
                      </div>
                      <div class="invalid-feedback">
                        Mohon masukkan 16 angka NIK!
                      </div>
                  </div>
                </div>

                <!-- select vaksin -->
                <div class="form-group row">
                  <label for="vaksin" class="col-md-3 col-form-label"><strong> Jenis Vaksin <span class="d-md-none d-inline">:</span></strong></label>
                  <div class="col-1 text-center d-md-inline d-none">
                    <strong>:</strong>
                  </div>
                  <div class="col-md-8">
                      <select class="custom-select form-control" id="vaksin" required>
                        <option value="" selected>Pilih jenis vaksin...</option>
                        <option value="AZ">AZ</option>
                        <option value="Sinovac">Sinovac</option>
                        <option value="Moderna">Moderna</option>
                      </select>
                      <div class="valid-feedback">
                        Sudah benar!
                      </div>
                      <div class="invalid-feedback">
                        Mohon pilih salah satu opsi vaksin!
                      </div>
                  </div>
                </div>

                <!-- input batch -->
                <div class="form-group row">
                    <label for="batch" class="col-md-3 col-form-label"><strong> No. Batch <span class="d-md-none d-inline">:</span></strong></label>
                    <div class="col-1 text-center d-md-inline d-none">
                      <strong>:</strong>
                    </div>
                    <div class="col-md-8">
                        <input type="text" class="form-control" id="batch" placeholder="Tulis nomor batch kamu di sini.." required pattern="[a-zA-Z0-9]*">
                        <div class="valid-feedback">
                          </div>
                          <div class="invalid-feedback">
                            Mohon masukkan kombinasi angka dan huruf dari No. Batch anda!
                          </div>
                    </div>
                </div>

                <!-- submit & reset button -->
                <div class="row my-5">
                    <div class="col-sm-6 col-12 text-center">
                        <button type="submit" class="btn" style="color:white; background-color: rgb(0, 0, 216); width: 200px;">Simpan</button>
                    </div>
                    <div class="col-sm-6 col-12 text-center mt-3">
                        <button type="reset" class="btn" style="background-color: rgb(21, 255, 0); width: 200px;">Reset</button>
                    </div>
                </div>
              </form>
    </div>


    <!-- script -->
    <script>
        (function() {
          'use strict';
          window.addEventListener('load', function() {
            var forms = document.getElementsByClassName('needs-validation');
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();
    </script>

</body>
</html>
