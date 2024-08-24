//Hello there!

//To start this website, download/start XAMP application and put on the Apache and SQL

//Then go into your browswer and type "http://localhost/phpmyadmin/"
//Once inside, create a new database called "nigerian_coffee_express", go into the SQL and paste the SQL Schema below👇🏾

//Database Schema:

CREATE TABLE users (
       id INT AUTO_INCREMENT PRIMARY KEY,
       fullname VARCHAR(150) NOT NULL,
       email VARCHAR(150) UNIQUE NOT NULL,
       password VARCHAR(255) NOT NULL
   );

   CREATE TABLE products (
       id INT AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(150) NOT NULL,
       description TEXT,
       price DECIMAL(10, 2) NOT NULL,
       image_url VARCHAR(255)
   );

   CREATE TABLE deliveries (
       id INT AUTO_INCREMENT PRIMARY KEY,
       user_id INT NOT NULL,
       date DATE NOT NULL,
       delivery_number VARCHAR(50) NOT NULL,
       items JSON NOT NULL,
       status ENUM('pending', 'completed') NOT NULL,
       FOREIGN KEY (user_id) REFERENCES users(id)
   );


//Once the database has been created, click the products table and go into its SQL and paste this Schema below below👇🏾

//Products Schema:

INSERT INTO products (name, description, price, image_url) VALUES
('Café Neo Signature Blend', 'A bold, full-bodied blend with notes of dark chocolate and caramel.', 3500, "https://coffeebi.com/wp-content/uploads/2017/02/neo-cafe.jpg");

INSERT INTO products (name, description, price, image_url) VALUES
('BeanBox Ethiopian Yirgacheffe', 'A light roast with floral notes and a bright, citrusy finish.', 4200, 'https://coffeeaffection.com/wp-content/uploads/2019/08/Bean-Box-coffee-subscription-brewed.jpeg');

INSERT INTO products (name, description, price, image_url) VALUES
('Yaba Coffee Espresso Blend', 'A rich, creamy espresso blend with a smooth chocolate undertone.', 3800, 'https://images.unsplash.com/photo-1514066558159-fc8c737ef259?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');

INSERT INTO products (name, description, price, image_url) VALUES
('Nigerian Coffee Roasters Robusta', 'A strong, full-bodied coffee with earthy notes and a hint of nuttiness.', 3200, 'https://images.unsplash.com/photo-1518057111178-44a106bad636?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');

INSERT INTO products (name, description, price, image_url) VALUES
('Native Coffee Company Arabica', 'A smooth, balanced coffee with subtle fruity notes and a clean finish.', 3900, 'https://images.unsplash.com/photo-1504630083234-14187a9df0f5?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');

INSERT INTO products (name, description, price, image_url) VALUES
('The Coffee Manor Peaberry', 'A rare, flavorful coffee with a bright acidity and wine-like complexity.', 4500, 'https://images.unsplash.com/photo-1442512595331-e89e73853f31?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');

INSERT INTO products (name, description, price, image_url) VALUES
('Coffee Place Mocha Blend', 'A delightful blend with hints of chocolate and a smooth, creamy finish.', 3700, 'https://images.unsplash.com/photo-1501339847302-ac426a4a7cbb?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');

INSERT INTO products (name, description, price, image_url) VALUES
('Lagos Roasters Single Origin', 'A bright, citrusy coffee with notes of bergamot and jasmine.', 4100, 'https://images.unsplash.com/photo-1498804103079-a6351b050096?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');

INSERT INTO products (name, description, price, image_url) VALUES
('Abuja Blend Dark Roast', 'A bold, intense coffee with notes of dark chocolate and roasted nuts.', 3600, 'https://images.unsplash.com/photo-1507133750040-4a8f57021571?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');

INSERT INTO products (name, description, price, image_url) VALUES
('Calabar Sunrise Medium Roast', 'A well-balanced coffee with caramel sweetness and a nutty finish.', 3800, 'https://images.unsplash.com/photo-1495881674446-33314d7fb917?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');




//And Voila🎉, Its all done. Enjoy what you see, And dont forget to give me a feedback!! 
©️GabzWrld 2024 WEB DEV ASSIGNMENT