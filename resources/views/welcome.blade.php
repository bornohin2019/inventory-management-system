<!doctype html> 
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>StockVista</title>
    <style>
      /* Global Styles */
      body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background: linear-gradient(to bottom right, #f8b400, #f6a0b3);
        color: #fff;
      }

      h1 {
        font-size: 4rem;
        text-align: center;
        margin-top: 100px;
        text-transform: uppercase;
        letter-spacing: 5px;
        text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.3);
      }

      /* Flexbox for Centering Content */
      .relative {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 80vh;
        flex-direction: column;
      }

      /* Button Styles */
      .btn {
        background-color: #ffffff;
        color: #333;
        padding: 12px 30px;
        border: none;
        font-size: 1.2rem;
        font-weight: bold;
        border-radius: 25px;
        cursor: pointer;
        transition: background-color 0.3s, transform 0.3s;
        text-decoration: none;
      }

      .btn:hover {
        background-color: #f8b400;
        transform: translateY(-5px);
      }

      .btn:active {
        transform: translateY(0);
      }

      /* Link Styling */
      a {
        text-decoration: none;
        color: inherit;
      }

      /* Responsive Design */
      @media (max-width: 600px) {
        h1 {
          font-size: 2.5rem;
        }
      }

      /* Background Dots Animation */
      .bg-dots-darker {
        background-image: radial-gradient(circle, #ff8c00, #ff00cc);
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-size: 100px 100px;
        animation: moveBackground 10s linear infinite;
      }

      @keyframes moveBackground {
        0% {
          background-position: 0 0;
        }
        100% {
          background-position: 100px 100px;
        }
      }

      /* Button Link Container */
      .button-container {
        display: flex;
        gap: 20px;
        margin-top: 40px;
      }
    </style>
  </head>
  <body>
    <h1>StockVista</h1>
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker">
      <div class="button-container">
        <a href="{{ route('login') }}" class="btn">Log in</a>
        @if (Route::has('register'))
          <a href="{{ route('register') }}" class="btn">Register</a>
        @endif
      </div>
    </div>
  </body>
</html>
