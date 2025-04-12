# 🚀 ExpireIt

**ExpireIt** is a Laravel application designed to securely share time-sensitive messages via unique, tokenized URLs. Built with Laravel Livewire, it provides a smooth, real-time experience for message viewing.

## ✨ Features

- 🔐 **Tokenized Message Links**: Securely generate unique links for each message.
- ⚡ **Livewire Integration**: Dynamic, real-time message display using Laravel Livewire.
- ⏳ **Message Expiration**: Messages can expire after a set time for added security.
- 🖥️ **User-Friendly Interface**: Clean and responsive UI with Blade and Tailwind CSS.

## 🛠️ Installation

To set up the project locally:

1. **Clone the Repository**
   ```bash
   git clone https://github.com/bryanmoreira/expireit.git
   cd expireit
   ```

2. **Install Dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Set Up Environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
   Edit your `.env` file with the correct database and app settings.

4. **Run Migrations**
   ```bash
   php artisan migrate
   ```

5. **Build Frontend Assets**
   ```bash
   npm run dev
   ```

6. **Serve the Application**
   ```bash
   php artisan serve
   ```

   Visit [http://localhost:8000](http://localhost:8000) in your browser.

## 📄 Usage

1. 📝 **Create a Message**  
   Input your message and expiration time (optional), then generate a secure link.

2. 🔗 **Share the Link**  
   Send the tokenized link to your recipient.

3. 👁️ **View the Message**  
   When the link is opened, the message will be displayed using a Livewire component. Expired messages will show an appropriate message.

## 🧰 Tech Stack

- 🌐 PHP (Backend Language)
- 🧠 Laravel (PHP Framework)
- ⚡ Laravel Livewire (Reactive Components)
- 🧩 Blade (Templating)
- 🎨 Tailwind CSS (Styling)
- 🗄️ MySQL (Database)
