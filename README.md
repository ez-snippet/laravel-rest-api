# 📌 Laravel REST API – Fake Store Project

This project is a **Laravel REST API** that fetches product data from an external Fake Store API and displays it in JSON format.

---

## 🚀 Features

- Fetch products from Fake Store API  
- Display all products in JSON format  
- Get single product by ID  
- Clean REST API structure  
- Ready for frontend/store integration  

---

## 🛠️ Tech Stack

- Laravel  
- PHP  
- REST API  
- Fake Store API (FakePlaceholder)

---

## 🌐 External API

https://fakestoreapi.com/products

---

## 📡 API Endpoints

| Method | Endpoint            | Description        |
|--------|--------------------|--------------------|
| GET    | /api/products      | Get all products   |
| GET    | /api/products/{id} | Get single product |

---

## ▶️ Run Project

bash
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
📌 Example Response
{
  "id": 1,
  "title": "Fjallraven Backpack",
  "price": 109.95
}
👨‍💻 Author

Muhammad Ali
Full Stack Web Developer (Learning Phase 🚀)

⭐ If you like this project, give it a star!
