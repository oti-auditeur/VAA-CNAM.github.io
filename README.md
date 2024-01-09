# VAA-CNAM.github.io
VAA-CNAM PROJECT
# Polynesian Canoe Association App

Welcome to the Polynesian Canoe Association App repository! This application is designed to streamline and enhance the management of a Polynesian Canoe Association. Whether you're a paddler, trainer, or administrator, this app provides a comprehensive solution to manage training sessions, attendance, performance tracking, and more.

## Features

- **User Roles:**
  - Paddlers
  - Trainers
  - Administrators

- **Key Functionality:**
  - Schedule and manage training sessions
  - Track paddlers' attendance
  - Record and analyze performance metrics
  - Receive notifications and announcements
  - Cultural elements integration for a holistic experience
  - Customer support ticket system

## Getting Started

### Prerequisites

- Visual Code
- Laravel Framework 10.34.2
- PHP 8.3.0
- Laragon V6.0
- Other dependencies (check the `package.json` file)

### Installation

1. Clone the repository in the C:\laragon\www\VAA repository :

    ```bash
    git clone https://github.com/oti-auditeur/VAA-CNAM.github.io
    ```

2. Install dependencies:

    ```bash
    cd VAA
    composer install
    npm install
    ```

3. Configure the environment variables:

    Create a `.env` file in the root directory and set the necessary variables. You can use `.env.example` as a template.
   Or, just cp .env.example .env

4. Run the application:

    ```bash
    npm run dev
    php artisan serve
    ```

Visit `http://localhost:8000` in your browser to access the application.

5. Migrate the database :

    ```bash
    php artisan migrate
    ```   

## Usage

- **Paddlers:**
  - View and register for training sessions
  - Possibility to register with email
  
- **Trainers:**
  - Schedule and manage training sessions
  - Track paddlers' attendance and performance
  - Send notifications and announcements

- **Administrators:**
  - Manage user roles and permissions
  - Credentials :  *email : admin@gmail.com
                   *Password : password
  
## Contributing

If you'd like to contribute to the development of the Polynesian Canoe Association App, please follow the [contribution guidelines](CONTRIBUTING.md).

## License

This project is licensed under the [MIT License](LICENSE).

## Acknowledgments

- Thanks to all contributors who have helped make this project possible.

Feel free to reach out if you have any questions or issues!
