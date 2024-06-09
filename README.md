# Referral System

## Introduction

Welcome to the Simple Referral System! This system is built using the Laravel framework and allows users to refer others to a platform. Referrers can earn rewards based on the successful sign-ups . This README will guide you through the setup, configuration, and usage of the system.

## Table of Contents

1. [Requirements](#requirements)
2. [Installation](#installation)
3. [Configuration](#configuration)
4. [Database Migration](#database-migration)
5. [Usage](#usage)
6. [API Endpoints](#api-endpoints)
7. [Contributing](#contributing)
8. [License](#license)

## Requirements

Before you begin, ensure you have met the following requirements:

- PHP >= 7.3
- Composer
- Laravel >= 11.x
- MySQL

## Installation

To install the Referral System, follow these steps:

1. Clone the repository:
    ```sh
    git clone https://github.com/karim-mesghouni/referal_system.git
    ```

2. Navigate to the project directory:
    ```sh
    cd referral-system
    ```

3. Install dependencies:
    ```sh
    composer install
    ```

4. Create a copy of the `.env` file:
    ```sh
    cp .env.example .env
    ```

5. Generate an application key:
    ```sh
    php artisan key:generate
    ```

## Configuration

1. Update the `.env` file with your database credentials and other configurations:
    ```env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=referral_system
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    ```

2. Configure the mail settings in the `.env` file to enable email notifications for referrals.

## Database Migration

Run the following command to migrate the database:

```sh
php artisan migrate
```

## Usage

To use the Referral System, follow these steps:

1. Register a new user.
2. Generate referral code.
3. Share the referral code with others.
4. When a referred user signs up using the referral code, both of them will earn rewards.

## API Endpoints

Here are the main API endpoints for the Referral System:

- `POST /api/v1/auth/register`: Register new user.
- `POST /api/v1/auth/login`: Log in a user.
- `POST /api/v1/client/referralCode`: Get the referral code for the logged-in user.
- `POST /api/v1/client/checkReferralCode`: Check if the referral code is valid .
- `POST /api/v1/client/checkReferralCode: Check if the referral code is valid .


## Contributing

Contributions are welcome! Please follow these steps to contribute:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature-branch`).
3. SMake your changes.
4. Commit your changes (`git commit -m 'Add some feature'`).
5. Push to the branch (`git push origin feature-branch`).
6. Open a pull request.


## License

This project is licensed under the MIT  [License](https://opensource.org/licenses/MIT). See the LICENSE file for details.


Thank you for using the Referral System! If you have any questions or need further assistance, please feel free to contact me.












