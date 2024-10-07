
import React from 'react';
import { createRoot } from 'react-dom/client';
import { BrowserRouter as Router } from 'react-router-dom'; // Import the Router component
import Booking from './pages/Booking';
import Footer from './pages/Footer';

document.addEventListener('DOMContentLoaded', function() {
  const booking = document.getElementById('booking');
  if (booking) {
    const bookingRoot = createRoot(booking);
    bookingRoot.render(
      <Router>
        <Booking />
        <Footer />
      </Router>
    );
  }
  
  
});



