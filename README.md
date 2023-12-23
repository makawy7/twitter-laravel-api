# Twitter REST API

- [Twitter React Native App](https://github.com/makawy7/twitter-react-native)
  - This is the React Native app that uses the API provided by this Laravel project. Check it out for the front-end implementation.

## Table of Contents

-   [Introduction](#introduction)
-   [Endpoints](#endpoints)
-   [Methods](#methods)
-   [Usage](#usage)

## Introduction

This project is a Twitter-like API built using Laravel, providing authentication, user profiles, tweet creation, and social features such as following and followers. Below, you'll find information about the available endpoints and the methods associated with each route.

## Endpoints

### Authentication

-   **POST /login**

    -   Logs in a user.
    -   Parameters:
        -   email (string): User's email.
        -   password (string): User's password.
        -   device_name (string): Name of the device for token creation.
    -   Response:
        -   token (string): User authentication token.
        -   user (object): User information (id, name, username, email, avatar).

-   **POST /register**

    -   Registers a new user.
    -   Parameters:
        -   name (string): User's name.
        -   email (string): User's email.
        -   username (string): User's username.
        -   password (string): User's password.
    -   Response:
        -   user (object): Newly registered user information.

-   **POST /logout**
    -   Logs out the authenticated user.
    -   Requires authentication.

### Tweets

-   **GET /tweets**
    -   Retrieves tweets from users the authenticated user follows.
    -   Requires authentication.
-   **POST /tweets**

    -   Creates a new tweet.
    -   Parameters:
        -   body (string): Tweet content.
    -   Requires authentication.

-   **GET /tweets/{tweet}**

    -   Retrieves details of a specific tweet.

-   **DELETE /tweets/{tweet}**

    -   Deletes a specific tweet.
    -   Requires authentication.

-   **GET /tweets_all**
    -   Retrieves all tweets from all users.
    -   Requires authentication.

### User Profile

-   **GET /users/{user}**

    -   Retrieves details of a specific user.

-   **GET /users/{user}/tweets**
    -   Retrieves tweets posted by a specific user.

### Following

-   **POST /follow/{user}**

    -   Follows a specific user.
    -   Requires authentication.

-   **POST /unfollow/{user}**

    -   Unfollows a specific user.
    -   Requires authentication.

-   **GET /is_following/{user}**
    -   Checks if the authenticated user is following a specific user.
    -   Requires authentication.

## Methods

### AuthController

-   **store**

    -   Logs in a user.

-   **destroy**
    -   Logs out the authenticated user.

### RegisterController

-   **store**
    -   Registers a new user.

### TweetController

-   **index**

    -   Retrieves tweets from users the authenticated user follows.

-   **store**

    -   Creates a new tweet.

-   **show**

    -   Retrieves details of a specific tweet.

-   **destroy**
    -   Deletes a specific tweet.

### TweetAllController

-   **index**
    -   Retrieves all tweets from all users.

### UserProfileController

-   **show**
    -   Retrieves details of a specific user.

### UserTweetsController

-   **index**
    -   Retrieves tweets posted by a specific user.

### UserFollowController

-   **store**

    -   Follows a specific user.

-   **destroy**

    -   Unfollows a specific user.

-   **isFollowing**
    -   Checks if the authenticated user is following a specific user.

## Usage

1. **Clone the repository:**

    ```bash
    git clone https://github.com/makawy7/twitter-laravel-api.git
    ```

2. **Install dependencies with Composer:**

    ```bash
    composer install
    ```

3. **Configure database settings in the .env file.**

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

    Update the `.env` file with your database credentials.

4. **Run migrations and seed the database:**

    ```bash
    php artisan migrate --seed
    ```

5. **Start the local development server:**

    ```bash
    php artisan serve
    ```