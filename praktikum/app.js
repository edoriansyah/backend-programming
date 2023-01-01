// import express dan router
const express = require("express");
const router = require("./routes/api.js");

// membuat object express
const app = express();

// menggunakan middleware
app.use(express.json());

// menggunakan routing (router)
app.use(router);

// mendefinisikan port
const PORT = 3000;
app.listen(PORT, () =>
  console.log(`Server running at: http://localhost:${PORT}`)
);
