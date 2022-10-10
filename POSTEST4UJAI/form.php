<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"/>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Form Member</title>
</head>
<body>
<div class="container">
        <div class="intro">
            <p class="title">Hello!</p>
            <p class="description">Jadilah Member Premium</p>
    </div> 
    <div class="container">
        <main>
          <div class="py-5 text-center">
            <h2>Member Form</h2>
          </div>
        
          <div class="row g-5">
            <div class="col-md-7 col-lg-8">
              <h4 class="mb-3">Billing address</h4>
              <form class="needs-validation" action="hasil.php" method="post" >
                <div class="row g-3">
                  <div class="col-sm-6">
                    <label for="firstName" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="firstName" placeholder="" name="nama" required>
                    <div class="invalid-feedback">
                      Valid first name is required.
                    </div>
                  </div>
    
                  <div class="col-12">
                    <label for="username" class="form-label">Username</label>
                    <div class="input-group has-validation">
                      <span class="input-group-text">@</span>
                      <input type="text" class="form-control" id="username" placeholder="Username" name="username" required>
                    <div class="invalid-feedback">
                        Your username is required.
                      </div>
                    </div>
                  </div>
      
                  <div class="col-12">
                    <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                    <input type="email" class="form-control" id="email" placeholder="you@example.com"name="email">
                    <div class="invalid-feedback">
                      Please enter a valid email address for shipping updates.
                    </div>
                  </div>
      
                  <div class="col-12">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" class="form-control" id="address" placeholder="1234 Main St" name="address" required>
                    <div class="invalid-feedback">
                      Please enter your shipping address.
                    </div>
                  </div>
      
                  <div class="col-12">
                    <label for="address2" class="form-label">Phone Number <span class="text-muted">(Optional)</span></label>
                    <input type="tel" pattern="[0-9]{12}" class="form-control" id="address2"name="phonenumber" placeholder="08123456">
                  </div>
      
                  <div class="col-md-5">
                    <label for="country" class="form-label">Country</label>
                    <select class="form-select" id="country" name="country" required>
                      <option value="">Choose...</option>
                      <option value="indonesia">Indonesia</option>
                    </select>
                    <div class="invalid-feedback">
                      Please select a valid country.
                    </div>
                  </div>
      
                  <div class="col-md-4">
                    <label for="state" class="form-label">State</label>
                    <select class="form-select" id="state" name="state" required>
                      <option value="">Choose...</option>
                      <option value="samarinda">Samarinda</option>
                      <option value="balikpapan">Balikpapan</option>
                      <option value="tenggarong">Tenggarong</option>
                    </select>
                    <div class="invalid-feedback">
                      Please provide a valid state.
                    </div>
                  </div>
      
      
                <hr class="my-4">
                <input type="submit" value="submit">
              </form>
            </div>
          </div>
        </main>
        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; Hudzaifah Alqarani 2022</p>
            <ul class="list-inline">
              <li class="list-inline-item"><a href="#">Privacy</a></li>
              <li class="list-inline-item"><a href="#">Terms</a></li>
              <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
          </footer>
      </div>
      
      
        <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
      
        <script src="form-validation.js"></script>
        <script src="tes.js"></script>
</body>
    <script src="tes.js"></script>
</html>