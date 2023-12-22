// Selectors
var cartBtn = document.getElementById("cart-btn");
var closeCartBtn = document.getElementById("close-cart");
var cartOverlay = document.getElementById("cart-overlay");
var cartItems = document.getElementById("cart-items");
var cartTotal = document.getElementById("cart-total");
var placeOrderBtn = document.getElementById("place-order");
var products = document.getElementById("products");
var addToCartBtn = document.getElementById("add-to-cart-btn");
var cartPage = document.getElementById("cart-page");
var cartList = document.getElementById("cart-list");

// Event listeners
addToCartBtn.addEventListener("click", showCart);
closeCartBtn.addEventListener("click", hideCart);
placeOrderBtn.addEventListener("click", placeOrder);

function displayCartItems() {
    cartItems.innerHTML = "";
    cart.forEach(function (item) {
        var cartItem = document.createElement("div");
        cartItem.innerHTML = `
            <span>${item.name}</span>
            <button class="quantity-btn" data-name="${item.name}" data-action="decrease">-</button>
            <span>${item.quantity}</span>
            <button class="quantity-btn" data-name="${item.name}" data-action="increase">+</button>
            - $${(item.price * item.quantity).toFixed(2)}
        `;
        cartItems.appendChild(cartItem);

        // Event listeners for + and - buttons
        var increaseBtn = cartItem.querySelector('.quantity-btn[data-action="increase"]');
        var decreaseBtn = cartItem.querySelector('.quantity-btn[data-action="decrease"]');

        increaseBtn.addEventListener("click", function () {
            updateQuantity(item.name, "increase");
        });

        decreaseBtn.addEventListener("click", function () {
            updateQuantity(item.name, "decrease");
        });
    });
    cartTotal.textContent = total.toFixed(2);
}


products.addEventListener("click", function (event) {
    if (event.target.classList.contains("add-to-cart")) {
        var name = event.target.dataset.name;
        var price = parseFloat(event.target.dataset.price);
        addToCart(name, price);
    }
});

// Function to show cart
function showCart() {
    cartOverlay.style.visibility = "visible";
    cartOverlay.style.opacity = "1";
    displayCartItems();
}

// Function to hide cart
function hideCart() {
    cartOverlay.style.visibility = "hidden";
    cartOverlay.style.opacity = "0";
}

// Function to add item to cart
function addToCart(name, price) {
    var existingItem = cart.find(item => item.name === name);

    if (existingItem) {
        existingItem.quantity++;
    } else {
        cart.push({ name: name, price: price, quantity: 1 });
    }

    total += price;
    displayCartItems();
}

// Function to display cart items
function displayCartItems() {
    cartItems.innerHTML = "";
    cart.forEach(function (item) {
        var cartItem = document.createElement("div");
        cartItem.innerHTML = `
            <span>${item.name}</span>
            <button class="quantity-btn" data-name="${item.name}" data-action="decrease">-</button>
            <span>${item.quantity}</span>
            <button class="quantity-btn" data-name="${item.name}" data-action="increase">+</button>
            - $${(item.price * item.quantity).toFixed(2)}
        `;
        cartItems.appendChild(cartItem);
    });
    cartTotal.textContent = total.toFixed(2);
}

// Function to place order
function placeOrder() {
    // Display cart items on the cart page
    cartList.innerHTML = "";
    cart.forEach(function (item) {
        var cartItem = document.createElement("li");
        cartItem.textContent = `${item.name} - ${item.quantity} x $${item.price.toFixed(2)}`;
        cartList.appendChild(cartItem);
    });

    // Display total on the cart page
    var totalItem = document.createElement("li");
    totalItem.textContent = `Total: $${total.toFixed(2)}`;
    cartList.appendChild(totalItem);

    // Show the cart page
    cartPage.style.display = "block";
}

// Existing code ...

// User array for simplicity (replace this with a proper authentication system)
var users = [
    { username: "user1", password: "password1" },
    { username: "user2", password: "password2" },
    // Add more users as needed
  ];
  
  // Selectors
  var loginBtn = document.getElementById("login-btn");
  var registerBtn = document.getElementById("register-btn");
  
  // Event listeners
  loginBtn.addEventListener("click", function () {
    window.location.href = "login.html"; // Redirect to the login page
  });
  
  registerBtn.addEventListener("click", function () {
    window.location.href = "register.html"; // Redirect to the register page
  });
  
  // Function to perform login (replace this with actual login logic)
  function loginUser(username, password) {
    var user = users.find(u => u.username === username && u.password === password);
    if (user) {
      alert("Login successful!");
      // Redirect to the user's dashboard or another page
      window.location.href = "dashboard.html";
    } else {
      alert("Invalid username or password. Please try again.");
    }
  }
  