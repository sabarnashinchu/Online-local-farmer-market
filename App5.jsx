
import React from 'react';
import { createRoot } from 'react-dom/client';
import { BrowserRouter as Router } from 'react-router-dom'; // Import the Router component
import ProviderProfile from './pages/ProviderProfile';
import Footer from './pages/Footer';

document.addEventListener('DOMContentLoaded', function() {
  const providerhome = document.getElementById('providerhome');
  if (providerhome) {
    const providerhomeRoot = createRoot(providerhome);
    providerhomeRoot.render(
      <Router>
        <ProviderProfile />
        <Footer />
      </Router>
    );
  }
  
  
});

