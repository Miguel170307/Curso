const express = require ('express');
const app = express ();
const port = 3000;

app.get('/', (req, res) => res.send('Hello World!'))
app.get('/login', (req, res) => res.send('They are okay?!'))

app.listen (port, () => console.log (`Rodando na porta ${port}!`))
