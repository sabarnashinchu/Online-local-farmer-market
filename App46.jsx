
import React from 'react';
import { createRoot } from 'react-dom/client';
import { BrowserRouter as Router } from 'react-router-dom'; // Import the Router component
import FarliveStocks from './pages/FarliveStocks';
import Footer from './pages/Footer';

document.addEventListener('DOMContentLoaded', function() {
  const farliveStocks = document.getElementById('farliveStocks');
  if (farliveStocks) {
    const farliveStocksRoot = createRoot(farliveStocks);
    farliveStocksRoot.render(
      <Router>
        <FarliveStocks />
        <Footer />
      </Router>
    );
  }
  
  
});


