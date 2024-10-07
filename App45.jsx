
import React from 'react';
import { createRoot } from 'react-dom/client';
import { BrowserRouter as Router } from 'react-router-dom'; // Import the Router component
import CusliveStocks from './pages/CusliveStocks';
import Footer from './pages/Footer';

document.addEventListener('DOMContentLoaded', function() {
  const cuslivestocks = document.getElementById('cuslivestocks');
  if (cuslivestocks) {
    const cuslivestocksRoot = createRoot(cuslivestocks);
    cuslivestocksRoot.render(
      <Router>
        <CusliveStocks />
        <Footer />
      </Router>
    );
  }
  
  
});



