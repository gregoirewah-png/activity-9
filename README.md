# Activity 9: Laravel Authentication & Routing

## Description
This project demonstrates the implementation of a basic authentication system using Laravel 7. It features conditional routing and layout adjustments based on user authentication status. 

### Key Features:
* **Public Landing Page:** Accessible to all unregistered/guest users.
* **Protected Dashboard:** Restricted area accessible only to authenticated users.
* **Dynamic Navbar:** Navigation links adapt automatically. Guests see 'Login/Register', while authenticated users gain access to a 'Dashboard' link and a dropdown to log out.
* **Middleware Security:** The dashboard route is secured utilizing Laravel's built-in `auth` middleware, strictly preventing guest access.