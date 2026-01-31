# ODM Comrades Chapter (OCC) System

A comprehensive platform for finding, registering, and managing members of the ODM Comrades Chapter. This system is designed to empower youth and comrades by providing a digital space for engagement, leadership, and community organization.

## Features

### User Features
- **Web Registration**: Complete membership registration with:
  - Personal information (National ID, Phone, Names)
  - Institution selection from comprehensive database
  - Geographic selection (Region → County → Constituency → Ward)
  - Custom polling station entry with auto-creation
- **USSD Registration**: Mobile phone registration without internet:
  - Dial *123# to access registration menu
  - Complete registration via interactive USSD menus
  - 4-digit PIN setup for account access
  - Works on any mobile phone (no internet required)
- **Authentication**: Secure login and logout functionality
- **User Dashboard**: Complete profile management showing:
  - Personal details and account information
  - Institution information with full details
  - Polling station and geographic hierarchy
  - Account status and registration history

### Admin Features
- **Admin Dashboard**: Comprehensive statistics and analytics:
  - Total members, counties, constituencies, wards
  - Active institutions count
  - Recent registrations tracking
  - User distribution by county (top 10)
  - User distribution by institution type
- **User Management**: Complete user administration:
  - Paginated user listing (25 per page)
  - Detailed user profiles with full information
  - Admin privilege management
  - Bulk export functionality (CSV, Excel, PDF, Word)
- **Data Export**: Multi-format export capabilities:
  - Complete user database export
  - Geographic and institutional data
  - Account information and registration history

### System Features
- **Geographic Data Management**: Complete Kenyan administrative hierarchy:
  - Regions → Counties → Constituencies → Wards → Polling Stations
  - Cascading dropdown selection for user registration
  - Dynamic polling station creation
- **Institution Database**: Comprehensive educational institutions:
  - Universities, Colleges, TVET institutions
  - Public and private institution categorization
  - Ministry and location information

## Requirements

- PHP >= 8.2
- Composer
- MySQL / MariaDB
- Node.js & NPM (Optional, as Tailwind CDN is currently used)

## Installation & Setup

1. **Clone the Repository**
   ```bash
   git clone https://github.com/osumba404/occ.git
   cd occ
   ```

2. **Install Dependencies**
   ```bash
   composer install
   ```

3. **Environment Configuration**
   - Copy the example environment file:
     ```bash
     cp .env.example .env
     ```
   - Update the `.env` file with your database credentials:
     ```ini
     DB_CONNECTION=mysql
     DB_HOST=127.0.0.1
     DB_PORT=3306
     DB_DATABASE=occ
     DB_USERNAME=root
     DB_PASSWORD=
     ```

4. **Generate Application Key**
   ```bash
   php artisan key:generate
   ```

5. **Run Migrations**
   Create the database tables:
   ```bash
   php artisan migrate
   ```

6. **Seed the Database** (Optional)
   To populate the database with geographic and institutional data:
   ```bash
   # Import geographic data (regions, counties, constituencies, wards)
   mysql -u root -p occ < new.sql
   
   # Import institutional data (universities, colleges, TVETs)
   mysql -u root -p occ < uni.sql
   ```

7. **Serve the Application**
   Start the local development server:
   ```bash
   php artisan serve
   ```
   The application will be accessible at `http://127.0.0.1:8000`.

## Application Structure

### Database Schema
- **Users**: Member information and authentication
- **Regions**: Geographic regions (Nairobi, Central, Eastern, etc.)
- **Counties**: Kenyan counties with IEBC codes
- **Subcounties**: Constituencies with IEBC codes
- **Wards**: Electoral wards with IEBC codes
- **Polling Stations**: Custom polling stations with ward relationships
- **Institutions**: Educational institutions with categorization

### Key Routes
- `/` - Welcome page
- `/register` - User registration (web)
- `/login` - User authentication
- `/dashboard` - User dashboard (authenticated)
- `/admin` - Admin dashboard (admin only)
- `/admin/users` - User management (admin only)
- `/admin/export/users/{format}` - Data export (admin only)
- `/ussd` - USSD endpoint (mobile gateway)
- `/ussd-test` - USSD testing interface

### Controllers
- `AuthController` - Authentication and registration
- `DashboardController` - User dashboard
- `AdminController` - Admin panel and user management
- `UssdController` - USSD registration system

### Middleware
- `AdminMiddleware` - Protects admin routes
- Authentication middleware for protected routes

## Tech Stack

- **Backend**: Laravel 12
- **Frontend**: Blade Templates, Tailwind CSS (CDN)
- **Database**: MySQL
- **Authentication**: Laravel's built-in authentication
- **Pagination**: Laravel's pagination system
- **Export**: Custom CSV export (ready for Excel/PDF/Word extensions)
- **USSD**: Custom USSD implementation with session management

## USSD Registration

The system includes a comprehensive USSD registration system that allows users to register without internet access:

### USSD Code: *123#

### Features:
- **Complete Registration Flow** - Full registration via interactive menus
- **Geographic Selection** - Region → County → Constituency → Ward
- **Institution Database** - Select from existing institutions or enter custom
- **PIN Security** - 4-digit PIN for account access
- **Session Management** - Persistent session handling
- **Error Handling** - Comprehensive input validation

### Testing:
Access the USSD testing interface at: `http://127.0.0.1:8000/ussd-test`

### Documentation:
See `USSD_DOCUMENTATION.md` for complete technical details and deployment guide.

## User Roles

### Regular Members
- Register with complete profile information
- View personal dashboard with account details
- Access institution and polling station information

### Administrators
- Access admin panel via "Access Admin Panel" link
- View comprehensive statistics and analytics
- Manage all registered users
- Export user data in multiple formats
- Toggle admin privileges for other users

## Data Export Formats

The system supports exporting user data in multiple formats:
- **CSV**: Fully functional with proper headers
- **Excel (.xlsx)**: Framework ready (requires `maatwebsite/excel`)
- **PDF**: Framework ready (requires `barryvdh/laravel-dompdf`)
- **Word (.docx)**: Framework ready (requires `phpoffice/phpword`)

## Security Features

- Password hashing with Laravel's built-in security
- Admin middleware protection for sensitive routes
- CSRF protection on all forms
- Input validation and sanitization
- Role-based access control

## Future Enhancements

- Email verification for user registration
- Advanced search and filtering capabilities
- Real-time notifications and messaging
- Mobile application development
- Advanced analytics and reporting
- Integration with payment systems
- Event management and RSVP functionality

## Contributing

1. Fork the repository.
2. Create a feature branch (`git checkout -b feature-name`).
3. Commit your changes (`git commit -m 'Add new feature'`).
4. Push to the branch (`git push origin feature-name`).
5. Open a Pull Request.

## License

The ODM Comrades Chapter system is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
