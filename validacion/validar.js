 
    $(document).ready(function () {
                var validator = $("#contactos").bootstrapValidator({
                    message: 'Este valor no es valido',
	 feedbackIcons: {
		 valid: 'glyphicon glyphicon-ok',
		 invalid: 'glyphicon glyphicon-remove',
		 validating: 'glyphicon glyphicon-refresh'
	 },
                    fields: {
                    	nombre: {
                            message: "Nombre requerido",
                            validators: {
                                notEmpty: {
                                    message: "Por favor ingrese el nombre"
                                },
                                stringLength: {
                                    min: 5,
                                    max: 50,
                                    message: "Ingrese entre 5 y 50 caracteres"
                                },
                                regexp:{
                                regexp:   /^[a-z,A-Z,á,é,í,ó,ú,Á,É,Í,Ó,Ú]+$/,
                                message: "Solo ingrese caracteres de la A a la Z"
                                }
                            }
                        },
                        apellido: {
                            message: "Apellido requerido",
                            validators: {
                                notEmpty: {
                                    message: "Por favor ingrese el apellido"
                                },
                                stringLength: {
                                    min: 5,
                                    max: 35,
                                message: "Ingrese entre 5 y 35 caracteres"
                                },
                                regexp:{
                                regexp:   /^[a-z,A-Z,á,é,í,ó,ú,Á,É,Í,Ó,Ú, ]+$/,
                                message: "Solo ingrese caracteres de la A a la Z"
                                }
                            }
                            
                        },
                         direccion: {
                            message: "Direccion requerida",
                            validators: {
                                notEmpty: {
                                    message: "Por favor ingrese una direccion"
                                },
                                stringLength: {
                                    min: 5,
                                    max: 100,
                                    message: "Ingrese entre 5 y 100 caracteres"
                                }
                            }
                        },
                        email: {
                            message: "E-mail requerido",
                            validators: {
                                notEmpty: {
                                    message: "Por favor ingrese el correo"
                                },
                                stringLength: {
                                    min: 6,
                                    max: 35,
                                    message: "Ingrese entre 6 y 35 caracteres"
                                },
                                emailAddress: {
                                    message: "Correo incorrecto"
                                }
                            }
                        },
                        sexo: {
                            message: "Sexo requerido",
                            validators: {
                                notEmpty: {
                                    message: "Por favor seleccione una opcion"
                                }
                                
                            }
                        },
                        telefono: {
                            
                            message: "Telefono ",
                            validators:{
                                stringLength: {
                                min:8,
                                max:15,
                                message: "Ingrese entre 8 y 15 numeros"
                        },
                            regexp:{
                                regexp: /^[0-9]+$/,
                                message: "El Telefono debe tener solo numeros"
                            }
                        
                    }
                }
            } 
        }  );
    } );

