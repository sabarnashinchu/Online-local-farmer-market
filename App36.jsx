import React from 'react';
import { createRoot } from 'react-dom/client';
import { BrowserRouter as Router } from 'react-router-dom'; // Import the Router component
import FarServiceInfo from './pages/FarServiceInfo';
import Footer from './pages/Footer';

document.addEventListener('DOMContentLoaded', function() {
  const farserviceinfo = document.getElementById('farserviceinfo');
  if (farserviceinfo) {
    const farserviceinfoRoot = createRoot(farserviceinfo);
    farserviceinfoRoot.render(
      <Router>
        <FarServiceInfo />
        <Footer />
      </Router>
    );
  }
  
  
});














