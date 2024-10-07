import React from 'react';
import { createRoot } from 'react-dom/client';
import { BrowserRouter as Router } from 'react-router-dom'; // Import the Router component
import CusLivestockPaidBill from './pages/CusLivestockPaidBill';
import Footer from './pages/Footer';

document.addEventListener('DOMContentLoaded', function() {
  const cuslivestockpaidbill = document.getElementById('cuslivestockpaidbill');
  if (cuslivestockpaidbill) {
    const cuslivestockpaidbillRoot = createRoot(cuslivestockpaidbill);
    cuslivestockpaidbillRoot.render(
      <Router>
        <CusLivestockPaidBill />
        <Footer />
      </Router>
    );
  }
  
  
});



