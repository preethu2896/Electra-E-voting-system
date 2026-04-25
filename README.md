<div align="center">
  <h1>🗳️ Electra - E-Voting System</h1>
  <p>A secure, intuitive, and modern online voting web application.</p>

  <!-- Badges -->
  <p>
    <img alt="HTML5" src="https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white"/>
    <img alt="CSS3" src="https://img.shields.io/badge/css3-%231572B6.svg?style=for-the-badge&logo=css3&logoColor=white"/>
    <img alt="JavaScript" src="https://img.shields.io/badge/javascript-%23323330.svg?style=for-the-badge&logo=javascript&logoColor=%23F7DF1E"/>
    <img alt="PHP" src="https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white"/>
    <img alt="MySQL" src="https://img.shields.io/badge/mysql-%2300f.svg?style=for-the-badge&logo=mysql&logoColor=white"/>
  </p>
</div>

<br/>

Welcome to **Electra**, an online voting web application designed to facilitate secure and seamless digital voting. Built with a robust stack of HTML, CSS, JavaScript, PHP, and MySQL, this system is engineered to run efficiently on local servers like XAMPP.

## 📸 Screenshots

| **Landing Page** | **Registeration** |
| :---: | :---: |
| <img src="https://github.com/user-attachments/assets/3042db4e-db16-4079-ac75-d78d5ac45255" alt="Landing Page" width="100%"/> | <img src="https://github.com/user-attachments/assets/5ee076a5-79dd-4450-a01a-7e178a991bc6" alt="Registeration" width="100%"/> |
| **Login Page** | **Voting Interface** |
| <img src="https://github.com/user-attachments/assets/aacb301c-c655-4035-ac8a-c6d5656750d5" alt="Login Page" width="100%"/> | <img src="https://github.com/user-attachments/assets/74bfe455-3978-4806-bf99-b0aadd66c663" alt="Voting Interface" width="100%"/> |
| **Results** | **Database** |
|<img src="https://github.com/user-attachments/assets/232f1846-4cb2-4e7a-8b09-6df786e493eb" alt="Results" width="100%"/> | <img src="https://github.com/user-attachments/assets/ce853fdb-4b55-4b45-95df-1465c7685dd9" alt="Database" width="100%"/> | 

---

## 📑 Table of Contents
- [✨ Features](#-features)
- [🛠️ Technologies Used](#️-technologies-used)
- [🚀 Setup Instructions](#-setup-instructions)
- [📖 Usage](#-usage)
- [📂 Folder Structure](#-folder-structure)

---

## ✨ Features
- 🔐 **User Registration & Authentication:** Secure sign-up and login mechanisms.
- 👤 **Candidate Registration:** Easy onboarding for election candidates.
- 🗳️ **Secure Voting System:** Reliable vote casting with submission integrity.
- ⚙️ **Admin Panel:** Comprehensive dashboard for managing users and candidates.
- 📊 **Real-time Results:** Live vote counting and transparent results display.

## 🛠️ Technologies Used
- **Frontend:** HTML5, CSS3, JavaScript
- **Backend:** PHP
- **Database:** MySQL
- **Environment:** XAMPP (Local Server)

## 🚀 Setup Instructions

To run **Electra** locally on your machine, follow these steps:

### 1. Prerequisites
- Download and install [XAMPP](https://www.apachefriends.org/index.html).

### 2. Clone the Repository
```bash
git clone https://github.com/your-username/Electra-E-voting-system.git
```
*(Or simply download the ZIP file and extract it.)*

### 3. Move Files
- Move the extracted/cloned folder to your XAMPP `htdocs` directory.
- Example: `C:\xampp\htdocs\voteronline\`

### 4. Start Local Server
- Open the **XAMPP Control Panel**.
- Start the **Apache** and **MySQL** modules.

### 5. Database Setup
- Open your browser and navigate to [http://localhost/phpmyadmin](http://localhost/phpmyadmin).
- Create a new database named `voteronline`.
- Import the provided SQL file (located in the `database` folder) into the `voteronline` database to generate the required tables.

### 6. Configure Connection
- Locate the configuration file in the project (e.g., `api/connect.php` or `config.php`).
- Ensure the database credentials match your local MySQL configuration:
  - **Hostname:** `localhost`
  - **Username:** `root`
  - **Password:** *(empty by default)*
  - **Database:** `voteronline`

## 📖 Usage

1. **Access the App:** Open your browser and go to `http://localhost/voteronline` (adjust based on your folder name in `htdocs`).
2. **Register/Login:** Create a new voter account or log in with existing credentials.
3. **Admin Controls:** Log in with admin credentials to manage users and candidates.
4. **Cast Vote:** Registered users can browse candidates and securely cast their vote.
5. **Monitor Results:** Admins can view real-time aggregated voting data on the results page.

## 📂 Folder Structure
- `css/`: Contains CSS files for styling the web pages.
- `js/`: Contains JavaScript files for client-side scripting.
- `api/`: Contains PHP files for server-side logic and database connection.
- `routes/`: Frontend or backend routing endpoints.
- `uploads/`: Directory for uploaded images or files.
