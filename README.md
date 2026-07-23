# 📰 NizamBlog
### PHP Content Management System (CMS) for News & Blogging Platform

NizamBlog is a web-based Content Management System (CMS) developed using **PHP Native**, **MySQL**, and **Bootstrap**. The system enables administrators to publish news articles, organize categories, manage comments, and maintain website content through an easy-to-use administration panel.

This project demonstrates CRUD operations, authentication, content management, and responsive web development using core PHP.

---

## ✨ Features

### 🌐 Public Website

- Homepage
- News Detail Page
- Search Articles
- Browse by Category
- About Us
- Contact Us
- Responsive Layout

### 🔐 Admin Panel

- Secure Administrator Login
- Dashboard Overview
- Manage Articles
- Manage Categories
- Manage Subcategories
- Manage Comments
- Manage Contact Information
- Manage About Page
- Manage Sub Administrators
- Change Password
- Upload Featured Images

---

## 🏗 System Architecture

```
Visitor
    │
    ▼
Website
    │
    ▼
PHP Application
    │
    ▼
MySQL Database
```

The application follows a modular PHP structure with separated admin and public interfaces.

---

## 📂 Project Structure

```
nizamblog/
│
├── admin/
│   ├── dashboard.php
│   ├── add-post.php
│   ├── edit-post.php
│   ├── manage-posts.php
│   ├── add-category.php
│   ├── manage-categories.php
│   ├── manage-comments.php
│   ├── manage-subadmins.php
│   ├── login/
│   └── includes/
│
├── includes/
│
├── assets/
│
├── index.php
├── news-details.php
├── category.php
├── search.php
├── contact-us.php
└── about-us.php
```

---

## ⚙️ Technology Stack

| Technology | Description |
|------------|-------------|
| PHP | Backend Programming Language |
| MySQL | Relational Database |
| HTML5 | Markup Language |
| CSS3 | Styling |
| Bootstrap | Responsive UI Framework |
| JavaScript | Client-side Interaction |
| jQuery | Frontend Library |

---

## 📋 Main Modules

### 📰 Article Management

- Create Article
- Edit Article
- Delete Article
- Publish News
- Upload Featured Image

### 📂 Category Management

- Add Category
- Edit Category
- Delete Category
- Manage Subcategory

### 💬 Comment Management

- View Comments
- Approve Comments
- Remove Comments

### 👤 User Administration

- Admin Authentication
- Sub Admin Management
- Change Password

### 📄 Website Management

- About Us
- Contact Information
- Homepage News
- News Detail

---

## 🔄 System Workflow

```
Administrator Login
        │
        ▼
Dashboard
        │
        ├───────────────┐
        ▼               ▼
Article         Category
Management      Management
        │               │
        └──────┬────────┘
               ▼
          Publish News
               │
               ▼
         Public Website
               │
               ▼
      Visitor Reads Articles
```

---

## 🚀 Installation

### Requirements

- PHP 7.4+
- MySQL / MariaDB
- Apache (XAMPP, Laragon, WAMP)
- Web Browser

---

Clone repository

```bash
git clone https://github.com/your-username/nizamblog.git
```

Move into project

```bash
cd nizamblog
```

Import the SQL database into MySQL.

Configure database connection in:

```
admin/includes/config.php
```

Run Apache and MySQL.

Open:

```
http://localhost/nizamblog
```

Admin Panel:

```
http://localhost/nizamblog/admin
```

---

## 🎯 Core Functionalities

✔ Article Publishing

✔ Category Management

✔ Comment Moderation

✔ Admin Dashboard

✔ Contact Management

✔ About Page Management

✔ Search Articles

✔ Responsive Interface

---

## 📈 Future Improvements

- User Registration
- Rich Text Editor Enhancement
- SEO Optimization
- Article Tags
- Newsletter Subscription
- REST API
- JWT Authentication
- Image Compression
- Multi-language Support
- Dark Mode
- Analytics Dashboard

---

## 🎓 Learning Outcomes

This project demonstrates:

- PHP Native Development
- CRUD Operations
- Authentication & Authorization
- Session Management
- MySQL Database Integration
- File Upload Handling
- Responsive Web Design
- Content Management System (CMS)

---

## 👨‍💻 Developer

**Nizam Hukmul Kautsar**

Bachelor of Computer Science

Universitas Islam Negeri Maulana Malik Ibrahim Malang

---

## 📄 License

This project was developed for educational purposes and portfolio demonstration.
