<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src='main.js'></script>
</head>

<style>
    #braintech{
        padding-top: 30px;
        padding-bottom: 15px;
        color: #000080;
    }
    #nav1{
        background-image: linear-gradient(to right, #000080, #0000ff);
        padding-bottom: 10px;
        padding-top: 10px;
    }
    #iletisim{
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size: x-large;
    }
    .form-control{
        border: rgba(190, 218, 218, 0.267);
        padding: 20px;
        background-color: rgba(190, 218, 218, 0.267);
        font-family: 'Courier New', Courier, monospace;
    }
    .form-control:focus{
        background-color: rgba(190, 218, 218, 0.267);
    }
    #select{
        background-color: rgb(158, 201, 202);
    }
    #button{
        color: floralwhite;
        padding: 16px 40px;
        border-radius: 30px;
        background-image: linear-gradient(to right, #000080, #0000ff);
    }
    #button:hover{
        background-image: linear-gradient(to right, #0000ff, #000080);
    }
    .container{
        padding-top: 50px;
    }
    #div4{
        border-radius: 5px;
        background-image: linear-gradient(to right, #0000cd, #4876ff);
    }
    #div8{
        padding-left: 50px;
    }
    a{
        font-family:Arial, Helvetica, sans-serif;
        margin-right: 40px;
    }
    #navbardiv1{
        background-image: linear-gradient(to right, #000080, #0000ff); 
        padding-top: 5px;
        padding-bottom: 5px;
    }

</style>



<body>
    <div class="header">
        <div class="row">
            <div class="col-md-1"></div>
            <div id="braintech" class="col-md-3">
                <h3 style="font-family: 'Courier New', Courier, monospace;"><b>Braintech</b></h3>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div style="padding-top: 10px;" class="col-md-2">
                        <p><b>Address</b></p>
                        <p style="font-style: italic;">Niksar-Tokat</p>
                    </div>
                    <div style="padding-top: 10px;" class="col-md-2">
                        <p><b>Email</b></p>
                        <p style="font-style: italic;">info@gmail.com</p>
                    </div>
                    <div style="padding-top: 10px;" class="col-md-2">
                        <p><b>Phone</b></p>
                        <p style="font-style: italic;">0555 888 44 22</p>
                    </div>
                    <div class="col-md-3"></div>
                </div>
            </div>
        </div>
        <div id="navbardiv1" style="background-image: linear-gradient(to right, #000080, #0000ff); padding-top: 10px;" class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a style="color: floralwhite;" class="nav-link" href="#"><b>Home</b> <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a style="color: floralwhite;" class="nav-link" href="#"><b>About</b></a>
                        </li>
                        <li class="nav-item">
                            <a style="color: floralwhite;" class="nav-link" href="#"><b>Services</b></a>
                        </li>
                        <li class="nav-item">
                            <a style="color: floralwhite;" class="nav-link" href="#"><b>Pages</b></a>
                        </li>
                        <li class="nav-item">
                            <a style="color: floralwhite;" class="nav-link" href="#"><b>Blog</b></a>
                        </li>
                        <li class="nav-item">
                            <a style="color: floralwhite;" class="nav-link" href="#"><b>Contact</b></a>
                        </li>
                    </ul>
                    </div>
                </nav>
            </div>
            <div class="col-md-3"></div>  
            <div style="padding-top: 13px; color:cornsilk" class="col-md-3">
                <a>Ara</a>
                <a>??ns</a>
                <a>Tw</a>
                <a>Git</a>
            </div>
        </div>
        <div>
            <img src="https://media.edutopia.org/styles/responsive_2880px_16x9/s3/masters/2020-12/a3175ir1035crop.jpg" width="1530" height="400">
        </div>
    </div>

    <form id="form1" class="m-3">
        <h4 id="iletisim" style="text-align: center;">??leti??im Formu</h4>

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
                    <input type="text" class="form-control" placeholder="Ad Soyad">
                    </div>
                    <div class="col">
                    <input type="email" class="form-control" placeholder="Email">
                    </div>
                </div>
        
                <div class="mb-3">
                <input type="password" class="form-control" placeholder="??ifre">
                </div>
        
                <div class="row g-3 mb-3">
                    <div class="col-sm-8">
                    <input type="tel" class="form-control" placeholder="Telefon">
                    </div>
                    <div class="col-sm-4">
                        <select id="select" class="form-control">
                        <option selected>Cinsiyet Se??iniz</option>
                        <option>Kad??n</option>
                        <option>Erkek</option>
                        </select>
                    </div>
                </div>
                
                <div class="mb-4">
                    <textarea class="form-control" placeholder="A????klama"></textarea>
                </div>
                <div>
                    <button id="button" type="submit" class="btn btn-lg">Submit Now</button>
                </div>
            </div>
            <div class="col-md-2">

            </div>
        </div>
    </form>
      
</body>
</html>