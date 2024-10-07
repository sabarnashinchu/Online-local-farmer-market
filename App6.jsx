
import React from 'react';
import { createRoot } from 'react-dom/client';
import { BrowserRouter as Router } from 'react-router-dom'; // Import the Router component
import AddVehicle from './pages/AddVehicle';
import Footer from './pages/Footer';

document.addEventListener('DOMContentLoaded', function() {
  const addvehicle = document.getElementById('addvehicle');
  if (addvehicle) {
    const addvehicleRoot = createRoot(addvehicle);
    addvehicleRoot.render(
      <Router>
        <AddVehicle />
        <Footer />
      </Router>
    );
  }
  
  
});


