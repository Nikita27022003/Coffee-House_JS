// const express = require("express");

// const mongoose = require("mongoose");


// const app = express();
// mongoose.connect("mongodb://localhost/contactUs-db");


// app.use("/api", require("./api"));

// api.listen(4000, ()=>{
//     console.log("Server is listening");
// });




//Searching//

const anchors = document.querySelectorAll('a[href^="#"]')


for(let anchor of anchors) {
  anchor.addEventListener("click", function(e) {
    e.preventDefault() 
    const goto = anchor.hasAttribute('href') ? anchor.getAttribute('href') : 'body'
    document.querySelector(goto).scrollIntoView({
      behavior: "smooth",
      block: "start"
    })
  })
}