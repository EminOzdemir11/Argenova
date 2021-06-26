<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.18/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="/Css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src='main.js'></script>
    
</head>



<body>
    
    <form id="form1" class="m-3">
        <h4 id="iletisim" style="text-align: center;">İletişim Formu</h4>

        <div class="row">
            <div class="col-md-2">

            </div>
            <div id="div4" class="col-md-3">
                <div style="color: floralwhite;" class="container">
                    <p style="color: floralwhite;" class="whitetext">LET'S TALK</p>
                    <h3 style="color: floralwhite;" class="whitetext">Speak With Expert Engineers</h3>
                    <div style="padding-top: 30px;" class="row">
                        <div class="col-md-3">
                            <i class="fas fa-home"></i>
                        </div>
                        <div class="row col-md-9">
                            <label><b>Email:</b></label>
                            <label>info@gmail.com</label>
                        </div>
                    </div>
                    <div style="padding-top: 30px;" class="row">
                        <div class="col-md-3">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="row col-md-9">
                            <label><b>Phone:</b></label>
                            <label>555 444 99 77</label>
                        </div>
                    </div>
                    <div style="padding-top: 30px;" class="row">
                        <div class="col-md-3">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="row col-md-9">
                            <label><b>Address:</b></label>
                            <label>Niksar/Tokat</label>
                        </div>
                    </div>
                </div>
            </div>
            <div id="div8" class="col-md-5">
                <hr>
                <div class="row g-3 mb-3">
                    <div class="col">
                        <div style="background-color: #fff;" class="form-control">
                            <input type="text" class="form-control" id="name" placeholder="Ad Soyad">
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error Message</small>
                        </div>   
                    </div>
                    <div class="col">
                        <div style="background-color: #fff;" class="form-control">
                            <input type="email" class="form-control" id="email" placeholder="Email">
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error Message</small>
                        </div>
                        
                    </div>
                </div>
                
                <div class="mb-3">
                    <div style="background-color: #fff;" class="form-control">
                        <input type="password" class="form-control" id="password" placeholder="Şifre">
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <small>Error Message</small>
                    </div>
                    
                </div>

                <div class="row g-3 mb-3">
                    
                    <div class="col-sm-8">
                        <div style="background-color: #fff;" class="form-control">
                            <input type="tel" class="form-control" id="phone" placeholder="Telefon">
                            <i class="fas fa-check-circle"></i>
                            <i class="fas fa-exclamation-circle"></i>
                            <small>Error Message</small>
                        </div>
                        
                    </div>

                    <div class="col-sm-4">
                        <div style="background-color: #fff;" class="form-control">
                            <select id="select" class="form-control" name="select">
                                <option selected>Cinsiyet Seçiniz</option>
                                <option>Kadın</option>
                                <option>Erkek</option>
                            </select>
                        </div>
                    </div>
                </div>
               
                <div class="mb-4">
                    <div>
                        <textarea id="comment" class="form-control" placeholder="Açıklama"></textarea>
                    </div>
                </div>
            
                <div>
                    <button id="button" type="submit" class="btn btn-lg">Submit Now</button>
                </div>
            </div>
            <div class="col-md-2">

            </div>
        </div>
    </form>   
    <script src="/Script/script.js"></script>
</body>



</html>