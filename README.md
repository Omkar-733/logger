
# 📝 Logger

A simple and effective web-based logging system using **PHP** for backend and **HTML/CSS/JavaScript** for frontend. This logger allows users to submit messages that are recorded with timestamps and stored in a log file on the server.

## 🌟 Features

- Submit logs directly from the browser
- Save logs to a server-side file using PHP
- Each log includes a timestamp for tracking
- Lightweight and easy to integrate
- Clean and responsive UI

## 🧰 Tech Stack

- 🔙 **Backend:** PHP
- 🌐 **Frontend:** HTML, CSS, JavaScript
- 📁 **Storage:** Text file (`logs.txt` or similar)

## 📁 Folder Structure

```

logger/
├── index.html        # Frontend interface
├── style.css         # Page styling
├── script.js         # Handles frontend logic (e.g., AJAX)
├── logger.php        # Backend handler to save logs
├── logs.txt          # File where logs are saved

````

## 🚀 Getting Started

1. **Clone the Repository**
```bash
git clone https://github.com/Omkar-733/logger.git
cd logger
````

2. **Set Up Locally**

* Make sure you have **XAMPP**, **WAMP**, or any PHP server running.
* Place the project folder inside your `htdocs` (XAMPP) or `www` (WAMP) directory.

3. **Access in Browser**

```
http://localhost/logger/index.html
```

4. **Try Logging**

* Enter a message in the input box
* Click **Submit**
* The log will be saved to `logs.txt` with the current timestamp

## 💻 Example Log Output (logs.txt)

```
[2025-06-22 01:30:45] INFO: User clicked the submit button
[2025-06-22 01:31:12] ERROR: Invalid input in form
```

## 📸 Screenshots

*Add screenshots here if available (e.g., UI form, output logs).*

## ✅ To Do

* [ ] Add log level dropdown (INFO, WARNING, ERROR)
* [ ] Add download logs feature
* [ ] Add authentication for log submission (optional)

## 📄 License

This project is open-source under the MIT License. Feel free to use, modify, and contribute.

---

Made with ❤️ by [Omkar Venkat Gogula](https://github.com/Omkar-733)

```

---

Let me know if you'd like:
- Markdown badges (for PHP, HTML, etc.)
- Screenshots embedded
- Hosting guidance (e.g., GitHub Pages + PHP backend)

I can also generate a basic `logger.php`, `index.html`, and `script.js` if you want a complete sample bundle.
```
