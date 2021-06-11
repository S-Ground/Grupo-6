var express = require('express');
var mysql = require('mysql');

var app = express();


//Establecemos conexion
var conexion= mysql.createConnection({
    host:'localhost',
    user:'root',
    password:'',
    database:'php_login_database'
});

//test conexion
conexion.connect(function(error){
    if(error){
        throw error;
    }else{
        console.log("conexion wena");
    }

})

app.get('/',function(req,res){
    res.send('Ruta Inicio');
});
//muestra de datos
app.get('/api/datos',(req,res)=>{
    conexion.query('SELECT * FROM datos',(error,filas)=>{
        if(error){
            throw error;
        }else{
            res.send(filas);
        }
    })
});
//muestra un solo dato
app.get('/api/datos/:id',(req,res)=>{
    conexion.query('SELECT * FROM datos WHERE id= ?',[req.params.id], (error, fila)=>{
        if(error){
            throw error;
        }else{
            res.send(fila); 
            //tiene que ser string res.send(fila[0].'humedad');
            
        }
    })
});
//agregar dato
app.post('/api/datos',(req,res)=>{
    let data ={}
    conexion.query(sql, data, function(error,results){

    }); 

});



//establecer puerto
const puerto = process.env.PUERTO || 3000;
app.listen(puerto,function(){
    console.log("Servidor ok en puerto:"+puerto );
});
