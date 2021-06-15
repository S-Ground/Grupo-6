var express = require('express');
var mysql = require('mysql');
var cors = require ('cors');
var app = express();



// Configurar cabeceras y cors
app.use((req, res, next) => {
    res.header('Access-Control-Allow-Origin', '*');
    res.header('Access-Control-Allow-Headers', 'Authorization, X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Allow-Request-Method');
    res.header('Access-Control-Allow-Methods', 'GET, POST, OPTIONS, PUT, DELETE');
    res.header('Allow', 'GET, POST, OPTIONS, PUT, DELETE');
    next();
});

app.use(express.json());
app.use(cors());

//Establecemos los prámetros de conexión
var conexion= mysql.createConnection({
    host:'localhost',
    user:'root',
    password:'',
    database:'php_login_database',
    timezone:'Z'
});

//Conexión a la database
conexion.connect(function(error){
    if(error){
        throw error;
    }else{
        console.log("Conexion funcional");
    }
})

//ruta
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
    app.get('/api/datos/:id', (req,res)=>{
        conexion.query('SELECT * FROM datos WHERE id = ?', [req.params.id], (error, fila)=>{
            if(error){
                throw error
            }else{
                res.send(fila)
            }
        })
    })
//Crear un artículo
app.post('/api/datos', (req,res)=>{
    let data = {descripcion:req.body.descripcion, precio:req.body.precio, stock:req.body.stock}
    let sql = "INSERT INTO datos SET ?"
    conexion.query(sql, data, function(err, result){
            if(err){
               throw err
            }else{              
             /*Esto es lo nuevo que agregamos para el CRUD con Javascript*/
             Object.assign(data, {id: result.insertId }) //agregamos el ID al objeto data             
             res.send(data) //enviamos los valores                         
        }
    })
})
//Editar articulo
app.put('/api/datos/:id', (req, res)=>{
    let id = req.params.id
    let fecha = req.body.fecha
    let humedad = req.body.humedad
    let temperatura = req.body.temperatura
    let sql = "UPDATE datos SET fecha = ?, humedad = ?, temperatura = ? WHERE id = ?"
    conexion.query(sql, [fecha, humedad, temperatura, id], function(error, results){
        if(error){
            throw error
        }else{              
            res.send(results)
        }
    })
})
//Eliminar articulo
app.delete('/api/datos/:id', (req,res)=>{
    conexion.query('DELETE FROM datos WHERE id = ?', [req.params.id], function(error, filas){
        if(error){
            throw error
        }else{              
            res.send(filas)
        }
    })
})


//establecer puerto
const puerto = process.env.PUERTO || 3000;
app.listen(puerto,function(){
    console.log("Servidor ok en puerto:"+puerto );
});
