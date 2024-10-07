
import React from 'react';
import { createRoot } from 'react-dom/client';
import { BrowserRouter as Router } from 'react-router-dom'; // Import the Router component
import Approval from './pages/Approval';
import Footer from './pages/Footer';

document.addEventListener('DOMContentLoaded', function() {
  const approve = document.getElementById('approve');
  if (approve) {
    const approveRoot = createRoot(approve);
    approveRoot.render(
      <Router>
        <Approval />
        <Footer />
      </Router>
    );
  }
  
  
  
});

