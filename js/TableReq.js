/*
formulario1.js
Uso de tabla filtrada con información proveniente de PHP con ExtJS
*/
Ext.require([
    'Ext.plugin.Viewport'
]);
Ext.onReady(function(){
	//Define "clase" Jugador
    Ext.define('carModel', {
		extend: 'Ext.data.Model',
		fields: ['Marca', 'Modelo', 'Placas', 'Capacidad','Color','Renta','Previsualizar']
	});
	
	//Define almacenamiento de Jugador proveniente de PHP y usado en la tabla (grid)
	var datosStore = Ext.create('Ext.data.Store', {
		extend: 'Ext.data.Store',
		storeId: 'Cars',
		model: 'carModel',
		autoLoad: true, //se carga al definirse
		autoSync: false,    //se usa cuando tiene elementos asociados de otros modelos.
		proxy: {
			type: 'ajax',
			url: '../controller/getAllCars.php',
			reader: {
				type: 'json',
				rootProperty: 'Items' //del json
			}
		},
		filters: [],
		remoteFilter: true
	});
	
	//Define frm y tabla que usa almacenamiento proveniente de PHP
	Ext.create('Ext.form.Panel', {
		title: 'Formulario con b&uacute;squeda de autos disponibles para renta',
		renderTo: Ext.get("autoscontainer"),
		bodyPadding: 5,
		width: "100%",
		defaultType: 'textfield',
		items: [
			{
				xtype: 'grid',
				store: datosStore,
				title: 'Autos',
				columns: [
					{
						text: 'Marca',
						width: 100,
						
						dataIndex: 'Marca'
					},
					{
						text: 'Modelo',
						width: 150,
						dataIndex: 'Modelo'
					},
					{
						text: 'Placas',
						width: 150,
						dataIndex: 'Placas'
					},
					{
						text: 'Capacidad',
						width: 150,
						dataIndex: 'Capacidad' //probar indicando un campo inexistente
					},
					{
						text: 'Color',
						width: 150,
						dataIndex: 'Color'
					},
					{
						text: 'Renta',
						width: 150,
						dataIndex: 'Renta'
					},
					{
						text: 'Preview',
						width: 150,
						dataIndex: 'Previsualizar' //probar indicando un campo inexistente
					}
				]
			}
		]
	});
});
