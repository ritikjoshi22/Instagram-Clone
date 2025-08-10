# Instapound - Instagram Clone

Instapound is a social media web application inspired by Instagram, built with **Laravel** and **MongoDB**.  
This project demonstrates a simple yet powerful implementation of core social features such as user profiles, posts, likes, and comments, using Laravel's backend with MongoDB Atlas as the database.

---

## Features

- User Authentication and Profiles  
- Create, Edit, and Delete Posts  
- Like and Comment on Posts  
- Real-time interaction with MongoDB  
- Responsive and clean UI  

---

## Technologies Used

- Laravel 12.x (PHP Framework)  
- MongoDB (NoSQL Database) via MongoDB Atlas  
- Composer for dependency management  
- Blade templating engine for frontend  
- Bootstrap (or your CSS framework if used)  

---

## Screenshots

> Replace the placeholders below with your actual screenshots.  
> You can add screenshots of the profile page, post feed, and any other important features.

### User Profile  
(screenshots/profile.png)

### Post Feed  
(screenshots/feed.png\)

### Comments and Likes  
(screenshots/like&comment.png)

---

## Installation and Setup

1. **Clone the repository**
```bash
git clone https://github.com/your-username/instapound.git
```
2. **Navigate to the project folder** 
```bash
cd instapound
```
3. **Install PHP dependencies via Composer**
```bash
composer install
```
4. **Copy .env.example to .env and configure your environment variables, especially MongoDB connection string:**
```bash
cp .env.example .env
```
**Edit .env to add your MongoDB Atlas URI, for example:**
```ini
DB_CONNECTION=mongodb
DB_HOST=cluster0.mongodb.net
DB_PORT=27017
DB_DATABASE=your-db-name
DB_USERNAME=your-username
DB_PASSWORD=your-password
```
5. **Generate application key**
```bash
php artisan key:generate
```

6. **Run migrations and seeders (if any)**
```bash
php artisan migrate
php artisan db:seed
```

7. **Serve the application locally**
```bash
php artisan serve
```

---

## Usage
1. Register a new account or login with existing credentials.
2. Create and share posts with images and captions.
3. Like and comment on other users' posts to interact socially.
4. Explore profiles and manage your own posts.

---

## Contributing

Contributions are welcome! Feel free to open an issue or submit a pull request if you have any suggestions or improvements.

---