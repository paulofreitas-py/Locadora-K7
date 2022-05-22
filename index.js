const express = require("express");
const app = express();
//View Engine
app.set('view engine','ejs');
//arquicos estatitos(css,img,js,etc)
app.use(express.static('public'));

//pagina de login
app.get("/login",(req,res)=>{
    res.render('index');
});
//pagina de cadastro
app.get("/cadastro",(req,res)=>{
    res.render('cadastro');
});
//pagina de home
app.get("/home",(req,res)=>{
    res.render('home');
});
//servidor
app.listen(8080,()=>{
    console.log("App rodando!");
});