  // Código personalizado de Javascript

new Vue({

  el: '#app_login',

  data: {

    usuario: '',

    clave:  ''
  },
  methods:{

    iniciarSesion: function(){
      
      axios.post('/iniciar-sesion', {
        email: this.usuario,
        clave: this.clave
      })
        .then( response => {
         Swal.fire({
           title: 'Has iniciado sesión',
           text: 'Datos Correctos',
           icon: 'success',
           closeOnClickOutside: false,
           closeOnEsc: false
          }).then(select => {
            if ( seclect){
              locateon.reload();
            }
          });
        })
        .catch(error => {

          let er = error.response.data.errors;

          let mensaje = "Error no identificado";

          if(er.hasOwnProperty('email')){

            mensaje = er.email[0];

          }else if( er.hasOwnProperty('clave')){

            mensaje = er.clave[0];
          }else if( er.hasOwnProperty('login')){

             mensaje = er.clloginave[0];
          }

          Swal('error', mensaje, 'error');

        });

    }
  }

});  

