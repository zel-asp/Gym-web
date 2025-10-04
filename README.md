# Padogskie Wild Gym
A modern fitness web system designed to promote health and well-being, built with PHP, Tailwind CSS, and MySQL.


## Installation

1. Clone the repository:
   - git clone https://github.com/username/padogskiewildgym.git
2. Navigate into the project folder
3. Install dependencies
    - npm install

## Folder Structure
├── public/         # Publicly accessible files (root of the web app)

│ ├── assets/       # Static assets like images, JS, and CSS

│ └── index.php     # Main entry point of the application
│
├── core/           # Core backend system files
│ ├── class/        # Custom PHP classes (e.g., Router, Database, etc.)
│ ├── function/     # Reusable PHP functions
│ └── routing/      # PHP route definitions and logic
│
├── controller/     # Handles business logic, calls models, and loads views
│
├── view/           # Contains all UI templates (HTML/PHP views)
│
├── src/            # Source folder for development assets
│ └── input.css     # Tailwind or custom CSS source file
│
└── package.json    # NPM dependencies and scripts if using Tailwind/PostCSS
