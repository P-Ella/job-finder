const form = document.querySelector('#form');
const username= document.querySelector('username');
const email = document.querySelector('email');
const password = document.querySelector('password');
const cpassword = document.querySelector('cpassword');

form.addEventListener ('submit', (e)=> {
    if (!validateInputs()) {
        e.preventDefault();
    }
} )

function validateInputs() {
    const usernameval = username.value.trim()
    const emailval = email.value.trim();
    const passwordval = password.value.trim();
    const cpasswordval = cpassword.value.trim();
    let success = true

    if(usernameval==='') {
        success = false;
        setError (username,'username is requred' )
    }
    else{
        setSuccess(username)
    }

    if(emailval==='') {
        success = false;
        setError (email,'email is requred' )
    }
    else if (!validateEmail(emailval) ) {
        success = false;
        setError(email,'please enter a valide email' )
    }
    else{
        setSuccess(email)
    }

    if(passwordval ==='') {
        success = false;
        setError (password,'password is requred' )
    }
    else{
        setSuccess(password)
    }

    if(cpasswordval==='') {
        success = false;
        setError (cpassword,'cpassword does not match' )
    }
    else{
        setSuccess(username)
    }

    return success;

}