<?php
$products = [
    [
        "title" => "Luminare Marine",
        "price" => 350,
        "image" => "https://images.pexels.com/photos/9897926/pexels-photo-9897926.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "description" => "Elegant design blended with marine-grade durability for timeless style."
    ],
    [
        "title" => "Helux Nautica",
        "price" => 50,
        "image" => "https://images.pexels.com/photos/277319/pexels-photo-277319.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "description" => "Lightweight and perfect for those who love classic timepieces."
    ],
    [
        "title" => "Exquisit Atros",
        "price" => 150,
        "image" => "https://images.pexels.com/photos/404181/pexels-photo-404181.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "description" => "Modern aesthetics with a powerful presence for any occasion."
    ],
    [
        "title" => "Helux Spielberg",
        "price" => 250,
        "image" => "https://images.pexels.com/photos/3766111/pexels-photo-3766111.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "description" => "Precision meets performance — inspired by a spirit of adventure."
    ],
    [
        "title" => "Regalli Claustroph",
        "price" => 450,
        "image" => "https://images.pexels.com/photos/9897857/pexels-photo-9897857.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "description" => "Unmatched quality and luxury crafted into one iconic design."
    ],
    [
        "title" => "Luminare Luxus",
        "price" => 550,
        "image" => "https://images.pexels.com/photos/10436602/pexels-photo-10436602.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "description" => "Luxury in its purest form — for those who accept nothing less."
    ],
    [
        "title" => "Regalli Hetchers",
        "price" => 650,
        "image" => "https://images.pexels.com/photos/10478973/pexels-photo-10478973.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "description" => "Engineered for elegance with a bold signature statement."
    ],
    [
        "title" => "Helux MVII",
        "price" => 750,
        "image" => "https://images.pexels.com/photos/10414981/pexels-photo-10414981.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "description" => "Minimalist masterpiece that redefines everyday wear."
    ],
    [
        "title" => "Exquisit Remos",
        "price" => 850,
        "image" => "https://images.pexels.com/photos/10443775/pexels-photo-10443775.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "description" => "Every detail crafted to perfection for the elite connoisseur."
    ],
    [
        "title" => "Helux Hostenhof",
        "price" => 950,
        "image" => "https://images.pexels.com/photos/9423283/pexels-photo-9423283.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1",
        "description" => "Built for those who demand bold design and lasting performance."
    ]
];
?>




















<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
   <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Poppins, sans-serif;
    color: white;
}

body {
    background: rgb(1, 14, 67);
    display: flex;
    justify-content: center;
    padding: 20px;
}

.container {
    width: 90%;
    max-width: 1200px;
    margin: auto;
}

.product-list {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(230px, 1fr));
    gap: 20px;
}

.product-list:has(.product:hover) .product:not(:hover) {
    filter: blur(5px);
    opacity: 0.7;
}

.product {
    background: #131313;
    border: 1px solid #606060;
    border-radius: 10px;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 15px;
    transition: filter 0.3s ease-in-out, opacity 0.3s ease-in-out;
}

.product img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    border-radius: 7px;
    filter: grayscale(70%);
    margin-bottom: 15px;
}

.info {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 10px;
}

h3 {
    font-weight: 500;
    font-size: 1.1rem;
    margin: 0;
    color: #fff;
}

p {
    font-style: italic;
    color: rgb(217, 217, 217);
    margin: 0;
}

.desc {
    font-size: 0.85rem;
    color: #bfbfbf;
    text-align: center;
    font-style: normal;
    margin: 10px 0;
}

button {
    width: 100%;
    padding: 0.6rem;
    border: 1px solid #606060;
    background: none;
    color: white;
    font-weight: 400;
    border-radius: 50px;
    cursor: pointer;
    transition: background 0.3s;
}

button:hover {
    background: #303030;
}

   </style>
  </head>
  <body>
<div class="container">
  <div class="product-list">
<?php foreach($products as $pro){ ?>
    <div class="product">
      <div class="img">
        <img src="<?php echo $pro["image"] ?>" alt="">
      </div>
      <div class="info">
        <h3><?php echo $pro["title"] ?></h3>
        <p>Rs: <?php echo $pro["price"] ?></p>
      </div>
      <p class="desc"><?php echo $pro["description"] ?></p>
      <button>Add to Cart</button>
    </div>
    <?php } ?>
  </div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" ></script>
  </body>
</html>