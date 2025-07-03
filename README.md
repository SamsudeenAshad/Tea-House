# ☕ Thilini Cafe House

A modern, responsive coffee house website built with PHP and MySQL. This web application provides a complete coffee shop experience with online ordering, table reservations, and administrative management.

## 📋 Project Overview

**Thilini Cafe House** is more than just a website—it's a comprehensive digital solution that transforms traditional coffee shop operations into a modern, efficient business model. This project demonstrates real-world application development by creating a fully functional coffee house management system that bridges customer convenience with business efficiency.

### 🎯 Project Goals
- **Modernize Coffee Shop Operations**: Transform traditional cafe management with digital solutions
- **Enhance Customer Experience**: Provide seamless online ordering and reservation capabilities
- **Streamline Business Management**: Centralized admin dashboard for comprehensive oversight
- **Demonstrate Technical Skills**: Showcase full-stack web development expertise
- **Create Scalable Architecture**: Build foundation for future enhancements and growth

### 💼 Business Impact
This system addresses real challenges faced by coffee shop owners:
- **Reduced Manual Work**: Automated booking and order processing
- **Increased Revenue Streams**: 24/7 online ordering capabilities
- **Better Customer Insights**: Data collection and management through admin dashboard
- **Operational Efficiency**: Centralized management of reservations, orders, and customer communications
- **Professional Online Presence**: Modern, mobile-responsive website design

## 🌟 Features

### Customer Features
- **🏠 Home Page**: Engaging carousel showcasing coffee culture since 2025
- **ℹ️ About Us**: Learn about Thilini Cafe House story and mission
- **🍽️ Menu System**: Browse hot and cold coffee options with prices
  - Morning Brew - Black Coffee (Rs.150)
  - Mocha Bliss - Chocolate Coffee (Rs.250)
  - Creamy Comfort - Coffee with Milk (Rs.180)
  - Cold coffee varieties
- **📅 Table Reservations**: Book tables with date, time, and party size
- **🛒 Online Ordering**: Place coffee orders with delivery options
- **🚚 Services**: 
  - Fastest door delivery
  - Fresh coffee beans
  - Quality service guarantee
- **📞 Contact Form**: Send messages and inquiries
- **👥 Team Members**: Meet the cafe staff

### Admin Features
- **🔐 Admin Login**: Secure authentication system
- **📊 Dashboard**: Comprehensive management interface
- **📋 Reservation Management**: View and manage table bookings
- **📦 Order Management**: Track and process customer orders
- **💬 Message Management**: Handle customer inquiries

## 🛠️ Tech Stack

- **Frontend**: HTML5, CSS3, Bootstrap 4, JavaScript
- **Backend**: PHP 7+
- **Database**: MySQL
- **Libraries**: 
  - Font Awesome icons
  - Owl Carousel
  - Tempus Dominus (date/time picker)
  - jQuery
  - Bootstrap components

## 📁 Project Structure

```
Tea-House/
├── 📄 index.php              # Homepage
├── 📄 about.php              # About us page
├── 📄 menu.php               # Menu display
├── 📄 reservation.php        # Table reservation form
├── 📄 order.php              # Online ordering system
├── 📄 contact.php            # Contact form
├── 📄 service.php            # Services page
├── 📄 teammembers.php        # Team members page
├── 📄 connection.php         # Database connection
├── 📁 admin/                 # Admin panel
│   ├── adminlogin.php        # Admin authentication
│   ├── admindashboard.php    # Admin management dashboard
│   └── adminauthorization.php # Admin session handling
├── 📁 css/                   # Stylesheets
├── 📁 js/                    # JavaScript files
├── 📁 img/                   # Images and assets
├── 📁 lib/                   # External libraries
└── 📄 *.DB.php              # Database operation files
```

## 🗄️ Database Schema

The application uses a MySQL database named `coffee_cafe` with the following tables:

### `reservations`
- `name` - Customer name
- `email` - Customer email
- `reservation_date` - Booking date
- `reservation_time` - Booking time
- `person` - Number of guests

### `customer_orders`
- `name` - Customer name
- `email` - Customer email
- `order_date` - Order date
- `order_time` - Order time
- `coffee_type` - Type of coffee ordered
- `quantity` - Number of items
- `payment_type` - Payment method

### `messages`
- `name` - Customer name
- `email` - Customer email
- `subject` - Message subject
- `message` - Message content

## 🚀 Installation & Setup

### Prerequisites
- XAMPP (or similar local server environment)
- PHP 7.0 or higher
- MySQL 5.7 or higher
- Web browser

### Installation Steps

1. **Clone or Download**
   ```bash
   git clone <repository-url>
   # or download and extract the ZIP file
   ```

2. **Setup Local Server**
   - Install XAMPP
   - Start Apache and MySQL services
   - Place project folder in `htdocs` directory

3. **Database Setup**
   - Open phpMyAdmin (http://localhost/phpmyadmin)
   - Create database named `coffee_cafe`
   - Create the required tables:

   ```sql
   CREATE DATABASE coffee_cafe;
   USE coffee_cafe;

   CREATE TABLE reservations (
       id INT AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(100) NOT NULL,
       email VARCHAR(100) NOT NULL,
       reservation_date DATE NOT NULL,
       reservation_time TIME NOT NULL,
       person INT NOT NULL,
       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );

   CREATE TABLE customer_orders (
       id INT AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(100) NOT NULL,
       email VARCHAR(100) NOT NULL,
       order_date DATE NOT NULL,
       order_time TIME NOT NULL,
       coffee_type VARCHAR(100) NOT NULL,
       quantity INT NOT NULL,
       payment_type VARCHAR(50) NOT NULL,
       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );

   CREATE TABLE messages (
       id INT AUTO_INCREMENT PRIMARY KEY,
       name VARCHAR(100) NOT NULL,
       email VARCHAR(100) NOT NULL,
       subject VARCHAR(200) NOT NULL,
       message TEXT NOT NULL,
       created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
   );
   ```

4. **Access Application**
   - Open browser and navigate to `http://localhost/Tea-House`
   - Admin panel: `http://localhost/Tea-House/admin/adminlogin.php`

## 🔧 Configuration

### Database Connection
Update database credentials in `connection.php`:
```php
$servername = "localhost";
$username = "root";      // Your MySQL username
$password = "";          // Your MySQL password
$dbname = "coffee_cafe"; // Database name
```

## 📱 Responsive Design

The website is fully responsive and optimized for:
- 🖥️ Desktop computers
- 📱 Mobile devices
- 📱 Tablets
- 💻 Laptops

## 🎨 Features Highlights

- **Modern UI/UX**: Clean, professional design with coffee-themed aesthetics
- **Interactive Elements**: Carousels, smooth scrolling, hover effects
- **Form Validation**: Client-side and server-side validation
- **Security**: SQL injection protection with prepared statements
- **Success Pages**: User-friendly confirmation pages
- **Error Handling**: Custom 404 error page

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## 📞 Support

For support and inquiries, please contact:
- 📧 Email: [Contact through the website contact form]
- 🌐 Website: Thilini Cafe House

## 📜 License

This project is open source and available under the [MIT License](LICENSE).

---

**Built with ❤️ for coffee lovers everywhere!**

*Serving quality coffee and creating memorable experiences since 2025.*
