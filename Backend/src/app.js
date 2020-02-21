const express = require('express');
const app = express();
const router = express.Router();
const bodyParser = require('body-parser');
var cors = require('cors');
const chalk = require('chalk');
const dotenv = require("dotenv");
dotenv.config();


app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true}));


//Config Routes
const managerRoute = require('./routes/managerRoutes');
const clientRoute = require('./routes/clientRoutes');

//Use Routes
app.use('/manager',managerRoute);
app.use('/client',clientRoute);

const port = process.env.PORT
app.listen(port, () => {
    console.log('Server is up and running on port ', port)
})