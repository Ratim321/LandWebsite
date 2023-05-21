<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
      /* Responsive layout */
      .product-box {
        width: 80%;
        height: auto;
        border: 1px solid #ccc;
        margin: 20px auto;
        padding: 10px;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        background-color: #f8f8f8;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
      }
      /* Image */
      .product-box img {
        width: 50%;
        height: 30px;
        object-fit: contain;
      }
      /* Product title */
      .product-box h3 {
        width: 100%;
        margin: 10px 0;
        text-align: center;
        font-size: 1.5rem;
        text-transform: capitalize;
      }
      /* Product description */
      .product-box p {
        width: 100%;
        font-size: 14px;
        line-height: 1.5;
        text-align:center;
        margin: 10px 0;
      }
      /* Product price */
      .product-box .price {
        width: 100%;
        font-size: 18px;
        font-weight: bold;
        color: #f00;
        text-align: center;
        margin-top: 10px;
      }
      /* Add to cart button */
     
      /* Responsive style */
      @media only screen and (max-width: 600px) {
        .product-box {
          flex-direction: column;
        }
        .product-box h3 {
          font-size: 1.2rem;
        }
      }
    </style>
  </head>
  <body>
    <div class="product-box">
      <img src="images/landimg.jpg" alt="Product">
      <h3>Product Name</h3>
      <p>Product description goes here. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget ipsum vel magna euismod bibendum vel id nisl.</p>
      <div class="price">$50.00</div>
    
    </div>
  </body>
</html>