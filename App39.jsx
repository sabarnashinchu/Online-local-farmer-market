import React from 'react';
import { createRoot } from 'react-dom/client';
import { BrowserRouter as Router } from 'react-router-dom'; // Import the Router component
import FarPaidBill from './pages/FarPaidBill';
import Footer from './pages/Footer';

document.addEventListener('DOMContentLoaded', function() {
  const farpaidbill = document.getElementById('farpaidbill');
  if (farpaidbill) {
    const farpaidbillRoot = createRoot(farpaidbill);
    farpaidbillRoot.render(
      <Router>
        <FarPaidBill/>
        <Footer />
      </Router>
    );
  }
  
  
});












