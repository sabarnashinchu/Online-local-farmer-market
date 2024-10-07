
import React from 'react';
import { createRoot } from 'react-dom/client';
import { BrowserRouter as Router } from 'react-router-dom'; // Import the Router component
import SearchVehicle from './pages/SearchVehicle';
import Footer from './pages/Footer';

document.addEventListener('DOMContentLoaded', function() {
  const farmersearch = document.getElementById('farmersearch');
  if (farmersearch) {
    const farmersearchRoot = createRoot(farmersearch);
    farmersearchRoot.render(
      <Router>
        <SearchVehicle />
        <Footer />

      </Router>
    );
  }
  
  
});

