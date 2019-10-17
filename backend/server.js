const express = require('express')
const bodyparser = require('body-parser')
const MongoClient = require('mongodb').MongoClient
const routes = require('./routes')

/* Conexão com Banco de dados */
const uri = "mongodb+srv://TrabalhoES:TrabalhoES@cluster0-mpxxd.mongodb.net/admin?retryWrites=true&w=majority"
MongoClient.connect(uri, {useNewUrlParser: true}, {useUnifiedTopology: true}, (err,client) => {
    if(err) return console.log(err)
    db = client.db('TrabalhoES')

    app.listen(3333, () => {
        console.log('Server running on port 3333')
    })
}) 

const app = express()

app.use(bodyparser.urlencoded({extended: true}))

app.set('view engine', 'ejs')
app.use(routes)








































/* ------------------------Rotas----------------------------
app.get('/', (req, res) => {
    res.render('index.ejs')
})

app.post('/users', (req, res) => {

    //let UserExists = db.collection('data').find().toArray((err, results) =>{ console.log(results)})

    db.collection('data').save(req.body, (err, result) => {
        if(err) return console.log(err)

        console.log(`Salvo no banco de dados`)
        res.redirect('/')

        db.collection('data').find().toArray((err, results) =>{ 
            console.log(results)
        })
    })
})

/*-----------------------------------------------------------*/