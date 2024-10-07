import React from 'react';
import { createRoot } from 'react-dom/client';
import { BrowserRouter as Router } from 'react-router-dom'; // Import the Router component
import FarGenBill from './pages/FarGenBill';
import Footer from './pages/Footer';

document.addEventListener('DOMContentLoaded', function() {
  const farmenserbillgen = document.getElementById('farmenserbillgen');
  if (farmenserbillgen) {
    const farmenserbillgenRoot = createRoot(farmenserbillgen);
    farmenserbillgenRoot.render(
      <Router>
        <FarGenBill/>
        <Footer />
      </Router>
    );
  }
  
  
});












