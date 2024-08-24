const cartItems = [];
let pendingDeliveries = [];
let deliveryHistory = [];

// Fetch pending deliveries and delivery history from the server
fetch('/nigerian_coffee_express/api/get_deliveries.php')
    .then(response => {
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        return response.json();
    })
    .then(data => {
        pendingDeliveries = data.pending;
        deliveryHistory = data.history;
        updatePendingDeliveries();
        updateDeliveryHistory();
    })
    .catch(error => {
        console.error('Error fetching deliveries:', error);
        alert('Failed to load deliveries. Please refresh the page.');
    });

document.querySelectorAll('.add-to-cart').forEach(button => {
  button.addEventListener('click', function(e) {
    e.preventDefault();
    const productCard = this.closest('.product-card');
    const productName = productCard.querySelector('.product-name').textContent;
    const productPrice = productCard.querySelector('.product-price').textContent;
    const priceValue = parseFloat(productPrice.replace('₦', '').replace(',', ''));

    cartItems.push({ name: productName, price: priceValue });
    updateCart();

    alert(`${productName} added to cart!`);
  });
});

document.getElementById('order-now').addEventListener('click', function() {
  if (cartItems.length === 0) {
    alert('Your cart is empty!');
    return;
  }

  const deliveryNumber = Math.floor(Math.random() * 1000000);
  const newDelivery = {
    items: cartItems,
    date: new Date().toISOString().split('T')[0],
    deliveryNumber: deliveryNumber
  };

  fetch('/nigerian_coffee_express/api/add_pending_delivery.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify(newDelivery),
  })
  .then(response => {
    if (!response.ok) {
      return response.text().then(text => {
        throw new Error(`HTTP error! status: ${response.status}, message: ${text}`);
      });
    }
    return response.json();
  })
  .then(data => {
    pendingDeliveries.push(data);
    updatePendingDeliveries();
    cartItems.length = 0; // Clear the cart
    updateCart();
    alert('Order placed successfully!');
  })
  .catch(error => {
    console.error('Error placing order:', error);
    alert('Failed to place order. Error: ' + error.message);
  });
});

document.getElementById('confirm-delivery').addEventListener('click', function() {
  if (pendingDeliveries.length === 0) {
      alert('No pending deliveries!');
      return;
  }

  const confirmedDelivery = pendingDeliveries[0];  // Get the first pending delivery

  fetch('/nigerian_coffee_express/api/confirm_delivery.php', {
      method: 'POST',
      headers: {
          'Content-Type': 'application/json',
      },
      body: JSON.stringify({
          deliveryNumber: confirmedDelivery.delivery_number
      }),
  })
  .then(response => {
      if (!response.ok) {
          return response.json().then(err => { throw err; });
      }
      return response.json();
  })
  .then(data => {
      pendingDeliveries = pendingDeliveries.filter(d => d.delivery_number !== data.delivery_number);
      deliveryHistory.unshift(data);
      updatePendingDeliveries();
      updateDeliveryHistory();
      alert('Delivery confirmed successfully!');
  })
  .catch(error => {
      console.error('Error:', error);
      alert('Failed to confirm delivery. ' + (error.error || 'Please try again.'));
  });
});
function updatePendingDeliveries() {
  const pendingList = document.getElementById('pending-deliveries-list');
  pendingList.innerHTML = '';

  pendingDeliveries.forEach(delivery => {
    const deliveryItem = document.createElement('div');
    deliveryItem.classList.add('delivery-item');
    deliveryItem.innerHTML = `
      <p>Date: ${delivery.date}</p>
      <p>Delivery Number: ${delivery.delivery_number}</p>
      <p>Items: ${delivery.items.map(item => item.name).join(', ')}</p>
    `;
    pendingList.appendChild(deliveryItem);
  });
}

function updateDeliveryHistory() {
  const historyList = document.getElementById('delivery-history-list');
  historyList.innerHTML = '';

  deliveryHistory.forEach(delivery => {
      const historyItem = document.createElement('div');
      historyItem.classList.add('history-item');
      historyItem.innerHTML = `
          <p>Date: ${delivery.date}</p>
          <p>Delivery Number: ${delivery.delivery_number}</p>
          <p>Items: ${delivery.items.map(item => item.name).join(', ')}</p>
      `;
      historyList.appendChild(historyItem);
  });
}

function updateCart() {
  const cartList = document.getElementById('cart-list');
  cartList.innerHTML = '';

  cartItems.forEach(item => {
    const cartItem = document.createElement('div');
    cartItem.classList.add('cart-item');
    cartItem.innerHTML = `
      <span>${item.name}</span>
      <span>₦${item.price.toFixed(2)}</span>
    `;
    cartList.appendChild(cartItem);
  });
}