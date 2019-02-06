Ext.require([
    'Ext.plugin.Viewport'
]);

Ext.namespace('Ext.datos');
Ext.datos.licencias = [
    {"clave":1,"tipoLicencia":"A"},
    {"clave":2,"tipoLicencia":"B"},
    {"clave":3,"tipoLicencia":"C"},
    {"clave":4,"tipoLicencia":"D"},
    {"clave":5,"tipoLicencia":"E"},
    {"clave":5,"tipoLicencia":"Menor de edad"},
]

Ext.onReady(function(){
    var arrDatos = Ext.create('Ext.data.Store',{
        fields : ['clave','tipoLicencia'],
        data : Ext.datos.licencias
                })
    
    Ext.create('Ext.form.Panel',{
        title:'Registro',
        renderTo: Ext.getBody(),
        boddyPadding: 5,
        width: 700,
        url: '../controler/',
        standarSubmit: false, //Como es falso es llamada parcial,
        defaultType: 'textfield', //Todos los controles son inputtext a menos que indiquen lo contrario
        items:[{
            fieldLabel:'Email',
            name: 'email',
            regex: /^[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/,
            invalidText: 'Ingrese un correo válido'
        },{
            inputType: 'password',
            fieldLabel: 'Password',
            regex: /^[A-Za-z0-9._%+-]{10}$/,
            invalidText: 'La password debe tener al menos 10 carácteres'
        },{
            fieldLabel: 'Nombre',
            name: 'nombre',
           // regex: /^[A-Za-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/,
           // invalidText: 'El campo username debe tener un formato de email valido'
        },{
            fieldLabel: 'Apellido paterno',
            name: 'app'
        },{
            fieldLabel: 'Apellido materno',
            name: 'apm'
        },{
            fieldLabel: 'Lada',
            name: 'lada'
        },{
            fieldLabel: 'telefono',
            name: 'telefono'
        },{
            xtype: 'combobox',
            fieldLabel: 'licencia',
            displayField: 'clave',
            name: 'licencia',
            store: arrDatos
        },{
            fieldLabel: 'Dirección',
            name: 'direccion'
        }],
        buttoms: [{
            text: 'Registrar',
            handler: function(){
                var frm =  this.up('form').getForm()
                if(frm.isValid()){
                    //Envío "normal", viaja de forma parcial por la configuración inicial 
                    frm.submit({
                        success: function(form,action){
                            Ext.Msg.alert('Datos guardados correctamente')
                        },
                        failure: function (form,action){
                            Ext.Msg.alert('Error', action.result ? action.result.msj : 'Sin respuesta')
                        }
                    })
                }
            }
        }]
    
    })

})

