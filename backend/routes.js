const express = require('express')

const routes = express.Router()
    
routes.get('/', (req, res) => {
    res.render('index.ejs')
})

routes.get('/', (req, res) => {
    var cursor = db.collection('data').find()
})

routes.get('/users', (req,res) => {
    db.collection('data').find().toArray((err, results) => {
        if(err) return console.log(err)
        res.render('users.ejs', {data: results})
    })
})

routes.post('/users', (req, res) => {
    db.collection('data').save(req.body, (err, result) => {
        if(err) return console.log(err)

        console.log(`Salvo no banco de dados`)
        res.redirect('/users')
    })
})

module.exports = routes