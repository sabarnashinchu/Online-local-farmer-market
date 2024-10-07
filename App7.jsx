
import React from 'react';
import { createRoot } from 'react-dom/client';
import { BrowserRouter as Router } from 'react-router-dom'; // Import the Router component
import VehicleInfo from './pages/VehicleInfo';
import Footer from './pages/Footer';

document.addEventListener('DOMContentLoaded', function() {
  const vehicleinfo = document.getElementById('vehicleinfo');
  if (vehicleinfo) {
    const vehicleinfoRoot = createRoot(vehicleinfo);
    vehicleinfoRoot.render(
      <Router>
        <VehicleInfo />
        <Footer />

      </Router>
    );
  }
  
  
});

