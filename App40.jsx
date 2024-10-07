import React from 'react';
import { createRoot } from 'react-dom/client';
import { BrowserRouter as Router } from 'react-router-dom'; // Import the Router component
import AddLiveStocks from './pages/AddLiveStocks';
import Footer from './pages/Footer';

document.addEventListener('DOMContentLoaded', function() {
  const addlivestocks = document.getElementById('addlivestocks');
  if (addlivestocks) {
    const addlivestocksRoot = createRoot(addlivestocks);
    addlivestocksRoot.render(
      <Router>
        <AddLiveStocks/>
        <Footer />
      </Router>
    );
  }
  
  
});











