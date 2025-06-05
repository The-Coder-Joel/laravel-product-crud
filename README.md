# 🛒 Laravel Product CRUD

A simple Laravel 10 application that demonstrates CRUD operations (Create, Read, Update, Delete) for managing products. It includes form validation, image upload, Bootstrap 5 styling, and Bootstrap Icons.

---

## 🚀 Features

- View all products in a table
- Add a new product with:
  - Name
  - Description
  - Price
  - Quantity
  - Image upload
- Edit existing products
- Delete products with confirmation alert
- Flash success messages after create/update/delete
- Responsive UI using Bootstrap 5

---

## 🧰 Tech Stack

- Laravel 10
- PHP 8+
- MySQL
- Bootstrap 5 (via CDN)
- Bootstrap Icons (via CDN)
- Blade templating engine

---

## ⚙️ Setup Instructions

### 1️⃣ Clone the Repository

```
git clone https://github.com/The-Coder-Joel/laravel-product-crud.git
cd laravel-product-crud
```

### 2️⃣ Install Dependencies

```
composer install
npm install
npm run dev
```

### 3️⃣ Configure `.env`

```
cp .env.example .env
```

Update your database details in `.env`:

```
DB_DATABASE=your_db_name
DB_USERNAME=your_db_user
DB_PASSWORD=your_db_password
```

### 4️⃣ Generate App Key

```
php artisan key:generate
```

### 5️⃣ Run Migrations

```
php artisan migrate
```

### 6️⃣ Start the Server

```
php artisan serve
```

Visit: [http://localhost:8000/products/](http://localhost:8000/products/)

---

## 📂 File Structure

```
├── app/
│   ├── Models/
│   │   └── Product.php
│   └── Http/
│       └── Controllers/
│           └── ProductController.php
├── database/
│   └── migrations/
│       └── xxxx_xx_xx_create_products_table.php
├── resources/
│   └── views/
│       └── products/
│           ├── index.blade.php
│           ├── create.blade.php
│           └── edit.blade.php
├── routes/
│   └── web.php
├── public/
│   └── uploads/ (for product images)
```

---

## 👤 Author

**Joel Benny**  
Web Developer – PHP | Laravel | WordPress  
📧 contact.joelbenny@gmail.com  
🌐 [https://the-coder-joel.github.io/](https://the-coder-joel.github.io/)
