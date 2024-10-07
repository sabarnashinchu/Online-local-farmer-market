import React from 'react';
import { createRoot } from 'react-dom/client';
import { BrowserRouter as Router } from 'react-router-dom'; // Import the Router component
import CusLivestocksStatus from './pages/CusLivestocksStatus';
import Footer from './pages/Footer';

document.addEventListener('DOMContentLoaded', function() {
  const cuslivestockstatus = document.getElementById('cuslivestockstatus');
  if (cuslivestockstatus) {
    const cuslivestockstatusRoot = createRoot(cuslivestockstatus);
    cuslivestockstatusRoot.render(
      <Router>
        <CusLivestocksStatus />
        <Footer />
      </Router>
    );
  }
  
  
});
