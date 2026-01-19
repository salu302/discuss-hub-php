# Discuss Forum - Professional Q&A Platform

A modern, stylish Question & Answer forum built with PHP and Bootstrap. Share knowledge, ask questions, and learn from the community.

## Features

✨ **Modern Design**
- Beautiful gradient header with purple theme
- Responsive layout that works on all devices
- Smooth hover effects and transitions
- Professional typography and spacing

💬 **Question Management**
- Ask questions with detailed descriptions
- Organize questions by categories
- Search functionality for finding questions
- View latest questions

🏷️ **Category System**
- 8 pre-configured categories:
  - Web Development
  - Mobile Development
  - Database Design
  - Programming Languages
  - DevOps & Cloud
  - UI/UX Design
  - Machine Learning
  - Security

👥 **User System**
- User registration and login
- User profiles with location
- Track your own questions
- View user's question history

💭 **Answer System**
- Answer questions and help others
- View all answers for each question
- Organized answer display with timestamps

## Installation

1. **Setup Database**
   ```bash
   mysql -u root -p discuss < sample_data.sql
   ```

2. **Configure Database Connection**
   Edit `common/db.php` and update:
   ```php
   $host = "localhost";
   $username = "root";
   $password = "your_password";
   $database = "discuss";
   ```

3. **Start Your Server**
   ```bash
   php -S localhost:8000
   ```

4. **Access the Application**
   Open your browser and navigate to `http://localhost:8000`

## Sample Data Included

### Categories (8)
- Web Development
- Mobile Development
- Database Design
- Programming Languages
- DevOps & Cloud
- UI/UX Design
- Machine Learning
- Security

### Sample Users
- `john_developer` - john@example.com
- `sarah_designer` - sarah@example.com
- `mike_fullstack` - mike@example.com

### Sample Questions & Answers
- 10 sample questions across various categories
- 10+ detailed answers from different users
- Real-world topics covering modern development

## Password for Sample Users
All sample users have password: `password123`

## Project Structure

```
discuss/
├── index.php                 # Main entry point
├── common/
│   └── db.php               # Database configuration
├── client/
│   ├── header.php           # Navigation header
│   ├── questions.php        # Questions list view
│   ├── question-details.php # Single question view
│   ├── answers.php          # Answers display
│   ├── ask.php              # Ask question form
│   ├── login.php            # Login form
│   ├── signup.php           # Registration form
│   ├── category.php         # Category selector
│   └── categorylist.php      # Category list sidebar
├── server/
│   └── requests.php         # Handle form submissions (API)
├── public/
│   ├── style.css            # Custom styling
│   └── logo.png             # Logo file
└── sample_data.sql          # Sample data for setup
```

## Technologies Used

- **Backend**: PHP 7.4+
- **Frontend**: HTML5, CSS3, Bootstrap 5.3
- **Database**: MySQL
- **Icons**: Font Awesome 6.4
- **Styling**: Modern CSS with gradients and animations

## Key Features Details

### Professional Header
- Gradient background (purple theme)
- Responsive navigation menu
- User dropdown for logged-in users
- Integrated search bar
- Font Awesome icons for better UX

### Responsive Design
- Mobile-first approach
- Breakpoints for tablets and desktops
- Touch-friendly buttons and forms
- Optimized spacing and padding

### Enhanced Forms
- Hero sections with call-to-action
- Better form field organization
- Input validation hints
- Icon integration for visual enhancement

### Better Question Display
- Card-based layout with shadows
- Hover effects for interactivity
- Icons for question types
- Clear typography hierarchy

## Security Features

- SQL Injection Protection (Prepared Statements)
- XSS Prevention (htmlspecialchars)
- Session-based authentication
- Input validation and sanitization

## Future Enhancements

- [ ] User profile pages
- [ ] Question upvoting system
- [ ] Answer acceptance/marking as solution
- [ ] User reputation system
- [ ] Tags system for better categorization
- [ ] Email notifications
- [ ] Advanced search filters
- [ ] Dark mode support

## License

MIT License - Feel free to use and modify for your projects

## Support

For issues or questions, please open an issue in the repository.

---

**Enjoy discussing and sharing knowledge! 🚀**
