import React from 'react';
import { createRoot } from 'react-dom/client';
import { BrowserRouter as Router } from 'react-router-dom'; // Import the Router component
import FarmerBookDet from './pages/FarmerBookDet';
import Footer from './pages/Footer';

document.addEventListener('DOMContentLoaded', function() {
  const serviceinfo1 = document.getElementById('serviceinfo1');
  if (serviceinfo1) {
    const serviceinfo1Root = createRoot(serviceinfo1);
    serviceinfo1Root.render(
      <Router>
        <FarmerBookDet />
        <Footer />
      </Router>
    );
  }
  
  
});














