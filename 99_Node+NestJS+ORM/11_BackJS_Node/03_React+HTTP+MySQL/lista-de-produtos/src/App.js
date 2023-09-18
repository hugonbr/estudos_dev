// src/App.js
import React from "react";
import "./App.css";
import ProductList from "./ProductList"; // Importe o componente ProductList

function App() {
    return (
        <div className="App">
            <ProductList /> {/* Use o componente ProductList aqui */}
        </div>
    );
}

export default App;
