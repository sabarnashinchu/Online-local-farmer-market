
import React from 'react';
import { createRoot } from 'react-dom/client';
import { BrowserRouter as Router } from 'react-router-dom'; // Import the Router component
import BookingStocks from './pages/BookingStocks';
import Footer from './pages/Footer';

document.addEventListener('DOMContentLoaded', function() {
  const bookinglivestocks = document.getElementById('bookinglivestocks');
  if (bookinglivestocks) {
    const bookinglivestocksRoot = createRoot(bookinglivestocks);
    bookinglivestocksRoot.render(
      <Router>
        <BookingStocks />
        <Footer />
      </Router>
    );
  }
  
  
});



