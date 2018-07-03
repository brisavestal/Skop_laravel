const { loginForm } = document.forms


  loginForm.onsubmit = function onloginSubmit(env){
    env.preventDefault();

    if(validateLoginForm()){
      console.log('Los datos estan correctos');
    }
  }

  function validateLoginForm(){
    const {email, password} = loginForm.elements;

    if(!validateEmail(email.value)) return false;
    if(!validatePassword(password.value)) return false;

    if( validateEmail(email.value) && validatePassword(password.value))

    window.location.href = 'http://localhost:8000/';
    return true;
  }

  function validateEmail(email){
    var re = /^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

    if(re.test(email)) return true;

    swal("Error en el email", "Ingresa el email de nuevo", "error");
    return false;
  }

  function validatePassword(password){
    var re = /^.{3,}$/;

    if(re.test(password)) return true;

    swal("Error en la constraseña", "Ingresela de nuevo", "error");
    return false;
  }
