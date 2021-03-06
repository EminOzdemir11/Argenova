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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src='main.js'></script>
</head>

<style>
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
    

</style>


<body>

    <script>
        const form1 = document.getElementById('form1');
        const name = document.getElementById('name');
        const email = document.getElementById('email');
        const password = document.getElementById('password');
        const phone = document.getElementById('phone');
        const comment = document.getElementById('comment');
    
        form1.addEventListener('submit', (e) => {
            e.preventDefault();
    
            checkInputs();
        });
    
        function checkInputs() {
            const nameValue = name.value.trim();
            const emailValue = email.value.trim();
            const passwordValue = password.value.trim();
            const phoneValue = phone.value.trim();
            const commentValue = comment.value.trim();
        }


    </script>

    <form id="form1" name="form1" onkeyup="control('form1')" class="m-3">
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
                        <input type="text" class="form-control" id="name" placeholder="Ad Soyad">
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <small>Error Message</small>
                    </div>
                    <div class="col">
                        <input type="email" class="form-control" id="email" placeholder="Email">
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <small>Error Message</small>
                    </div>
                </div>
                
                <div class="mb-3">
                    <input type="password" class="form-control" id="password" placeholder="??ifre">
                    <i class="fas fa-check-circle"></i>
                    <i class="fas fa-exclamation-circle"></i>
                    <small>Error Message</small>
                </div>

                <div class="row g-3 mb-3">
                    
                    <div class="col-sm-8">
                        <input type="tel" class="form-control" id="phone" placeholder="Telefon">
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <small>Error Message</small>
                    </div>

                    <div class="col-sm-4">
                        <select id="select" name="select" class="form-control">
                            <option selected>Cinsiyet Se??iniz</option>
                            <option>Kad??n</option>
                            <option>Erkek</option>
                        </select>
                        <small>Error Message</small>
                    </div>
                </div>
               
                <div class="mb-4">
                    <textarea class="form-control" id="comment" placeholder="A????klama"></textarea>
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