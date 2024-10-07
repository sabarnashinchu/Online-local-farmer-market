import React from 'react';
import { createRoot } from 'react-dom/client';
import { BrowserRouter as Router } from 'react-router-dom'; // Import the Router component
import ViewLiveStocks from './pages/ViewLiveStocks';
import Footer from './pages/Footer';

document.addEventListener('DOMContentLoaded', function() {
  const cusviewlivestocks = document.getElementById('cusviewlivestocks');
  if (cusviewlivestocks) {
    const cusviewlivestocksRoot = createRoot(cusviewlivestocks);
    cusviewlivestocksRoot.render(
      <Router>
        <ViewLiveStocks/>
        <Footer />
      </Router>
    );
  }
  
  
});












