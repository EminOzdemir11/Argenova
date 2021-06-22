const form1 = document.getElementById('form1');
const name = document.getElementById('name');
const email = document.getElementById('email');
const password = document.getElementById('password');
const phone = document.getElementById('phone');

form1.addEventListener('submit', function(e){
    e.preventDefault();
    checkInputs();
});

const checkInputs = () => {

    const nameValue = name.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const phoneValue = phone.value.trim();   

    if (nameValue === '') {
        setErrorFor(name,'İsim boş bırakılamaz')
        console.log('başarısız')
    }else{
        setSuccessFor(name)
        console.log('başarılı');
    }

    if (emailValue === '') {
        setErrorFor(email,'Email boş bırakılamaz')
        console.log('başarısız')
    }
    else{
        setSuccessFor(email)
        console.log('başarılı');
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
    else{
        setSuccessFor(phone)
        console.log('başarılı');
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
