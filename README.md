# Coffee Catering Reservation System

## Group Information
**Group Name**: Ruby
**Section**: 5
**Group Members** :
- HANI KHAIRANI BINTI MOHD RAZIF - 2319158
- DAHLIA CINTA BINTI ABDUL RAZAK - 2317562
- DANIA SAFIYYA BINTI FARID - 2310056
- HANIS BINTI AZHAR - 2312128

## Project Overview
The growth of small catering businesses has increased the need for an efficient reservation system, as many businesses still rely on manual bookings through phone calls or walk-ins. This often leads to issues such as lost reservations, pricing miscalculations and double bookings.

To address these problems, the Coffee Catering Reservation System was developed for Lands & People Cafe. This web-based system simplifies the reservation process by allowing users to choose predefined coffee catering packages based on their budget and event requirements.

---

##Project Objectives
The objectives of this system are:
1. To digitalize the reservation process by replacing manual phone-based booking with an online platform.
2. To provide users with a seamless reservation experience for selecting packages and entering event details.
3. To assist staff in managing reservations efficiently.
4. To enhance user satisfaction by enabling users to view, update, and cancel bookings.

---
## Target Users
- Customers : Individuals looking to book coffee catering
- Owners : Owners who want to manage bookings effectively digitally


## Features and Functionalities
- Home page showcase: Display service offered such as professional baristas, fresh - ingredients, handcrafted drinks, event catering, and mobile coffee.
- Package display: Shows the fixed package coffee menu and pricing.
- Online reservation form: Let users input personal and event details.
- Date picker calendar: Allows users to select dates easily.
- Booking status page: Shows whether users have active bookings or not.
- Booking option button: Provides edit and cancel option for active booking.
- Update reservation form: Allows users to edit previous booking details.
- Cancellation confirmation popup: Asks confirmation cancel to avoid accidental cancellation.
- Navigation bar: Gives quick access to home, packages, my bookings and book now.
- Footer information: Provides location, social media links and contact details.

---


## Technical Implementation
** Technology Stack**

- Backend Framework: Laravel 10.x
- Frontend: Blade Templates with Bootstrap 5
- Database: MySQL 8.0
- Authentication: Laravel Breeze
- Image Storage: Laravel File Storage
- Development Environment: XAMPP

---
** Database Design**
Database Schema Overview
Our database consists of [X] main tables designed to handle users, restaurants, menus, orders, and related data:
Core Tables:

- users
- 
### Entity Relationship Diagram (ERD)
https://drive.google.com/file/d/1M581HbGbgGo_6I07NI9Z8xIYBwOJd6Ia/view?usp=sharing

Key Relationships:
- Package can have many reservation details ( One to Many )
- Reservation Details can have many reservation update ( One to Many )
- Reservation details can have many or none cancelled reservation ( One to One (optional))

** Laravel Components Implementation**
- Routes (Web.php)
  
<?php

use App\Http\Controllers\BookingController;
use App\Models\Booking;

Route::get('/', function () {
    return view('home');
})->name('home');

// Move booking store route outside auth middleware (allow guests to submit, but check in controller)
Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Other booking routes (protected - require login)
    Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');
    Route::get('/bookings/{booking}/edit', [BookingController::class, 'edit'])->name('bookings.edit');
    Route::put('/bookings/{booking}', [BookingController::class, 'update'])->name('bookings.update');
    Route::delete('/bookings/{booking}', [BookingController::class, 'destroy'])->name('bookings.destroy');

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/packages', function () {
        return view('packages'); 
    })->name('packages');
});

- Controllers
  
  *Main Controllers Implemented are below :*
 1.BookingController :Displays all bookings for the currently authenticated user  


- Models and Relationships

---


<?php//Booking Model
class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'phone',
        'date',
        'pax',
        'package_id',
        'address',
    ];

     protected $casts = [
        'date' => 'datetime', // Now $booking->date is a Carbon instance
    ];

    // Relationship: A booking belongs to a user
    public function user()
    {
       // return $this->belongsTo(Package::class);
          return $this->belongsTo(User::class);
    }
    
}

---

//Membership Model
class Membership extends JetstreamMembership
{
    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;
}
---

//Team Model
class Team extends JetstreamTeam
{
    /** @use HasFactory<\Database\Factories\TeamFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'personal_team',
    ];

    /**
     * The event map for the model.
     *
     * @var array<string, class-string>
     */
    protected $dispatchesEvents = [
        'created' => TeamCreated::class,
        'updated' => TeamUpdated::class,
        'deleted' => TeamDeleted::class,
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'personal_team' => 'boolean',
        ];
    }
}
---

//TeamInvitation Model
class TeamInvitation extends JetstreamTeamInvitation
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'email',
        'role',
    ];

    /**
     * Get the team that the invitation belongs to.
     */
    public function team(): BelongsTo
    {
        return $this->belongsTo(Jetstream::teamModel());
    }
}

---

//User Model
class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
---

- Views and User Interface
*Blade Templates Structure:*
- dashboard.blade.php -
- home.blade.php -
- navigation-menu.php - 
- policy.blade.php -
- terms.blade.php -

---

 *Design Features:*
 - 
## User Authentication System
### ** Authentication Features**
- **Registration System**: Email validation, password confirmation, role selection
- **Login System**: Secure authentication with "Remember Me" option

---

### **Security Measures**
- 

---

## Installation and Setup Instructions
### Prerequisites :
- PHP >= 8.1
- Composer
- Node.js and NPM
- MySQL 8.0
- XAMPP 

---
### Step-by-Step Installation
1. Clone or download this repository
2. Open the project folder
3. Open `index.html` using any web browser

---
## Testing and Quality Assurance
###  Functionality Testing
- User registration and login system
- Coffee packages browsing and display
- Active bookings display
- Responsive design across devices

---
### Browser Compatibility
-  Google Chrome (Latest)
-  Mozilla Firefox (Latest)
-  Safari (Latest)
-  Microsoft Edge (Latest)

---
### Performance Testing
- Fast Page Load: Ensured all pages load in under 3 seconds for optimal user experience
- Database Optimization: Queries were optimized to reduce load times and improve efficiency
- Image Optimization: Compressed images without compromising quality to enhance performance
- Responsive Testing: Verified that the system works seamlessly across desktops, tablets, and mobile devices
---
## Challenges Faced and Solutions
### Challenge 1:Ensuring Mobile Responsiveness
- Problem: Users needed to make reservations easily on phones, tablets, and desktops.
- Solution: Utilized Bootstrap and responsive design techniques to create a consistent and user-friendly interface across all devices.
### Challenge 2: Complex Reservation Management
- Problem: Handling relationships between reservations, coffee packages, and customer details was complicated, especially for multiple bookings and updates.
- Solution: Implemented proper Eloquent relationships with pivot tables for many-to-many connections, ensuring accurate tracking of reservations and package selections.
---
## Future Enhancements
### Phase 2 Features (Potential Improvements)
- Live Notifications: Instant alerts for reservation confirmations, updates, and changes
- Online Payment Support: Integration with secure payment gateways such as Stripe or PayPal
- Location-Based Tracking: Map-based tracking for catering delivery and event locations
- Customer Feedback Module: Ratings and reviews to improve service quality
- Data Analytics Dashboard: Insights into booking patterns, revenue, and customer behavior
- Custom Package Builder: Let users create their own coffee catering packages with flexible options
- Mobile Application: Dedicated iOS and Android apps for convenient access
- Inventory Alerts: Notify staff of ingredient or stock shortages to prevent overbooking
---
### Scalability Considerations
- Database optimization to efficiently handle larger datasets
- Implementation of caching mechanisms to improve system performance
- API development to support mobile application integration
- Load balancing strategies to ensure reliability under high-traffic scenarios

---
## Learning Outcomes
### Technical Skills Gained

- Laravel Framework: Applied MVC architecture and Eloquent ORM for structured application development
- Database Design: Designed efficient database schemas and managed relational data
- Authentication: Implemented secure user authentication and authorization mechanisms
- Frontend Development: Built responsive and user-friendly interfaces using Bootstrap
- Version Control: Utilized Git and GitHub for effective version control and collaborative project management

---
### Soft Skills Developed
- **Team Collaboration** : Working effectively and cooperatively within a group environment
- **Project Management** : Planning, organizing, and executing a complex web application project
- **Problem Solving** : Identifying, debugging, and resolving technical challenges
- **Documentation** : Producing clear and comprehensive project documentation

---

## References
- Figma Prototype: Coffee Catering Reservation System
- Easy Eat. (2025). https://easyeat.ai/r/landsnpeople/2

---

## Conclusion
Our coffee reservation system successfully demonstrates the implementation of a comprehensive coffee reservation system using the Laravel framework. The project highlights proficiency in core web development principles, including MVC architecture, database design, user authentication, and responsive web design.

---

### Key Achievements
- Successfully implemented all required Laravel components (Routes, Controllers, Views, and Models)
- Designed and developed a functional coffee reservation system with user role management
- Built a responsive and user-friendly interface for seamless reservation and ordering
- Demonstrated a strong understanding of database relationships and full CRUD operations
- Applied security best practices for user authentication and access control

---

### Project Impact
This project offers hands-on experience in developing real-world web applications and highlights the ability to collaborate effectively within a team. The skills acquired through this project are highly relevant and transferable to professional web development environments.
- Project Completion Date: 11/1/2026
- Course: INFO 3305 Web Application Development

---


## Screenshots

### Home Page
[Home Page](screenshots/screenshot-HomePage.jpeg)

### Packages Page
[Packages Page](screenshots/screenshot-Packages.png)

### Reservation Form
[Reservation Form](screenshots/screenshot-BookingForm.jpeg)

### My Bookings Page
[My Bookings](screenshots/screenshot-Mybookings.png)


---

## Demo Consistency
The code implementation and functionalities in this repository fully reflect the project demonstrated during the presentation.

---
