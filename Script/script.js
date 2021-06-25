const form1 = document.getElementById('form1');
const name = document.getElementById('name');
const email = document.getElementById('email');
const password = document.getElementById('password');
const phone = document.getElementById('phone');
const button = document.getElementById('button');


form1.addEventListener('submit', function(e){  
    e.preventDefault();
    checkInputs();
});

const checkInputs = () => {

    const nameValue = name.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const phoneValue = phone.value.trim();   

    var regexAlphaNum = /^[a-zA-Z]+$/;
    var regexPhone = /^[2-9]\d{2}[2-9]\d{2}\d{4}$/;
    var regexEmail = /^(([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5}){1,25})+([;.](([a-zA-Z0-9_\-\.]+)@{[a-zA-Z0-9_\-\.]+0\.([a-zA-Z]{2,5}){1,25})+)*$/;

    if (nameValue === '') {
        setErrorFor(name,'İsim boş bırakılamaz')
        console.log('başarısız');
    }
    

    if (emailValue === '') {
        setErrorFor(email,'Email boş bırakılamaz')
        console.log('başarısız')
    }
    

    if (passwordValue === '') {
        setErrorFor(password,'Şifre boş bırakılamaz')
        console.log('başarısız')
    }
    else{
        setSuccessFor(password)
        console.log('başarılı');
    }

    if (phoneValue === '') {
        setErrorFor(phone,'Telefon boş bırakılamaz')
        console.log('başarısız')
    }
    

    if (nameValue !== '' && regexAlphaNum.test(nameValue) === false) {
        setErrorFor(name,'Geçersiz isim');
        Swal.fire({
            icon: 'error',
            title: 'Hoop Nereye...',
            text: 'İsim sadece harflerden oluşmalıdır!'
        })    
    }else if (nameValue !== '' && regexAlphaNum.test(nameValue) === true){
        setSuccessFor(name);
    }

    if (emailValue !== '' && regexEmail.test(emailValue) === false) {
        setErrorFor(email,'Geçersiz email')
        Swal.fire({
            icon: 'error',
            title: 'Hoop Nereye...',
            text: 'Email yanlış!'
        })
    }else if (emailValue !== '' && regexEmail.test(emailValue) === true){
        setSuccessFor(email);
    }

    else if (phoneValue !== '' && regexPhone.test(phoneValue) === false) {
        setErrorFor(phone,'Geçersiz Telefon')
        Swal.fire({
            icon: 'error',
            title: 'Hoop Nereye...',
            text: 'Telefon numarası yanlış!'
        })
    }else if (phoneValue !== '' && regexPhone.test(phoneValue) === false){
        setSuccessFor(phone);
    }

    if (nameValue !== '' && emailValue !== '' && passwordValue !== '' && phoneValue !== '' && regexAlphaNum.test(nameValue) === true && regexEmail.test(emailValue) === true && regexPhone.test(phoneValue) === true) {
        Swal.fire(
            'Başarılı',
            'Kayıt başarıyla tamamlandı',
            'success'
        )  
        console.log('swal fire is success');
    }  else{
        console.log('swal fire is denied');
    } 
    
}

const setErrorFor = (input, message) =>{
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');
    formControl.className = 'form-control error';
    small.innerText = message;
}

function setSuccessFor(input){
    const formControl = input.parentElement;
    formControl.className = 'form-control success';
}
  



    



